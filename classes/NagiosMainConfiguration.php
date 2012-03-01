<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_main_configuration' table.
 *
 * Nagios Main Configuration
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosMainConfiguration extends BaseNagiosMainConfiguration {
	
	/**
	 * Enter description here...
	 *
	 * @return LilacError Collection of errors and warnings for validation purposes
	 */
	public function verify() {

	}
	
	public function getValues() {
		$values = array();
		$fieldNames = NagiosMainConfigurationPeer::getFieldNames(BasePeer::TYPE_FIELDNAME);
		
		foreach($fieldNames as $fieldName) {
			$method = "get" . NagiosMainConfigurationPeer::translateFieldName($fieldName, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
			$val = $this->$method();
			
			if($val !== null) {
				$values[$fieldName] = array();

				$values[$fieldName]['value'] = $val;
				$values[$fieldName]['source']['id'] = null;
				$values[$fieldName]['inherited'] = false;
			}
		}
		return $values;
	}
	
	public function setGlobalHostEventHandlerByName($command_name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME);
		$c->setIgnoreCase(true);
		$command = NagiosCommandPeer::doSelectOne($c);
		if($command) {
			$this->setGlobalHostEventHandler($command->getId());
			return true;
		}
		return false;
	}
	
	public function setGlobalServiceEventHandlerByName($command_name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME);
		$c->setIgnoreCase(true);
		$command = NagiosCommandPeer::doSelectOne($c);
		if($command) {
			$this->setGlobalServiceEventHandler($command->getId());
			return true;
		}
		return false;
	}
	
	public function setHostPerfdataCommandByName($command_name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME);
		$c->setIgnoreCase(true);
		$command = NagiosCommandPeer::doSelectOne($c);
		if($command) {
			$this->setHostPerfdataCommand($command->getId());
			return true;
		}
		return false;
	}
	
	public function setServicePerfdataCommandByName($command_name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME);
		$c->setIgnoreCase(true);
		$command = NagiosCommandPeer::doSelectOne($c);
		if($command) {
			$this->setServicePerfdataCommand($command->getId());
			return true;
		}
		return false;
	}
	
	public function setHostPerfdataFileProcessingCommandByName($command_name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME);
		$c->setIgnoreCase(true);
		$command = NagiosCommandPeer::doSelectOne($c);
		if($command) {
			$this->setHostPerfdataFileProcessingCommand($command->getId());
			return true;
		}
		return false;
	}
	
	public function setServicePerfdataFileProcessingCommandByName($command_name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME);
		$c->setIgnoreCase(true);
		$command = NagiosCommandPeer::doSelectOne($c);
		if($command) {
			$this->setServicePerfdataFileProcessingCommand($command->getId());
			return true;
		}
		return false;
	}

} // NagiosMainConfiguration
