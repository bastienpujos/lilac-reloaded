<?php
/**
 * Lilac Installer Script
 */
require_once('includes/update.php');

$config_exists = false;
if(false === ($fp = @fopen(dirname(__FILE__) . "/includes/lilac-conf.php", "w+"))) {
	$config_exists = false;
}
else {
	$config_exists = true;
}
if($fp)
	fclose($fp);

if(!isset($_POST['stage'])) {
	$stage = "1";
}
else {
	$stage = $_POST['stage'];
}

if($config_exists !== true)
	$stage = "99";

$cUpdate = new lilacUpdate();

if($stage == 1 && $_POST['update'] == "execute") {
	$error = false;

	if(!$error) {
		// Select db.
		if(!mysql_select_db($mysqlDatabase, $dbConn)) {
			$error = "Failed to use " . $mysqlDatabase . " database.  Check your User credentials.  Error was: <em>" . mysql_error($dbConn) . "</em>";
		}
		else {
			// Load the data
			exec("mysql -h " . $mysqlHostname . " -u " . $mysqlUsername . " -p" . $mysqlPassword . " " . $mysqlDatabase . " < " . dirname(__FILE__) . "/sqldata/schema.sql", $output, $retVal);
			if($retVal != 0) {
				$error = "Failed to import database schema. Make sure the mysql binary is in the search path for the web user.";
			}
			else {
				// Import labels
				exec("mysql -h " . $mysqlHostname . " -u " . $mysqlUsername . " -p" . $mysqlPassword . " " . $mysqlDatabase . " < " . dirname(__FILE__) . "/sqldata/lilac-nagios-en-label.sql", $output, $retVal);
				if($retVal != 0) {
					$error = "Failed to import Nagios labels.  Error was: <br />" . str_replace("\n", "<br />", $output[count($output)]);
				}
			}
		}
	}
}

print_header("lilac-reloaded updater");

if($stage == 1) {
	$fatalErrors = false;
	// Dependency checking
	print_window_header("Update check");
	?>

<div class="checks">

	<?php
	// PHP VERSION CHECK
	if($cUpdate->getCurrentDBVersion() <= 0) {
		$fail = true;
	}
	else {
		$fail = false;
	}
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
		Database Build-Version: <?php echo $cUpdate->getCurrentDBVersion();?></div>
	<?php
	if($fail) {
		?>
	<div class="error">
		Your database seems to have a deprecated structure, all updates are required.
	</div>
	<?php
	}
	?>
	<div class="success">
		Application Build-Version: <?php echo $cUpdate->getCurrentAPPVersion();?>
	</div>
</div>
<?php
if($fatalErrors) {
	?>
<div class="error">
	You must resolve the issues above before continuing the installation. <a
		href="update.php">Refresh The Page</a> to perform the checks again.
</div>
<?php
}
else {
	?>
<form action="update.php" method="post">
	<input type="hidden" name="update" value="execute" /> 
	<input class="submit" type="submit" value="Update installation..." />
</form>
<?php
}
print_window_footer();

?>
<?php
}
else if($stage == 1 && $success) {
	// OMGZ!
	print_window_header("Update Complete");
	?>
<b>Congratulations!</b>
<p style="margin: 15px;">Your lilac-reloaded update is now complete.</p>

<p>
	<a href="index.php">Launch lilac-reloaded now again.</a>
</p>
<?php
print_window_footer();
}
else if($stage == 99) {

	// Dependency checking
	print_window_header("Update check failed");
	?>

<div class="checks">

	<div class="error">
		<p>
			The lilac-reloaded updater requires that the configuration file at <em><?php echo dirname(__FILE__) . "/includes/lilac-conf.php";?>
			</em> is present.<br> Please check if your installation is in a sane
			situation.
		</p>
	</div>
</div>
<?php 
}


print_footer();


// Install utility functions

function print_window_header($title = null, $type = "top") {
	?>
<div class="roundedcorner_lilac_box">
	<div class="roundedcorner_lilac_top">
		<div></div>
	</div>
	<div class="roundedcorner_lilac_content">
		<?php
		if(!empty($title)) {
			?>
		<h2>
			<?php echo $title;?>
		</h2>
		<?php
		}
		?>
		<div class="roundedcorner_inner_box">
			<div class="roundedcorner_inner_top">
				<div></div>
			</div>
			<div class="roundedcorner_inner_content">



				<?php
}

function print_window_footer() {
	?>
			</div>
			<div class="roundedcorner_inner_bottom">
				<div></div>
			</div>
		</div>

	</div>
	<div class="roundedcorner_lilac_bottom">
		<div></div>
	</div>
</div>
<?php
}


// Used if frames not used
function print_header($title = null) {
	global $success;
	global $error;
	global $warning;

	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo LILAC_NAME . " "; echo LILAC_VERSION;?> <?php if($title) print(" - " . $title);?>
</title>
<link rel="stylesheet" type="text/css" href="style/reset.css">
<link rel="stylesheet" type="text/css" href="style/lilac.css">
<link rel="stylesheet" type="text/css" href="style/install.css">
<link rel="stylesheet" type="text/css" href="style/flexigrid.css">
<link rel="stylesheet" type="text/css" href="style/jquery.tooltip.css">
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tooltip.min.js"></script>
<script type="text/javascript" src="js/jquery.timers.js"></script>
<script type="text/javascript" src="js/flexigrid.js"></script>

</head>


<body>
	<script language="javascript">
	function form_element_switch(element, checkbox) {
		if(checkbox.checked) {
			element.readOnly = false;
			element.disabled = false;
		}
		else {
			element.readOnly = true;
			element.disabled = true;
		}
	}
		
	function confirmDelete() {
		return confirm("Do you really want to delete this Object?");
  }

	</script>

	<div id="header">
		<h1>
			<div class="title">
				<?php echo LILAC_NAME; ?>
			</div>
		</h1>
	</div>
	<div id="main">
		<?php
		if(!empty($success) || !empty($error) || !empty($warning)) {
			?>
		<script type="text/javascript">
		 $(document).ready(function() {
			$("#statusmsg").show("slow").fadeIn("slow");
		 });		
		</script>
		<?php
		}
		if(!empty($success)) {
			// We want to show a success state.
			?>
		<div id="statusmsg" class="roundedcorner_success_box"
			style="display: none;">
			<div class="roundedcorner_success_top">
				<div></div>
			</div>
			<div class="roundedcorner_success_content">
				<?php echo $success; ?>
			</div>
			<div class="roundedcorner_success_bottom">
				<div></div>
			</div>
		</div>
		<?php
		}
		else if(!empty($error)) {
			// We want to show a error state.
			?>
		<div id="statusmsg" class="roundedcorner_error_box"
			style="display: none;">
			<div class="roundedcorner_error_top">
				<div></div>
			</div>
			<div class="roundedcorner_error_content">
				<?php echo $error; ?>
			</div>
			<div class="roundedcorner_error_bottom">
				<div></div>
			</div>
		</div>
		<?php
		}
		else if(!empty($warning)) {
			// We want to show a warning state.
			?>
		<div id="statusmsg" class="roundedcorner_warning_box"
			style="display: none;">
			<div class="roundedcorner_warning_top">
				<div></div>
			</div>
			<div class="roundedcorner_warning_content">
				<?php echo $warning; ?>
			</div>
			<div class="roundedcorner_warning_bottom">
				<div></div>
			</div>
		</div>
		<?php
		}

}

function print_footer() {
	global $output_config;
	?>
	</div>
</body>
</html>
<?php
}
