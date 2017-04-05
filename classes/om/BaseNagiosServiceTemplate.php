<?php


/**
 * Base class that represents a row from the 'nagios_service_template' table.
 *
 * Nagios Service Template
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServiceTemplate extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'NagiosServiceTemplatePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosServiceTemplatePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the initial_state field.
	 * @var        string
	 */
	protected $initial_state;

	/**
	 * The value for the is_volatile field.
	 * @var        boolean
	 */
	protected $is_volatile;

	/**
	 * The value for the check_command field.
	 * @var        int
	 */
	protected $check_command;

	/**
	 * The value for the maximum_check_attempts field.
	 * @var        int
	 */
	protected $maximum_check_attempts;

	/**
	 * The value for the normal_check_interval field.
	 * @var        int
	 */
	protected $normal_check_interval;

	/**
	 * The value for the retry_interval field.
	 * @var        int
	 */
	protected $retry_interval;

	/**
	 * The value for the first_notification_delay field.
	 * @var        int
	 */
	protected $first_notification_delay;

	/**
	 * The value for the active_checks_enabled field.
	 * @var        boolean
	 */
	protected $active_checks_enabled;

	/**
	 * The value for the passive_checks_enabled field.
	 * @var        boolean
	 */
	protected $passive_checks_enabled;

	/**
	 * The value for the check_period field.
	 * @var        int
	 */
	protected $check_period;

	/**
	 * The value for the parallelize_check field.
	 * @var        boolean
	 */
	protected $parallelize_check;

	/**
	 * The value for the obsess_over_service field.
	 * @var        boolean
	 */
	protected $obsess_over_service;

	/**
	 * The value for the check_freshness field.
	 * @var        boolean
	 */
	protected $check_freshness;

	/**
	 * The value for the freshness_threshold field.
	 * @var        int
	 */
	protected $freshness_threshold;

	/**
	 * The value for the event_handler field.
	 * @var        int
	 */
	protected $event_handler;

	/**
	 * The value for the event_handler_enabled field.
	 * @var        boolean
	 */
	protected $event_handler_enabled;

	/**
	 * The value for the low_flap_threshold field.
	 * @var        int
	 */
	protected $low_flap_threshold;

	/**
	 * The value for the high_flap_threshold field.
	 * @var        int
	 */
	protected $high_flap_threshold;

	/**
	 * The value for the flap_detection_enabled field.
	 * @var        boolean
	 */
	protected $flap_detection_enabled;

	/**
	 * The value for the flap_detection_on_ok field.
	 * @var        boolean
	 */
	protected $flap_detection_on_ok;

	/**
	 * The value for the flap_detection_on_warning field.
	 * @var        boolean
	 */
	protected $flap_detection_on_warning;

	/**
	 * The value for the flap_detection_on_critical field.
	 * @var        boolean
	 */
	protected $flap_detection_on_critical;

	/**
	 * The value for the flap_detection_on_unknown field.
	 * @var        boolean
	 */
	protected $flap_detection_on_unknown;

	/**
	 * The value for the process_perf_data field.
	 * @var        boolean
	 */
	protected $process_perf_data;

	/**
	 * The value for the retain_status_information field.
	 * @var        boolean
	 */
	protected $retain_status_information;

	/**
	 * The value for the retain_nonstatus_information field.
	 * @var        boolean
	 */
	protected $retain_nonstatus_information;

	/**
	 * The value for the notification_interval field.
	 * @var        int
	 */
	protected $notification_interval;

	/**
	 * The value for the notification_period field.
	 * @var        int
	 */
	protected $notification_period;

	/**
	 * The value for the notification_on_warning field.
	 * @var        boolean
	 */
	protected $notification_on_warning;

	/**
	 * The value for the notification_on_unknown field.
	 * @var        boolean
	 */
	protected $notification_on_unknown;

	/**
	 * The value for the notification_on_critical field.
	 * @var        boolean
	 */
	protected $notification_on_critical;

	/**
	 * The value for the notification_on_recovery field.
	 * @var        boolean
	 */
	protected $notification_on_recovery;

	/**
	 * The value for the notification_on_flapping field.
	 * @var        boolean
	 */
	protected $notification_on_flapping;

	/**
	 * The value for the notification_on_scheduled_downtime field.
	 * @var        boolean
	 */
	protected $notification_on_scheduled_downtime;

	/**
	 * The value for the notifications_enabled field.
	 * @var        boolean
	 */
	protected $notifications_enabled;

	/**
	 * The value for the stalking_on_ok field.
	 * @var        boolean
	 */
	protected $stalking_on_ok;

	/**
	 * The value for the stalking_on_warning field.
	 * @var        boolean
	 */
	protected $stalking_on_warning;

	/**
	 * The value for the stalking_on_unknown field.
	 * @var        boolean
	 */
	protected $stalking_on_unknown;

	/**
	 * The value for the stalking_on_critical field.
	 * @var        boolean
	 */
	protected $stalking_on_critical;

	/**
	 * The value for the failure_prediction_enabled field.
	 * @var        boolean
	 */
	protected $failure_prediction_enabled;

	/**
	 * The value for the notes field.
	 * @var        string
	 */
	protected $notes;

	/**
	 * The value for the notes_url field.
	 * @var        string
	 */
	protected $notes_url;

	/**
	 * The value for the action_url field.
	 * @var        string
	 */
	protected $action_url;

	/**
	 * The value for the icon_image field.
	 * @var        string
	 */
	protected $icon_image;

	/**
	 * The value for the icon_image_alt field.
	 * @var        string
	 */
	protected $icon_image_alt;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByCheckCommand;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByEventHandler;

	/**
	 * @var        NagiosTimeperiod
	 */
	protected $aNagiosTimeperiodRelatedByCheckPeriod;

	/**
	 * @var        NagiosTimeperiod
	 */
	protected $aNagiosTimeperiodRelatedByNotificationPeriod;

	/**
	 * @var        array NagiosServiceCheckCommandParameter[] Collection to store aggregation of NagiosServiceCheckCommandParameter objects.
	 */
	protected $collNagiosServiceCheckCommandParameters;

	/**
	 * @var        array NagiosServiceGroupMember[] Collection to store aggregation of NagiosServiceGroupMember objects.
	 */
	protected $collNagiosServiceGroupMembers;

	/**
	 * @var        array NagiosServiceContactMember[] Collection to store aggregation of NagiosServiceContactMember objects.
	 */
	protected $collNagiosServiceContactMembers;

	/**
	 * @var        array NagiosServiceContactGroupMember[] Collection to store aggregation of NagiosServiceContactGroupMember objects.
	 */
	protected $collNagiosServiceContactGroupMembers;

	/**
	 * @var        array NagiosDependency[] Collection to store aggregation of NagiosDependency objects.
	 */
	protected $collNagiosDependencys;

	/**
	 * @var        array NagiosEscalation[] Collection to store aggregation of NagiosEscalation objects.
	 */
	protected $collNagiosEscalations;

	/**
	 * @var        array NagiosServiceTemplateInheritance[] Collection to store aggregation of NagiosServiceTemplateInheritance objects.
	 */
	protected $collNagiosServiceTemplateInheritancesRelatedBySourceTemplate;

	/**
	 * @var        array NagiosServiceTemplateInheritance[] Collection to store aggregation of NagiosServiceTemplateInheritance objects.
	 */
	protected $collNagiosServiceTemplateInheritancesRelatedByTargetTemplate;

	/**
	 * @var        array NagiosServiceCustomObjectVar[] Collection to store aggregation of NagiosServiceCustomObjectVar objects.
	 */
	protected $collNagiosServiceCustomObjectVars;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [initial_state] column value.
	 * 
	 * @return     string
	 */
	public function getInitialState()
	{
		return $this->initial_state;
	}

	/**
	 * Get the [is_volatile] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsVolatile()
	{
		return $this->is_volatile;
	}

	/**
	 * Get the [check_command] column value.
	 * 
	 * @return     int
	 */
	public function getCheckCommand()
	{
		return $this->check_command;
	}

	/**
	 * Get the [maximum_check_attempts] column value.
	 * 
	 * @return     int
	 */
	public function getMaximumCheckAttempts()
	{
		return $this->maximum_check_attempts;
	}

	/**
	 * Get the [normal_check_interval] column value.
	 * 
	 * @return     int
	 */
	public function getNormalCheckInterval()
	{
		return $this->normal_check_interval;
	}

	/**
	 * Get the [retry_interval] column value.
	 * 
	 * @return     int
	 */
	public function getRetryInterval()
	{
		return $this->retry_interval;
	}

	/**
	 * Get the [first_notification_delay] column value.
	 * 
	 * @return     int
	 */
	public function getFirstNotificationDelay()
	{
		return $this->first_notification_delay;
	}

	/**
	 * Get the [active_checks_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getActiveChecksEnabled()
	{
		return $this->active_checks_enabled;
	}

	/**
	 * Get the [passive_checks_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getPassiveChecksEnabled()
	{
		return $this->passive_checks_enabled;
	}

	/**
	 * Get the [check_period] column value.
	 * 
	 * @return     int
	 */
	public function getCheckPeriod()
	{
		return $this->check_period;
	}

	/**
	 * Get the [parallelize_check] column value.
	 * 
	 * @return     boolean
	 */
	public function getParallelizeCheck()
	{
		return $this->parallelize_check;
	}

	/**
	 * Get the [obsess_over_service] column value.
	 * 
	 * @return     boolean
	 */
	public function getObsessOverService()
	{
		return $this->obsess_over_service;
	}

	/**
	 * Get the [check_freshness] column value.
	 * 
	 * @return     boolean
	 */
	public function getCheckFreshness()
	{
		return $this->check_freshness;
	}

	/**
	 * Get the [freshness_threshold] column value.
	 * 
	 * @return     int
	 */
	public function getFreshnessThreshold()
	{
		return $this->freshness_threshold;
	}

	/**
	 * Get the [event_handler] column value.
	 * 
	 * @return     int
	 */
	public function getEventHandler()
	{
		return $this->event_handler;
	}

	/**
	 * Get the [event_handler_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getEventHandlerEnabled()
	{
		return $this->event_handler_enabled;
	}

	/**
	 * Get the [low_flap_threshold] column value.
	 * 
	 * @return     int
	 */
	public function getLowFlapThreshold()
	{
		return $this->low_flap_threshold;
	}

	/**
	 * Get the [high_flap_threshold] column value.
	 * 
	 * @return     int
	 */
	public function getHighFlapThreshold()
	{
		return $this->high_flap_threshold;
	}

	/**
	 * Get the [flap_detection_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionEnabled()
	{
		return $this->flap_detection_enabled;
	}

	/**
	 * Get the [flap_detection_on_ok] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnOk()
	{
		return $this->flap_detection_on_ok;
	}

	/**
	 * Get the [flap_detection_on_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnWarning()
	{
		return $this->flap_detection_on_warning;
	}

	/**
	 * Get the [flap_detection_on_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnCritical()
	{
		return $this->flap_detection_on_critical;
	}

	/**
	 * Get the [flap_detection_on_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnUnknown()
	{
		return $this->flap_detection_on_unknown;
	}

	/**
	 * Get the [process_perf_data] column value.
	 * 
	 * @return     boolean
	 */
	public function getProcessPerfData()
	{
		return $this->process_perf_data;
	}

	/**
	 * Get the [retain_status_information] column value.
	 * 
	 * @return     boolean
	 */
	public function getRetainStatusInformation()
	{
		return $this->retain_status_information;
	}

	/**
	 * Get the [retain_nonstatus_information] column value.
	 * 
	 * @return     boolean
	 */
	public function getRetainNonstatusInformation()
	{
		return $this->retain_nonstatus_information;
	}

	/**
	 * Get the [notification_interval] column value.
	 * 
	 * @return     int
	 */
	public function getNotificationInterval()
	{
		return $this->notification_interval;
	}

	/**
	 * Get the [notification_period] column value.
	 * 
	 * @return     int
	 */
	public function getNotificationPeriod()
	{
		return $this->notification_period;
	}

	/**
	 * Get the [notification_on_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnWarning()
	{
		return $this->notification_on_warning;
	}

	/**
	 * Get the [notification_on_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnUnknown()
	{
		return $this->notification_on_unknown;
	}

	/**
	 * Get the [notification_on_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnCritical()
	{
		return $this->notification_on_critical;
	}

	/**
	 * Get the [notification_on_recovery] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnRecovery()
	{
		return $this->notification_on_recovery;
	}

	/**
	 * Get the [notification_on_flapping] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnFlapping()
	{
		return $this->notification_on_flapping;
	}

	/**
	 * Get the [notification_on_scheduled_downtime] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnScheduledDowntime()
	{
		return $this->notification_on_scheduled_downtime;
	}

	/**
	 * Get the [notifications_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationsEnabled()
	{
		return $this->notifications_enabled;
	}

	/**
	 * Get the [stalking_on_ok] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnOk()
	{
		return $this->stalking_on_ok;
	}

	/**
	 * Get the [stalking_on_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnWarning()
	{
		return $this->stalking_on_warning;
	}

	/**
	 * Get the [stalking_on_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnUnknown()
	{
		return $this->stalking_on_unknown;
	}

	/**
	 * Get the [stalking_on_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnCritical()
	{
		return $this->stalking_on_critical;
	}

	/**
	 * Get the [failure_prediction_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getFailurePredictionEnabled()
	{
		return $this->failure_prediction_enabled;
	}

	/**
	 * Get the [notes] column value.
	 * 
	 * @return     string
	 */
	public function getNotes()
	{
		return $this->notes;
	}

	/**
	 * Get the [notes_url] column value.
	 * 
	 * @return     string
	 */
	public function getNotesUrl()
	{
		return $this->notes_url;
	}

	/**
	 * Get the [action_url] column value.
	 * 
	 * @return     string
	 */
	public function getActionUrl()
	{
		return $this->action_url;
	}

	/**
	 * Get the [icon_image] column value.
	 * 
	 * @return     string
	 */
	public function getIconImage()
	{
		return $this->icon_image;
	}

	/**
	 * Get the [icon_image_alt] column value.
	 * 
	 * @return     string
	 */
	public function getIconImageAlt()
	{
		return $this->icon_image_alt;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [initial_state] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setInitialState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->initial_state !== $v) {
			$this->initial_state = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::INITIAL_STATE;
		}

		return $this;
	} // setInitialState()

	/**
	 * Sets the value of the [is_volatile] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setIsVolatile($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->is_volatile !== $v) {
			$this->is_volatile = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::IS_VOLATILE;
		}

		return $this;
	} // setIsVolatile()

	/**
	 * Set the value of [check_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setCheckCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_command !== $v) {
			$this->check_command = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::CHECK_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByCheckCommand !== null && $this->aNagiosCommandRelatedByCheckCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByCheckCommand = null;
		}

		return $this;
	} // setCheckCommand()

	/**
	 * Set the value of [maximum_check_attempts] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setMaximumCheckAttempts($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->maximum_check_attempts !== $v) {
			$this->maximum_check_attempts = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::MAXIMUM_CHECK_ATTEMPTS;
		}

		return $this;
	} // setMaximumCheckAttempts()

	/**
	 * Set the value of [normal_check_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNormalCheckInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->normal_check_interval !== $v) {
			$this->normal_check_interval = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NORMAL_CHECK_INTERVAL;
		}

		return $this;
	} // setNormalCheckInterval()

	/**
	 * Set the value of [retry_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setRetryInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retry_interval !== $v) {
			$this->retry_interval = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::RETRY_INTERVAL;
		}

		return $this;
	} // setRetryInterval()

	/**
	 * Set the value of [first_notification_delay] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFirstNotificationDelay($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->first_notification_delay !== $v) {
			$this->first_notification_delay = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FIRST_NOTIFICATION_DELAY;
		}

		return $this;
	} // setFirstNotificationDelay()

	/**
	 * Sets the value of the [active_checks_enabled] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setActiveChecksEnabled($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->active_checks_enabled !== $v) {
			$this->active_checks_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ACTIVE_CHECKS_ENABLED;
		}

		return $this;
	} // setActiveChecksEnabled()

	/**
	 * Sets the value of the [passive_checks_enabled] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setPassiveChecksEnabled($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->passive_checks_enabled !== $v) {
			$this->passive_checks_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::PASSIVE_CHECKS_ENABLED;
		}

		return $this;
	} // setPassiveChecksEnabled()

	/**
	 * Set the value of [check_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setCheckPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_period !== $v) {
			$this->check_period = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::CHECK_PERIOD;
		}

		if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null && $this->aNagiosTimeperiodRelatedByCheckPeriod->getId() !== $v) {
			$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
		}

		return $this;
	} // setCheckPeriod()

	/**
	 * Sets the value of the [parallelize_check] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setParallelizeCheck($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->parallelize_check !== $v) {
			$this->parallelize_check = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::PARALLELIZE_CHECK;
		}

		return $this;
	} // setParallelizeCheck()

	/**
	 * Sets the value of the [obsess_over_service] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setObsessOverService($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->obsess_over_service !== $v) {
			$this->obsess_over_service = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::OBSESS_OVER_SERVICE;
		}

		return $this;
	} // setObsessOverService()

	/**
	 * Sets the value of the [check_freshness] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setCheckFreshness($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->check_freshness !== $v) {
			$this->check_freshness = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::CHECK_FRESHNESS;
		}

		return $this;
	} // setCheckFreshness()

	/**
	 * Set the value of [freshness_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFreshnessThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->freshness_threshold !== $v) {
			$this->freshness_threshold = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FRESHNESS_THRESHOLD;
		}

		return $this;
	} // setFreshnessThreshold()

	/**
	 * Set the value of [event_handler] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setEventHandler($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->event_handler !== $v) {
			$this->event_handler = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::EVENT_HANDLER;
		}

		if ($this->aNagiosCommandRelatedByEventHandler !== null && $this->aNagiosCommandRelatedByEventHandler->getId() !== $v) {
			$this->aNagiosCommandRelatedByEventHandler = null;
		}

		return $this;
	} // setEventHandler()

	/**
	 * Sets the value of the [event_handler_enabled] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setEventHandlerEnabled($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->event_handler_enabled !== $v) {
			$this->event_handler_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::EVENT_HANDLER_ENABLED;
		}

		return $this;
	} // setEventHandlerEnabled()

	/**
	 * Set the value of [low_flap_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setLowFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->low_flap_threshold !== $v) {
			$this->low_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::LOW_FLAP_THRESHOLD;
		}

		return $this;
	} // setLowFlapThreshold()

	/**
	 * Set the value of [high_flap_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setHighFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->high_flap_threshold !== $v) {
			$this->high_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::HIGH_FLAP_THRESHOLD;
		}

		return $this;
	} // setHighFlapThreshold()

	/**
	 * Sets the value of the [flap_detection_enabled] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionEnabled($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->flap_detection_enabled !== $v) {
			$this->flap_detection_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ENABLED;
		}

		return $this;
	} // setFlapDetectionEnabled()

	/**
	 * Sets the value of the [flap_detection_on_ok] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionOnOk($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->flap_detection_on_ok !== $v) {
			$this->flap_detection_on_ok = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ON_OK;
		}

		return $this;
	} // setFlapDetectionOnOk()

	/**
	 * Sets the value of the [flap_detection_on_warning] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionOnWarning($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->flap_detection_on_warning !== $v) {
			$this->flap_detection_on_warning = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ON_WARNING;
		}

		return $this;
	} // setFlapDetectionOnWarning()

	/**
	 * Sets the value of the [flap_detection_on_critical] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionOnCritical($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->flap_detection_on_critical !== $v) {
			$this->flap_detection_on_critical = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ON_CRITICAL;
		}

		return $this;
	} // setFlapDetectionOnCritical()

	/**
	 * Sets the value of the [flap_detection_on_unknown] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionOnUnknown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->flap_detection_on_unknown !== $v) {
			$this->flap_detection_on_unknown = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ON_UNKNOWN;
		}

		return $this;
	} // setFlapDetectionOnUnknown()

	/**
	 * Sets the value of the [process_perf_data] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setProcessPerfData($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->process_perf_data !== $v) {
			$this->process_perf_data = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::PROCESS_PERF_DATA;
		}

		return $this;
	} // setProcessPerfData()

	/**
	 * Sets the value of the [retain_status_information] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setRetainStatusInformation($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->retain_status_information !== $v) {
			$this->retain_status_information = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::RETAIN_STATUS_INFORMATION;
		}

		return $this;
	} // setRetainStatusInformation()

	/**
	 * Sets the value of the [retain_nonstatus_information] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setRetainNonstatusInformation($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->retain_nonstatus_information !== $v) {
			$this->retain_nonstatus_information = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::RETAIN_NONSTATUS_INFORMATION;
		}

		return $this;
	} // setRetainNonstatusInformation()

	/**
	 * Set the value of [notification_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->notification_interval !== $v) {
			$this->notification_interval = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_INTERVAL;
		}

		return $this;
	} // setNotificationInterval()

	/**
	 * Set the value of [notification_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->notification_period !== $v) {
			$this->notification_period = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_PERIOD;
		}

		if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null && $this->aNagiosTimeperiodRelatedByNotificationPeriod->getId() !== $v) {
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
		}

		return $this;
	} // setNotificationPeriod()

	/**
	 * Sets the value of the [notification_on_warning] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnWarning($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_on_warning !== $v) {
			$this->notification_on_warning = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_WARNING;
		}

		return $this;
	} // setNotificationOnWarning()

	/**
	 * Sets the value of the [notification_on_unknown] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnUnknown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_on_unknown !== $v) {
			$this->notification_on_unknown = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_UNKNOWN;
		}

		return $this;
	} // setNotificationOnUnknown()

	/**
	 * Sets the value of the [notification_on_critical] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnCritical($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_on_critical !== $v) {
			$this->notification_on_critical = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_CRITICAL;
		}

		return $this;
	} // setNotificationOnCritical()

	/**
	 * Sets the value of the [notification_on_recovery] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnRecovery($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_on_recovery !== $v) {
			$this->notification_on_recovery = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_RECOVERY;
		}

		return $this;
	} // setNotificationOnRecovery()

	/**
	 * Sets the value of the [notification_on_flapping] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnFlapping($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_on_flapping !== $v) {
			$this->notification_on_flapping = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_FLAPPING;
		}

		return $this;
	} // setNotificationOnFlapping()

	/**
	 * Sets the value of the [notification_on_scheduled_downtime] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnScheduledDowntime($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_on_scheduled_downtime !== $v) {
			$this->notification_on_scheduled_downtime = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME;
		}

		return $this;
	} // setNotificationOnScheduledDowntime()

	/**
	 * Sets the value of the [notifications_enabled] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationsEnabled($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notifications_enabled !== $v) {
			$this->notifications_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATIONS_ENABLED;
		}

		return $this;
	} // setNotificationsEnabled()

	/**
	 * Sets the value of the [stalking_on_ok] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setStalkingOnOk($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->stalking_on_ok !== $v) {
			$this->stalking_on_ok = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::STALKING_ON_OK;
		}

		return $this;
	} // setStalkingOnOk()

	/**
	 * Sets the value of the [stalking_on_warning] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setStalkingOnWarning($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->stalking_on_warning !== $v) {
			$this->stalking_on_warning = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::STALKING_ON_WARNING;
		}

		return $this;
	} // setStalkingOnWarning()

	/**
	 * Sets the value of the [stalking_on_unknown] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setStalkingOnUnknown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->stalking_on_unknown !== $v) {
			$this->stalking_on_unknown = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::STALKING_ON_UNKNOWN;
		}

		return $this;
	} // setStalkingOnUnknown()

	/**
	 * Sets the value of the [stalking_on_critical] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setStalkingOnCritical($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->stalking_on_critical !== $v) {
			$this->stalking_on_critical = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::STALKING_ON_CRITICAL;
		}

		return $this;
	} // setStalkingOnCritical()

	/**
	 * Sets the value of the [failure_prediction_enabled] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFailurePredictionEnabled($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->failure_prediction_enabled !== $v) {
			$this->failure_prediction_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FAILURE_PREDICTION_ENABLED;
		}

		return $this;
	} // setFailurePredictionEnabled()

	/**
	 * Set the value of [notes] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotes($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes !== $v) {
			$this->notes = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTES;
		}

		return $this;
	} // setNotes()

	/**
	 * Set the value of [notes_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotesUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes_url !== $v) {
			$this->notes_url = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTES_URL;
		}

		return $this;
	} // setNotesUrl()

	/**
	 * Set the value of [action_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setActionUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action_url !== $v) {
			$this->action_url = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ACTION_URL;
		}

		return $this;
	} // setActionUrl()

	/**
	 * Set the value of [icon_image] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setIconImage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->icon_image !== $v) {
			$this->icon_image = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ICON_IMAGE;
		}

		return $this;
	} // setIconImage()

	/**
	 * Set the value of [icon_image_alt] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setIconImageAlt($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->icon_image_alt !== $v) {
			$this->icon_image_alt = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ICON_IMAGE_ALT;
		}

		return $this;
	} // setIconImageAlt()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->initial_state = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->is_volatile = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
			$this->check_command = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->maximum_check_attempts = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->normal_check_interval = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->retry_interval = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->first_notification_delay = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->active_checks_enabled = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->passive_checks_enabled = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->check_period = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->parallelize_check = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->obsess_over_service = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
			$this->check_freshness = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
			$this->freshness_threshold = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->event_handler = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->event_handler_enabled = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
			$this->low_flap_threshold = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->high_flap_threshold = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->flap_detection_enabled = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
			$this->flap_detection_on_ok = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
			$this->flap_detection_on_warning = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
			$this->flap_detection_on_critical = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
			$this->flap_detection_on_unknown = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
			$this->process_perf_data = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
			$this->retain_status_information = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
			$this->retain_nonstatus_information = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
			$this->notification_interval = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
			$this->notification_period = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
			$this->notification_on_warning = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
			$this->notification_on_unknown = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
			$this->notification_on_critical = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
			$this->notification_on_recovery = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
			$this->notification_on_flapping = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
			$this->notification_on_scheduled_downtime = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
			$this->notifications_enabled = ($row[$startcol + 37] !== null) ? (boolean) $row[$startcol + 37] : null;
			$this->stalking_on_ok = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
			$this->stalking_on_warning = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
			$this->stalking_on_unknown = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
			$this->stalking_on_critical = ($row[$startcol + 41] !== null) ? (boolean) $row[$startcol + 41] : null;
			$this->failure_prediction_enabled = ($row[$startcol + 42] !== null) ? (boolean) $row[$startcol + 42] : null;
			$this->notes = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
			$this->notes_url = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
			$this->action_url = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
			$this->icon_image = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
			$this->icon_image_alt = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 48; // 48 = NagiosServiceTemplatePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosServiceTemplate object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aNagiosCommandRelatedByCheckCommand !== null && $this->check_command !== $this->aNagiosCommandRelatedByCheckCommand->getId()) {
			$this->aNagiosCommandRelatedByCheckCommand = null;
		}
		if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null && $this->check_period !== $this->aNagiosTimeperiodRelatedByCheckPeriod->getId()) {
			$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
		}
		if ($this->aNagiosCommandRelatedByEventHandler !== null && $this->event_handler !== $this->aNagiosCommandRelatedByEventHandler->getId()) {
			$this->aNagiosCommandRelatedByEventHandler = null;
		}
		if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null && $this->notification_period !== $this->aNagiosTimeperiodRelatedByNotificationPeriod->getId()) {
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosServiceTemplatePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosCommandRelatedByCheckCommand = null;
			$this->aNagiosCommandRelatedByEventHandler = null;
			$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
			$this->collNagiosServiceCheckCommandParameters = null;

			$this->collNagiosServiceGroupMembers = null;

			$this->collNagiosServiceContactMembers = null;

			$this->collNagiosServiceContactGroupMembers = null;

			$this->collNagiosDependencys = null;

			$this->collNagiosEscalations = null;

			$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = null;

			$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = null;

			$this->collNagiosServiceCustomObjectVars = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				NagiosServiceTemplateQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				NagiosServiceTemplatePeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosCommandRelatedByCheckCommand !== null) {
				if ($this->aNagiosCommandRelatedByCheckCommand->isModified() || $this->aNagiosCommandRelatedByCheckCommand->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByCheckCommand->save($con);
				}
				$this->setNagiosCommandRelatedByCheckCommand($this->aNagiosCommandRelatedByCheckCommand);
			}

			if ($this->aNagiosCommandRelatedByEventHandler !== null) {
				if ($this->aNagiosCommandRelatedByEventHandler->isModified() || $this->aNagiosCommandRelatedByEventHandler->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByEventHandler->save($con);
				}
				$this->setNagiosCommandRelatedByEventHandler($this->aNagiosCommandRelatedByEventHandler);
			}

			if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null) {
				if ($this->aNagiosTimeperiodRelatedByCheckPeriod->isModified() || $this->aNagiosTimeperiodRelatedByCheckPeriod->isNew()) {
					$affectedRows += $this->aNagiosTimeperiodRelatedByCheckPeriod->save($con);
				}
				$this->setNagiosTimeperiodRelatedByCheckPeriod($this->aNagiosTimeperiodRelatedByCheckPeriod);
			}

			if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null) {
				if ($this->aNagiosTimeperiodRelatedByNotificationPeriod->isModified() || $this->aNagiosTimeperiodRelatedByNotificationPeriod->isNew()) {
					$affectedRows += $this->aNagiosTimeperiodRelatedByNotificationPeriod->save($con);
				}
				$this->setNagiosTimeperiodRelatedByNotificationPeriod($this->aNagiosTimeperiodRelatedByNotificationPeriod);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosServiceTemplatePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(NagiosServiceTemplatePeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosServiceTemplatePeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += NagiosServiceTemplatePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNagiosServiceCheckCommandParameters !== null) {
				foreach ($this->collNagiosServiceCheckCommandParameters as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceGroupMembers !== null) {
				foreach ($this->collNagiosServiceGroupMembers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceContactMembers !== null) {
				foreach ($this->collNagiosServiceContactMembers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceContactGroupMembers !== null) {
				foreach ($this->collNagiosServiceContactGroupMembers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosDependencys !== null) {
				foreach ($this->collNagiosDependencys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosEscalations !== null) {
				foreach ($this->collNagiosEscalations as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate !== null) {
				foreach ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate !== null) {
				foreach ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceCustomObjectVars !== null) {
				foreach ($this->collNagiosServiceCustomObjectVars as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosCommandRelatedByCheckCommand !== null) {
				if (!$this->aNagiosCommandRelatedByCheckCommand->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByCheckCommand->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByEventHandler !== null) {
				if (!$this->aNagiosCommandRelatedByEventHandler->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByEventHandler->getValidationFailures());
				}
			}

			if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null) {
				if (!$this->aNagiosTimeperiodRelatedByCheckPeriod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosTimeperiodRelatedByCheckPeriod->getValidationFailures());
				}
			}

			if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null) {
				if (!$this->aNagiosTimeperiodRelatedByNotificationPeriod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosTimeperiodRelatedByNotificationPeriod->getValidationFailures());
				}
			}


			if (($retval = NagiosServiceTemplatePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosServiceCheckCommandParameters !== null) {
					foreach ($this->collNagiosServiceCheckCommandParameters as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceGroupMembers !== null) {
					foreach ($this->collNagiosServiceGroupMembers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceContactMembers !== null) {
					foreach ($this->collNagiosServiceContactMembers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceContactGroupMembers !== null) {
					foreach ($this->collNagiosServiceContactGroupMembers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosDependencys !== null) {
					foreach ($this->collNagiosDependencys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosEscalations !== null) {
					foreach ($this->collNagiosEscalations as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate !== null) {
					foreach ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate !== null) {
					foreach ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceCustomObjectVars !== null) {
					foreach ($this->collNagiosServiceCustomObjectVars as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosServiceTemplatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getDescription();
				break;
			case 3:
				return $this->getInitialState();
				break;
			case 4:
				return $this->getIsVolatile();
				break;
			case 5:
				return $this->getCheckCommand();
				break;
			case 6:
				return $this->getMaximumCheckAttempts();
				break;
			case 7:
				return $this->getNormalCheckInterval();
				break;
			case 8:
				return $this->getRetryInterval();
				break;
			case 9:
				return $this->getFirstNotificationDelay();
				break;
			case 10:
				return $this->getActiveChecksEnabled();
				break;
			case 11:
				return $this->getPassiveChecksEnabled();
				break;
			case 12:
				return $this->getCheckPeriod();
				break;
			case 13:
				return $this->getParallelizeCheck();
				break;
			case 14:
				return $this->getObsessOverService();
				break;
			case 15:
				return $this->getCheckFreshness();
				break;
			case 16:
				return $this->getFreshnessThreshold();
				break;
			case 17:
				return $this->getEventHandler();
				break;
			case 18:
				return $this->getEventHandlerEnabled();
				break;
			case 19:
				return $this->getLowFlapThreshold();
				break;
			case 20:
				return $this->getHighFlapThreshold();
				break;
			case 21:
				return $this->getFlapDetectionEnabled();
				break;
			case 22:
				return $this->getFlapDetectionOnOk();
				break;
			case 23:
				return $this->getFlapDetectionOnWarning();
				break;
			case 24:
				return $this->getFlapDetectionOnCritical();
				break;
			case 25:
				return $this->getFlapDetectionOnUnknown();
				break;
			case 26:
				return $this->getProcessPerfData();
				break;
			case 27:
				return $this->getRetainStatusInformation();
				break;
			case 28:
				return $this->getRetainNonstatusInformation();
				break;
			case 29:
				return $this->getNotificationInterval();
				break;
			case 30:
				return $this->getNotificationPeriod();
				break;
			case 31:
				return $this->getNotificationOnWarning();
				break;
			case 32:
				return $this->getNotificationOnUnknown();
				break;
			case 33:
				return $this->getNotificationOnCritical();
				break;
			case 34:
				return $this->getNotificationOnRecovery();
				break;
			case 35:
				return $this->getNotificationOnFlapping();
				break;
			case 36:
				return $this->getNotificationOnScheduledDowntime();
				break;
			case 37:
				return $this->getNotificationsEnabled();
				break;
			case 38:
				return $this->getStalkingOnOk();
				break;
			case 39:
				return $this->getStalkingOnWarning();
				break;
			case 40:
				return $this->getStalkingOnUnknown();
				break;
			case 41:
				return $this->getStalkingOnCritical();
				break;
			case 42:
				return $this->getFailurePredictionEnabled();
				break;
			case 43:
				return $this->getNotes();
				break;
			case 44:
				return $this->getNotesUrl();
				break;
			case 45:
				return $this->getActionUrl();
				break;
			case 46:
				return $this->getIconImage();
				break;
			case 47:
				return $this->getIconImageAlt();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['NagiosServiceTemplate'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['NagiosServiceTemplate'][$this->getPrimaryKey()] = true;
		$keys = NagiosServiceTemplatePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getInitialState(),
			$keys[4] => $this->getIsVolatile(),
			$keys[5] => $this->getCheckCommand(),
			$keys[6] => $this->getMaximumCheckAttempts(),
			$keys[7] => $this->getNormalCheckInterval(),
			$keys[8] => $this->getRetryInterval(),
			$keys[9] => $this->getFirstNotificationDelay(),
			$keys[10] => $this->getActiveChecksEnabled(),
			$keys[11] => $this->getPassiveChecksEnabled(),
			$keys[12] => $this->getCheckPeriod(),
			$keys[13] => $this->getParallelizeCheck(),
			$keys[14] => $this->getObsessOverService(),
			$keys[15] => $this->getCheckFreshness(),
			$keys[16] => $this->getFreshnessThreshold(),
			$keys[17] => $this->getEventHandler(),
			$keys[18] => $this->getEventHandlerEnabled(),
			$keys[19] => $this->getLowFlapThreshold(),
			$keys[20] => $this->getHighFlapThreshold(),
			$keys[21] => $this->getFlapDetectionEnabled(),
			$keys[22] => $this->getFlapDetectionOnOk(),
			$keys[23] => $this->getFlapDetectionOnWarning(),
			$keys[24] => $this->getFlapDetectionOnCritical(),
			$keys[25] => $this->getFlapDetectionOnUnknown(),
			$keys[26] => $this->getProcessPerfData(),
			$keys[27] => $this->getRetainStatusInformation(),
			$keys[28] => $this->getRetainNonstatusInformation(),
			$keys[29] => $this->getNotificationInterval(),
			$keys[30] => $this->getNotificationPeriod(),
			$keys[31] => $this->getNotificationOnWarning(),
			$keys[32] => $this->getNotificationOnUnknown(),
			$keys[33] => $this->getNotificationOnCritical(),
			$keys[34] => $this->getNotificationOnRecovery(),
			$keys[35] => $this->getNotificationOnFlapping(),
			$keys[36] => $this->getNotificationOnScheduledDowntime(),
			$keys[37] => $this->getNotificationsEnabled(),
			$keys[38] => $this->getStalkingOnOk(),
			$keys[39] => $this->getStalkingOnWarning(),
			$keys[40] => $this->getStalkingOnUnknown(),
			$keys[41] => $this->getStalkingOnCritical(),
			$keys[42] => $this->getFailurePredictionEnabled(),
			$keys[43] => $this->getNotes(),
			$keys[44] => $this->getNotesUrl(),
			$keys[45] => $this->getActionUrl(),
			$keys[46] => $this->getIconImage(),
			$keys[47] => $this->getIconImageAlt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aNagiosCommandRelatedByCheckCommand) {
				$result['NagiosCommandRelatedByCheckCommand'] = $this->aNagiosCommandRelatedByCheckCommand->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosCommandRelatedByEventHandler) {
				$result['NagiosCommandRelatedByEventHandler'] = $this->aNagiosCommandRelatedByEventHandler->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosTimeperiodRelatedByCheckPeriod) {
				$result['NagiosTimeperiodRelatedByCheckPeriod'] = $this->aNagiosTimeperiodRelatedByCheckPeriod->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosTimeperiodRelatedByNotificationPeriod) {
				$result['NagiosTimeperiodRelatedByNotificationPeriod'] = $this->aNagiosTimeperiodRelatedByNotificationPeriod->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collNagiosServiceCheckCommandParameters) {
				$result['NagiosServiceCheckCommandParameters'] = $this->collNagiosServiceCheckCommandParameters->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceGroupMembers) {
				$result['NagiosServiceGroupMembers'] = $this->collNagiosServiceGroupMembers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceContactMembers) {
				$result['NagiosServiceContactMembers'] = $this->collNagiosServiceContactMembers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceContactGroupMembers) {
				$result['NagiosServiceContactGroupMembers'] = $this->collNagiosServiceContactGroupMembers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosDependencys) {
				$result['NagiosDependencys'] = $this->collNagiosDependencys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosEscalations) {
				$result['NagiosEscalations'] = $this->collNagiosEscalations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate) {
				$result['NagiosServiceTemplateInheritancesRelatedBySourceTemplate'] = $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate) {
				$result['NagiosServiceTemplateInheritancesRelatedByTargetTemplate'] = $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceCustomObjectVars) {
				$result['NagiosServiceCustomObjectVars'] = $this->collNagiosServiceCustomObjectVars->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosServiceTemplatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setDescription($value);
				break;
			case 3:
				$this->setInitialState($value);
				break;
			case 4:
				$this->setIsVolatile($value);
				break;
			case 5:
				$this->setCheckCommand($value);
				break;
			case 6:
				$this->setMaximumCheckAttempts($value);
				break;
			case 7:
				$this->setNormalCheckInterval($value);
				break;
			case 8:
				$this->setRetryInterval($value);
				break;
			case 9:
				$this->setFirstNotificationDelay($value);
				break;
			case 10:
				$this->setActiveChecksEnabled($value);
				break;
			case 11:
				$this->setPassiveChecksEnabled($value);
				break;
			case 12:
				$this->setCheckPeriod($value);
				break;
			case 13:
				$this->setParallelizeCheck($value);
				break;
			case 14:
				$this->setObsessOverService($value);
				break;
			case 15:
				$this->setCheckFreshness($value);
				break;
			case 16:
				$this->setFreshnessThreshold($value);
				break;
			case 17:
				$this->setEventHandler($value);
				break;
			case 18:
				$this->setEventHandlerEnabled($value);
				break;
			case 19:
				$this->setLowFlapThreshold($value);
				break;
			case 20:
				$this->setHighFlapThreshold($value);
				break;
			case 21:
				$this->setFlapDetectionEnabled($value);
				break;
			case 22:
				$this->setFlapDetectionOnOk($value);
				break;
			case 23:
				$this->setFlapDetectionOnWarning($value);
				break;
			case 24:
				$this->setFlapDetectionOnCritical($value);
				break;
			case 25:
				$this->setFlapDetectionOnUnknown($value);
				break;
			case 26:
				$this->setProcessPerfData($value);
				break;
			case 27:
				$this->setRetainStatusInformation($value);
				break;
			case 28:
				$this->setRetainNonstatusInformation($value);
				break;
			case 29:
				$this->setNotificationInterval($value);
				break;
			case 30:
				$this->setNotificationPeriod($value);
				break;
			case 31:
				$this->setNotificationOnWarning($value);
				break;
			case 32:
				$this->setNotificationOnUnknown($value);
				break;
			case 33:
				$this->setNotificationOnCritical($value);
				break;
			case 34:
				$this->setNotificationOnRecovery($value);
				break;
			case 35:
				$this->setNotificationOnFlapping($value);
				break;
			case 36:
				$this->setNotificationOnScheduledDowntime($value);
				break;
			case 37:
				$this->setNotificationsEnabled($value);
				break;
			case 38:
				$this->setStalkingOnOk($value);
				break;
			case 39:
				$this->setStalkingOnWarning($value);
				break;
			case 40:
				$this->setStalkingOnUnknown($value);
				break;
			case 41:
				$this->setStalkingOnCritical($value);
				break;
			case 42:
				$this->setFailurePredictionEnabled($value);
				break;
			case 43:
				$this->setNotes($value);
				break;
			case 44:
				$this->setNotesUrl($value);
				break;
			case 45:
				$this->setActionUrl($value);
				break;
			case 46:
				$this->setIconImage($value);
				break;
			case 47:
				$this->setIconImageAlt($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NagiosServiceTemplatePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setInitialState($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIsVolatile($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCheckCommand($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMaximumCheckAttempts($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNormalCheckInterval($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setRetryInterval($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFirstNotificationDelay($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setActiveChecksEnabled($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPassiveChecksEnabled($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCheckPeriod($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setParallelizeCheck($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setObsessOverService($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCheckFreshness($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setFreshnessThreshold($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setEventHandler($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setEventHandlerEnabled($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setLowFlapThreshold($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setHighFlapThreshold($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setFlapDetectionEnabled($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setFlapDetectionOnOk($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setFlapDetectionOnWarning($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setFlapDetectionOnCritical($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setFlapDetectionOnUnknown($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setProcessPerfData($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setRetainStatusInformation($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setRetainNonstatusInformation($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setNotificationInterval($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setNotificationPeriod($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setNotificationOnWarning($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setNotificationOnUnknown($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setNotificationOnCritical($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setNotificationOnRecovery($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setNotificationOnFlapping($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setNotificationOnScheduledDowntime($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setNotificationsEnabled($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setStalkingOnOk($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setStalkingOnWarning($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setStalkingOnUnknown($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setStalkingOnCritical($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setFailurePredictionEnabled($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setNotes($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setNotesUrl($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setActionUrl($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setIconImage($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setIconImageAlt($arr[$keys[47]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosServiceTemplatePeer::ID)) $criteria->add(NagiosServiceTemplatePeer::ID, $this->id);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NAME)) $criteria->add(NagiosServiceTemplatePeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::DESCRIPTION)) $criteria->add(NagiosServiceTemplatePeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::INITIAL_STATE)) $criteria->add(NagiosServiceTemplatePeer::INITIAL_STATE, $this->initial_state);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::IS_VOLATILE)) $criteria->add(NagiosServiceTemplatePeer::IS_VOLATILE, $this->is_volatile);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::CHECK_COMMAND)) $criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->check_command);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::MAXIMUM_CHECK_ATTEMPTS)) $criteria->add(NagiosServiceTemplatePeer::MAXIMUM_CHECK_ATTEMPTS, $this->maximum_check_attempts);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NORMAL_CHECK_INTERVAL)) $criteria->add(NagiosServiceTemplatePeer::NORMAL_CHECK_INTERVAL, $this->normal_check_interval);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::RETRY_INTERVAL)) $criteria->add(NagiosServiceTemplatePeer::RETRY_INTERVAL, $this->retry_interval);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FIRST_NOTIFICATION_DELAY)) $criteria->add(NagiosServiceTemplatePeer::FIRST_NOTIFICATION_DELAY, $this->first_notification_delay);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::ACTIVE_CHECKS_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::ACTIVE_CHECKS_ENABLED, $this->active_checks_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::PASSIVE_CHECKS_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::PASSIVE_CHECKS_ENABLED, $this->passive_checks_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::CHECK_PERIOD)) $criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->check_period);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::PARALLELIZE_CHECK)) $criteria->add(NagiosServiceTemplatePeer::PARALLELIZE_CHECK, $this->parallelize_check);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::OBSESS_OVER_SERVICE)) $criteria->add(NagiosServiceTemplatePeer::OBSESS_OVER_SERVICE, $this->obsess_over_service);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::CHECK_FRESHNESS)) $criteria->add(NagiosServiceTemplatePeer::CHECK_FRESHNESS, $this->check_freshness);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FRESHNESS_THRESHOLD)) $criteria->add(NagiosServiceTemplatePeer::FRESHNESS_THRESHOLD, $this->freshness_threshold);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::EVENT_HANDLER)) $criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->event_handler);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::EVENT_HANDLER_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER_ENABLED, $this->event_handler_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::LOW_FLAP_THRESHOLD)) $criteria->add(NagiosServiceTemplatePeer::LOW_FLAP_THRESHOLD, $this->low_flap_threshold);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::HIGH_FLAP_THRESHOLD)) $criteria->add(NagiosServiceTemplatePeer::HIGH_FLAP_THRESHOLD, $this->high_flap_threshold);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ENABLED, $this->flap_detection_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_OK)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_OK, $this->flap_detection_on_ok);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_WARNING)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_WARNING, $this->flap_detection_on_warning);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_CRITICAL)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_CRITICAL, $this->flap_detection_on_critical);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_UNKNOWN)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_UNKNOWN, $this->flap_detection_on_unknown);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::PROCESS_PERF_DATA)) $criteria->add(NagiosServiceTemplatePeer::PROCESS_PERF_DATA, $this->process_perf_data);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::RETAIN_STATUS_INFORMATION)) $criteria->add(NagiosServiceTemplatePeer::RETAIN_STATUS_INFORMATION, $this->retain_status_information);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::RETAIN_NONSTATUS_INFORMATION)) $criteria->add(NagiosServiceTemplatePeer::RETAIN_NONSTATUS_INFORMATION, $this->retain_nonstatus_information);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_INTERVAL)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_INTERVAL, $this->notification_interval);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->notification_period);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_WARNING)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_WARNING, $this->notification_on_warning);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_UNKNOWN)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_UNKNOWN, $this->notification_on_unknown);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_CRITICAL)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_CRITICAL, $this->notification_on_critical);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_RECOVERY)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_RECOVERY, $this->notification_on_recovery);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_FLAPPING)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_FLAPPING, $this->notification_on_flapping);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME, $this->notification_on_scheduled_downtime);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATIONS_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATIONS_ENABLED, $this->notifications_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::STALKING_ON_OK)) $criteria->add(NagiosServiceTemplatePeer::STALKING_ON_OK, $this->stalking_on_ok);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::STALKING_ON_WARNING)) $criteria->add(NagiosServiceTemplatePeer::STALKING_ON_WARNING, $this->stalking_on_warning);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::STALKING_ON_UNKNOWN)) $criteria->add(NagiosServiceTemplatePeer::STALKING_ON_UNKNOWN, $this->stalking_on_unknown);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::STALKING_ON_CRITICAL)) $criteria->add(NagiosServiceTemplatePeer::STALKING_ON_CRITICAL, $this->stalking_on_critical);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FAILURE_PREDICTION_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::FAILURE_PREDICTION_ENABLED, $this->failure_prediction_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTES)) $criteria->add(NagiosServiceTemplatePeer::NOTES, $this->notes);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTES_URL)) $criteria->add(NagiosServiceTemplatePeer::NOTES_URL, $this->notes_url);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::ACTION_URL)) $criteria->add(NagiosServiceTemplatePeer::ACTION_URL, $this->action_url);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::ICON_IMAGE)) $criteria->add(NagiosServiceTemplatePeer::ICON_IMAGE, $this->icon_image);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::ICON_IMAGE_ALT)) $criteria->add(NagiosServiceTemplatePeer::ICON_IMAGE_ALT, $this->icon_image_alt);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		$criteria->add(NagiosServiceTemplatePeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of NagiosServiceTemplate (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setDescription($this->getDescription());
		$copyObj->setInitialState($this->getInitialState());
		$copyObj->setIsVolatile($this->getIsVolatile());
		$copyObj->setCheckCommand($this->getCheckCommand());
		$copyObj->setMaximumCheckAttempts($this->getMaximumCheckAttempts());
		$copyObj->setNormalCheckInterval($this->getNormalCheckInterval());
		$copyObj->setRetryInterval($this->getRetryInterval());
		$copyObj->setFirstNotificationDelay($this->getFirstNotificationDelay());
		$copyObj->setActiveChecksEnabled($this->getActiveChecksEnabled());
		$copyObj->setPassiveChecksEnabled($this->getPassiveChecksEnabled());
		$copyObj->setCheckPeriod($this->getCheckPeriod());
		$copyObj->setParallelizeCheck($this->getParallelizeCheck());
		$copyObj->setObsessOverService($this->getObsessOverService());
		$copyObj->setCheckFreshness($this->getCheckFreshness());
		$copyObj->setFreshnessThreshold($this->getFreshnessThreshold());
		$copyObj->setEventHandler($this->getEventHandler());
		$copyObj->setEventHandlerEnabled($this->getEventHandlerEnabled());
		$copyObj->setLowFlapThreshold($this->getLowFlapThreshold());
		$copyObj->setHighFlapThreshold($this->getHighFlapThreshold());
		$copyObj->setFlapDetectionEnabled($this->getFlapDetectionEnabled());
		$copyObj->setFlapDetectionOnOk($this->getFlapDetectionOnOk());
		$copyObj->setFlapDetectionOnWarning($this->getFlapDetectionOnWarning());
		$copyObj->setFlapDetectionOnCritical($this->getFlapDetectionOnCritical());
		$copyObj->setFlapDetectionOnUnknown($this->getFlapDetectionOnUnknown());
		$copyObj->setProcessPerfData($this->getProcessPerfData());
		$copyObj->setRetainStatusInformation($this->getRetainStatusInformation());
		$copyObj->setRetainNonstatusInformation($this->getRetainNonstatusInformation());
		$copyObj->setNotificationInterval($this->getNotificationInterval());
		$copyObj->setNotificationPeriod($this->getNotificationPeriod());
		$copyObj->setNotificationOnWarning($this->getNotificationOnWarning());
		$copyObj->setNotificationOnUnknown($this->getNotificationOnUnknown());
		$copyObj->setNotificationOnCritical($this->getNotificationOnCritical());
		$copyObj->setNotificationOnRecovery($this->getNotificationOnRecovery());
		$copyObj->setNotificationOnFlapping($this->getNotificationOnFlapping());
		$copyObj->setNotificationOnScheduledDowntime($this->getNotificationOnScheduledDowntime());
		$copyObj->setNotificationsEnabled($this->getNotificationsEnabled());
		$copyObj->setStalkingOnOk($this->getStalkingOnOk());
		$copyObj->setStalkingOnWarning($this->getStalkingOnWarning());
		$copyObj->setStalkingOnUnknown($this->getStalkingOnUnknown());
		$copyObj->setStalkingOnCritical($this->getStalkingOnCritical());
		$copyObj->setFailurePredictionEnabled($this->getFailurePredictionEnabled());
		$copyObj->setNotes($this->getNotes());
		$copyObj->setNotesUrl($this->getNotesUrl());
		$copyObj->setActionUrl($this->getActionUrl());
		$copyObj->setIconImage($this->getIconImage());
		$copyObj->setIconImageAlt($this->getIconImageAlt());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosServiceCheckCommandParameters() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceCheckCommandParameter($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceGroupMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceGroupMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceContactMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceContactMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceContactGroupMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceContactGroupMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosDependencys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosDependency($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosEscalations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosEscalation($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceTemplateInheritancesRelatedBySourceTemplate() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceTemplateInheritanceRelatedBySourceTemplate($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceTemplateInheritancesRelatedByTargetTemplate() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceTemplateInheritanceRelatedByTargetTemplate($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceCustomObjectVars() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceCustomObjectVar($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     NagiosServiceTemplate Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     NagiosServiceTemplatePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosServiceTemplatePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByCheckCommand(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setCheckCommand(NULL);
		} else {
			$this->setCheckCommand($v->getId());
		}

		$this->aNagiosCommandRelatedByCheckCommand = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosServiceTemplateRelatedByCheckCommand($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByCheckCommand(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByCheckCommand === null && ($this->check_command !== null)) {
			$this->aNagiosCommandRelatedByCheckCommand = NagiosCommandQuery::create()->findPk($this->check_command, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosCommandRelatedByCheckCommand->addNagiosServiceTemplatesRelatedByCheckCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByCheckCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByEventHandler(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setEventHandler(NULL);
		} else {
			$this->setEventHandler($v->getId());
		}

		$this->aNagiosCommandRelatedByEventHandler = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosServiceTemplateRelatedByEventHandler($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByEventHandler(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByEventHandler === null && ($this->event_handler !== null)) {
			$this->aNagiosCommandRelatedByEventHandler = NagiosCommandQuery::create()->findPk($this->event_handler, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosCommandRelatedByEventHandler->addNagiosServiceTemplatesRelatedByEventHandler($this);
			 */
		}
		return $this->aNagiosCommandRelatedByEventHandler;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosTimeperiodRelatedByCheckPeriod(NagiosTimeperiod $v = null)
	{
		if ($v === null) {
			$this->setCheckPeriod(NULL);
		} else {
			$this->setCheckPeriod($v->getId());
		}

		$this->aNagiosTimeperiodRelatedByCheckPeriod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosTimeperiod object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosServiceTemplateRelatedByCheckPeriod($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosTimeperiod object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosTimeperiod The associated NagiosTimeperiod object.
	 * @throws     PropelException
	 */
	public function getNagiosTimeperiodRelatedByCheckPeriod(PropelPDO $con = null)
	{
		if ($this->aNagiosTimeperiodRelatedByCheckPeriod === null && ($this->check_period !== null)) {
			$this->aNagiosTimeperiodRelatedByCheckPeriod = NagiosTimeperiodQuery::create()->findPk($this->check_period, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosTimeperiodRelatedByCheckPeriod->addNagiosServiceTemplatesRelatedByCheckPeriod($this);
			 */
		}
		return $this->aNagiosTimeperiodRelatedByCheckPeriod;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosTimeperiodRelatedByNotificationPeriod(NagiosTimeperiod $v = null)
	{
		if ($v === null) {
			$this->setNotificationPeriod(NULL);
		} else {
			$this->setNotificationPeriod($v->getId());
		}

		$this->aNagiosTimeperiodRelatedByNotificationPeriod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosTimeperiod object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosServiceTemplateRelatedByNotificationPeriod($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosTimeperiod object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosTimeperiod The associated NagiosTimeperiod object.
	 * @throws     PropelException
	 */
	public function getNagiosTimeperiodRelatedByNotificationPeriod(PropelPDO $con = null)
	{
		if ($this->aNagiosTimeperiodRelatedByNotificationPeriod === null && ($this->notification_period !== null)) {
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = NagiosTimeperiodQuery::create()->findPk($this->notification_period, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosTimeperiodRelatedByNotificationPeriod->addNagiosServiceTemplatesRelatedByNotificationPeriod($this);
			 */
		}
		return $this->aNagiosTimeperiodRelatedByNotificationPeriod;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name 
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('NagiosServiceCheckCommandParameter' == $relationName) {
			return $this->initNagiosServiceCheckCommandParameters();
		}
		if ('NagiosServiceGroupMember' == $relationName) {
			return $this->initNagiosServiceGroupMembers();
		}
		if ('NagiosServiceContactMember' == $relationName) {
			return $this->initNagiosServiceContactMembers();
		}
		if ('NagiosServiceContactGroupMember' == $relationName) {
			return $this->initNagiosServiceContactGroupMembers();
		}
		if ('NagiosDependency' == $relationName) {
			return $this->initNagiosDependencys();
		}
		if ('NagiosEscalation' == $relationName) {
			return $this->initNagiosEscalations();
		}
		if ('NagiosServiceTemplateInheritanceRelatedBySourceTemplate' == $relationName) {
			return $this->initNagiosServiceTemplateInheritancesRelatedBySourceTemplate();
		}
		if ('NagiosServiceTemplateInheritanceRelatedByTargetTemplate' == $relationName) {
			return $this->initNagiosServiceTemplateInheritancesRelatedByTargetTemplate();
		}
		if ('NagiosServiceCustomObjectVar' == $relationName) {
			return $this->initNagiosServiceCustomObjectVars();
		}
	}

	/**
	 * Clears out the collNagiosServiceCheckCommandParameters collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceCheckCommandParameters()
	 */
	public function clearNagiosServiceCheckCommandParameters()
	{
		$this->collNagiosServiceCheckCommandParameters = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceCheckCommandParameters collection.
	 *
	 * By default this just sets the collNagiosServiceCheckCommandParameters collection to an empty array (like clearcollNagiosServiceCheckCommandParameters());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceCheckCommandParameters($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceCheckCommandParameters && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceCheckCommandParameters = new PropelObjectCollection();
		$this->collNagiosServiceCheckCommandParameters->setModel('NagiosServiceCheckCommandParameter');
	}

	/**
	 * Gets an array of NagiosServiceCheckCommandParameter objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceCheckCommandParameter[] List of NagiosServiceCheckCommandParameter objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceCheckCommandParameters($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceCheckCommandParameters || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceCheckCommandParameters) {
				// return empty collection
				$this->initNagiosServiceCheckCommandParameters();
			} else {
				$collNagiosServiceCheckCommandParameters = NagiosServiceCheckCommandParameterQuery::create(null, $criteria)
					->filterByNagiosServiceTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceCheckCommandParameters;
				}
				$this->collNagiosServiceCheckCommandParameters = $collNagiosServiceCheckCommandParameters;
			}
		}
		return $this->collNagiosServiceCheckCommandParameters;
	}

	/**
	 * Returns the number of related NagiosServiceCheckCommandParameter objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceCheckCommandParameter objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceCheckCommandParameters(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceCheckCommandParameters || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceCheckCommandParameters) {
				return 0;
			} else {
				$query = NagiosServiceCheckCommandParameterQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceCheckCommandParameters);
		}
	}

	/**
	 * Method called to associate a NagiosServiceCheckCommandParameter object to this object
	 * through the NagiosServiceCheckCommandParameter foreign key attribute.
	 *
	 * @param      NagiosServiceCheckCommandParameter $l NagiosServiceCheckCommandParameter
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceCheckCommandParameter(NagiosServiceCheckCommandParameter $l)
	{
		if ($this->collNagiosServiceCheckCommandParameters === null) {
			$this->initNagiosServiceCheckCommandParameters();
		}
		if (!$this->collNagiosServiceCheckCommandParameters->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceCheckCommandParameters[]= $l;
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceCheckCommandParameters from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceCheckCommandParameter[] List of NagiosServiceCheckCommandParameter objects
	 */
	public function getNagiosServiceCheckCommandParametersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceCheckCommandParameterQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosServiceCheckCommandParameters($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceGroupMembers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceGroupMembers()
	 */
	public function clearNagiosServiceGroupMembers()
	{
		$this->collNagiosServiceGroupMembers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceGroupMembers collection.
	 *
	 * By default this just sets the collNagiosServiceGroupMembers collection to an empty array (like clearcollNagiosServiceGroupMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceGroupMembers($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceGroupMembers && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceGroupMembers = new PropelObjectCollection();
		$this->collNagiosServiceGroupMembers->setModel('NagiosServiceGroupMember');
	}

	/**
	 * Gets an array of NagiosServiceGroupMember objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceGroupMember[] List of NagiosServiceGroupMember objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceGroupMembers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceGroupMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceGroupMembers) {
				// return empty collection
				$this->initNagiosServiceGroupMembers();
			} else {
				$collNagiosServiceGroupMembers = NagiosServiceGroupMemberQuery::create(null, $criteria)
					->filterByNagiosServiceTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceGroupMembers;
				}
				$this->collNagiosServiceGroupMembers = $collNagiosServiceGroupMembers;
			}
		}
		return $this->collNagiosServiceGroupMembers;
	}

	/**
	 * Returns the number of related NagiosServiceGroupMember objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceGroupMember objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceGroupMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceGroupMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceGroupMembers) {
				return 0;
			} else {
				$query = NagiosServiceGroupMemberQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceGroupMembers);
		}
	}

	/**
	 * Method called to associate a NagiosServiceGroupMember object to this object
	 * through the NagiosServiceGroupMember foreign key attribute.
	 *
	 * @param      NagiosServiceGroupMember $l NagiosServiceGroupMember
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceGroupMember(NagiosServiceGroupMember $l)
	{
		if ($this->collNagiosServiceGroupMembers === null) {
			$this->initNagiosServiceGroupMembers();
		}
		if (!$this->collNagiosServiceGroupMembers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceGroupMembers[]= $l;
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceGroupMember[] List of NagiosServiceGroupMember objects
	 */
	public function getNagiosServiceGroupMembersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceGroupMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosServiceGroupMembers($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceGroupMember[] List of NagiosServiceGroupMember objects
	 */
	public function getNagiosServiceGroupMembersJoinNagiosServiceGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceGroupMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosServiceGroup', $join_behavior);

		return $this->getNagiosServiceGroupMembers($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceContactMembers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceContactMembers()
	 */
	public function clearNagiosServiceContactMembers()
	{
		$this->collNagiosServiceContactMembers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceContactMembers collection.
	 *
	 * By default this just sets the collNagiosServiceContactMembers collection to an empty array (like clearcollNagiosServiceContactMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceContactMembers($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceContactMembers && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceContactMembers = new PropelObjectCollection();
		$this->collNagiosServiceContactMembers->setModel('NagiosServiceContactMember');
	}

	/**
	 * Gets an array of NagiosServiceContactMember objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceContactMember[] List of NagiosServiceContactMember objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceContactMembers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceContactMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceContactMembers) {
				// return empty collection
				$this->initNagiosServiceContactMembers();
			} else {
				$collNagiosServiceContactMembers = NagiosServiceContactMemberQuery::create(null, $criteria)
					->filterByNagiosServiceTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceContactMembers;
				}
				$this->collNagiosServiceContactMembers = $collNagiosServiceContactMembers;
			}
		}
		return $this->collNagiosServiceContactMembers;
	}

	/**
	 * Returns the number of related NagiosServiceContactMember objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceContactMember objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceContactMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceContactMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceContactMembers) {
				return 0;
			} else {
				$query = NagiosServiceContactMemberQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceContactMembers);
		}
	}

	/**
	 * Method called to associate a NagiosServiceContactMember object to this object
	 * through the NagiosServiceContactMember foreign key attribute.
	 *
	 * @param      NagiosServiceContactMember $l NagiosServiceContactMember
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceContactMember(NagiosServiceContactMember $l)
	{
		if ($this->collNagiosServiceContactMembers === null) {
			$this->initNagiosServiceContactMembers();
		}
		if (!$this->collNagiosServiceContactMembers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceContactMembers[]= $l;
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceContactMember[] List of NagiosServiceContactMember objects
	 */
	public function getNagiosServiceContactMembersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceContactMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosServiceContactMembers($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceContactMember[] List of NagiosServiceContactMember objects
	 */
	public function getNagiosServiceContactMembersJoinNagiosContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceContactMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosContact', $join_behavior);

		return $this->getNagiosServiceContactMembers($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceContactGroupMembers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceContactGroupMembers()
	 */
	public function clearNagiosServiceContactGroupMembers()
	{
		$this->collNagiosServiceContactGroupMembers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceContactGroupMembers collection.
	 *
	 * By default this just sets the collNagiosServiceContactGroupMembers collection to an empty array (like clearcollNagiosServiceContactGroupMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceContactGroupMembers($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceContactGroupMembers && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceContactGroupMembers = new PropelObjectCollection();
		$this->collNagiosServiceContactGroupMembers->setModel('NagiosServiceContactGroupMember');
	}

	/**
	 * Gets an array of NagiosServiceContactGroupMember objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceContactGroupMember[] List of NagiosServiceContactGroupMember objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceContactGroupMembers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceContactGroupMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceContactGroupMembers) {
				// return empty collection
				$this->initNagiosServiceContactGroupMembers();
			} else {
				$collNagiosServiceContactGroupMembers = NagiosServiceContactGroupMemberQuery::create(null, $criteria)
					->filterByNagiosServiceTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceContactGroupMembers;
				}
				$this->collNagiosServiceContactGroupMembers = $collNagiosServiceContactGroupMembers;
			}
		}
		return $this->collNagiosServiceContactGroupMembers;
	}

	/**
	 * Returns the number of related NagiosServiceContactGroupMember objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceContactGroupMember objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceContactGroupMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceContactGroupMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceContactGroupMembers) {
				return 0;
			} else {
				$query = NagiosServiceContactGroupMemberQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceContactGroupMembers);
		}
	}

	/**
	 * Method called to associate a NagiosServiceContactGroupMember object to this object
	 * through the NagiosServiceContactGroupMember foreign key attribute.
	 *
	 * @param      NagiosServiceContactGroupMember $l NagiosServiceContactGroupMember
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceContactGroupMember(NagiosServiceContactGroupMember $l)
	{
		if ($this->collNagiosServiceContactGroupMembers === null) {
			$this->initNagiosServiceContactGroupMembers();
		}
		if (!$this->collNagiosServiceContactGroupMembers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceContactGroupMembers[]= $l;
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceContactGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceContactGroupMember[] List of NagiosServiceContactGroupMember objects
	 */
	public function getNagiosServiceContactGroupMembersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceContactGroupMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosServiceContactGroupMembers($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceContactGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceContactGroupMember[] List of NagiosServiceContactGroupMember objects
	 */
	public function getNagiosServiceContactGroupMembersJoinNagiosContactGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceContactGroupMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosContactGroup', $join_behavior);

		return $this->getNagiosServiceContactGroupMembers($query, $con);
	}

	/**
	 * Clears out the collNagiosDependencys collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosDependencys()
	 */
	public function clearNagiosDependencys()
	{
		$this->collNagiosDependencys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosDependencys collection.
	 *
	 * By default this just sets the collNagiosDependencys collection to an empty array (like clearcollNagiosDependencys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosDependencys($overrideExisting = true)
	{
		if (null !== $this->collNagiosDependencys && !$overrideExisting) {
			return;
		}
		$this->collNagiosDependencys = new PropelObjectCollection();
		$this->collNagiosDependencys->setModel('NagiosDependency');
	}

	/**
	 * Gets an array of NagiosDependency objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 * @throws     PropelException
	 */
	public function getNagiosDependencys($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosDependencys || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosDependencys) {
				// return empty collection
				$this->initNagiosDependencys();
			} else {
				$collNagiosDependencys = NagiosDependencyQuery::create(null, $criteria)
					->filterByNagiosServiceTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosDependencys;
				}
				$this->collNagiosDependencys = $collNagiosDependencys;
			}
		}
		return $this->collNagiosDependencys;
	}

	/**
	 * Returns the number of related NagiosDependency objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosDependency objects.
	 * @throws     PropelException
	 */
	public function countNagiosDependencys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosDependencys || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosDependencys) {
				return 0;
			} else {
				$query = NagiosDependencyQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosDependencys);
		}
	}

	/**
	 * Method called to associate a NagiosDependency object to this object
	 * through the NagiosDependency foreign key attribute.
	 *
	 * @param      NagiosDependency $l NagiosDependency
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosDependency(NagiosDependency $l)
	{
		if ($this->collNagiosDependencys === null) {
			$this->initNagiosDependencys();
		}
		if (!$this->collNagiosDependencys->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosDependencys[]= $l;
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosHostgroup', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosTimeperiod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiod', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}

	/**
	 * Clears out the collNagiosEscalations collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosEscalations()
	 */
	public function clearNagiosEscalations()
	{
		$this->collNagiosEscalations = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosEscalations collection.
	 *
	 * By default this just sets the collNagiosEscalations collection to an empty array (like clearcollNagiosEscalations());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosEscalations($overrideExisting = true)
	{
		if (null !== $this->collNagiosEscalations && !$overrideExisting) {
			return;
		}
		$this->collNagiosEscalations = new PropelObjectCollection();
		$this->collNagiosEscalations->setModel('NagiosEscalation');
	}

	/**
	 * Gets an array of NagiosEscalation objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 * @throws     PropelException
	 */
	public function getNagiosEscalations($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosEscalations || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosEscalations) {
				// return empty collection
				$this->initNagiosEscalations();
			} else {
				$collNagiosEscalations = NagiosEscalationQuery::create(null, $criteria)
					->filterByNagiosServiceTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosEscalations;
				}
				$this->collNagiosEscalations = $collNagiosEscalations;
			}
		}
		return $this->collNagiosEscalations;
	}

	/**
	 * Returns the number of related NagiosEscalation objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosEscalation objects.
	 * @throws     PropelException
	 */
	public function countNagiosEscalations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosEscalations || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosEscalations) {
				return 0;
			} else {
				$query = NagiosEscalationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosEscalations);
		}
	}

	/**
	 * Method called to associate a NagiosEscalation object to this object
	 * through the NagiosEscalation foreign key attribute.
	 *
	 * @param      NagiosEscalation $l NagiosEscalation
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosEscalation(NagiosEscalation $l)
	{
		if ($this->collNagiosEscalations === null) {
			$this->initNagiosEscalations();
		}
		if (!$this->collNagiosEscalations->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosEscalations[]= $l;
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosHostgroup', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosTimeperiod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiod', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceTemplateInheritancesRelatedBySourceTemplate collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceTemplateInheritancesRelatedBySourceTemplate()
	 */
	public function clearNagiosServiceTemplateInheritancesRelatedBySourceTemplate()
	{
		$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceTemplateInheritancesRelatedBySourceTemplate collection.
	 *
	 * By default this just sets the collNagiosServiceTemplateInheritancesRelatedBySourceTemplate collection to an empty array (like clearcollNagiosServiceTemplateInheritancesRelatedBySourceTemplate());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplateInheritancesRelatedBySourceTemplate($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = new PropelObjectCollection();
		$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate->setModel('NagiosServiceTemplateInheritance');
	}

	/**
	 * Gets an array of NagiosServiceTemplateInheritance objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceTemplateInheritance[] List of NagiosServiceTemplateInheritance objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplateInheritancesRelatedBySourceTemplate($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate) {
				// return empty collection
				$this->initNagiosServiceTemplateInheritancesRelatedBySourceTemplate();
			} else {
				$collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = NagiosServiceTemplateInheritanceQuery::create(null, $criteria)
					->filterByNagiosServiceTemplateRelatedBySourceTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceTemplateInheritancesRelatedBySourceTemplate;
				}
				$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = $collNagiosServiceTemplateInheritancesRelatedBySourceTemplate;
			}
		}
		return $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate;
	}

	/**
	 * Returns the number of related NagiosServiceTemplateInheritance objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceTemplateInheritance objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceTemplateInheritancesRelatedBySourceTemplate(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate) {
				return 0;
			} else {
				$query = NagiosServiceTemplateInheritanceQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplateRelatedBySourceTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate);
		}
	}

	/**
	 * Method called to associate a NagiosServiceTemplateInheritance object to this object
	 * through the NagiosServiceTemplateInheritance foreign key attribute.
	 *
	 * @param      NagiosServiceTemplateInheritance $l NagiosServiceTemplateInheritance
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceTemplateInheritanceRelatedBySourceTemplate(NagiosServiceTemplateInheritance $l)
	{
		if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate === null) {
			$this->initNagiosServiceTemplateInheritancesRelatedBySourceTemplate();
		}
		if (!$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate[]= $l;
			$l->setNagiosServiceTemplateRelatedBySourceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceTemplateInheritancesRelatedBySourceTemplate from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceTemplateInheritance[] List of NagiosServiceTemplateInheritance objects
	 */
	public function getNagiosServiceTemplateInheritancesRelatedBySourceTemplateJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceTemplateInheritanceQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosServiceTemplateInheritancesRelatedBySourceTemplate($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceTemplateInheritancesRelatedByTargetTemplate collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceTemplateInheritancesRelatedByTargetTemplate()
	 */
	public function clearNagiosServiceTemplateInheritancesRelatedByTargetTemplate()
	{
		$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceTemplateInheritancesRelatedByTargetTemplate collection.
	 *
	 * By default this just sets the collNagiosServiceTemplateInheritancesRelatedByTargetTemplate collection to an empty array (like clearcollNagiosServiceTemplateInheritancesRelatedByTargetTemplate());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplateInheritancesRelatedByTargetTemplate($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = new PropelObjectCollection();
		$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate->setModel('NagiosServiceTemplateInheritance');
	}

	/**
	 * Gets an array of NagiosServiceTemplateInheritance objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceTemplateInheritance[] List of NagiosServiceTemplateInheritance objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplateInheritancesRelatedByTargetTemplate($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate) {
				// return empty collection
				$this->initNagiosServiceTemplateInheritancesRelatedByTargetTemplate();
			} else {
				$collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = NagiosServiceTemplateInheritanceQuery::create(null, $criteria)
					->filterByNagiosServiceTemplateRelatedByTargetTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceTemplateInheritancesRelatedByTargetTemplate;
				}
				$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = $collNagiosServiceTemplateInheritancesRelatedByTargetTemplate;
			}
		}
		return $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate;
	}

	/**
	 * Returns the number of related NagiosServiceTemplateInheritance objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceTemplateInheritance objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceTemplateInheritancesRelatedByTargetTemplate(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate) {
				return 0;
			} else {
				$query = NagiosServiceTemplateInheritanceQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplateRelatedByTargetTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate);
		}
	}

	/**
	 * Method called to associate a NagiosServiceTemplateInheritance object to this object
	 * through the NagiosServiceTemplateInheritance foreign key attribute.
	 *
	 * @param      NagiosServiceTemplateInheritance $l NagiosServiceTemplateInheritance
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceTemplateInheritanceRelatedByTargetTemplate(NagiosServiceTemplateInheritance $l)
	{
		if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate === null) {
			$this->initNagiosServiceTemplateInheritancesRelatedByTargetTemplate();
		}
		if (!$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate[]= $l;
			$l->setNagiosServiceTemplateRelatedByTargetTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceTemplateInheritancesRelatedByTargetTemplate from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceTemplateInheritance[] List of NagiosServiceTemplateInheritance objects
	 */
	public function getNagiosServiceTemplateInheritancesRelatedByTargetTemplateJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceTemplateInheritanceQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosServiceTemplateInheritancesRelatedByTargetTemplate($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceCustomObjectVars collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceCustomObjectVars()
	 */
	public function clearNagiosServiceCustomObjectVars()
	{
		$this->collNagiosServiceCustomObjectVars = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceCustomObjectVars collection.
	 *
	 * By default this just sets the collNagiosServiceCustomObjectVars collection to an empty array (like clearcollNagiosServiceCustomObjectVars());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceCustomObjectVars($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceCustomObjectVars && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceCustomObjectVars = new PropelObjectCollection();
		$this->collNagiosServiceCustomObjectVars->setModel('NagiosServiceCustomObjectVar');
	}

	/**
	 * Gets an array of NagiosServiceCustomObjectVar objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceCustomObjectVar[] List of NagiosServiceCustomObjectVar objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceCustomObjectVars($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceCustomObjectVars || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceCustomObjectVars) {
				// return empty collection
				$this->initNagiosServiceCustomObjectVars();
			} else {
				$collNagiosServiceCustomObjectVars = NagiosServiceCustomObjectVarQuery::create(null, $criteria)
					->filterByNagiosServiceTemplate($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceCustomObjectVars;
				}
				$this->collNagiosServiceCustomObjectVars = $collNagiosServiceCustomObjectVars;
			}
		}
		return $this->collNagiosServiceCustomObjectVars;
	}

	/**
	 * Returns the number of related NagiosServiceCustomObjectVar objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceCustomObjectVar objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceCustomObjectVars(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceCustomObjectVars || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceCustomObjectVars) {
				return 0;
			} else {
				$query = NagiosServiceCustomObjectVarQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosServiceTemplate($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceCustomObjectVars);
		}
	}

	/**
	 * Method called to associate a NagiosServiceCustomObjectVar object to this object
	 * through the NagiosServiceCustomObjectVar foreign key attribute.
	 *
	 * @param      NagiosServiceCustomObjectVar $l NagiosServiceCustomObjectVar
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceCustomObjectVar(NagiosServiceCustomObjectVar $l)
	{
		if ($this->collNagiosServiceCustomObjectVars === null) {
			$this->initNagiosServiceCustomObjectVars();
		}
		if (!$this->collNagiosServiceCustomObjectVars->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceCustomObjectVars[]= $l;
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceCustomObjectVars from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceCustomObjectVar[] List of NagiosServiceCustomObjectVar objects
	 */
	public function getNagiosServiceCustomObjectVarsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceCustomObjectVarQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosServiceCustomObjectVars($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->name = null;
		$this->description = null;
		$this->initial_state = null;
		$this->is_volatile = null;
		$this->check_command = null;
		$this->maximum_check_attempts = null;
		$this->normal_check_interval = null;
		$this->retry_interval = null;
		$this->first_notification_delay = null;
		$this->active_checks_enabled = null;
		$this->passive_checks_enabled = null;
		$this->check_period = null;
		$this->parallelize_check = null;
		$this->obsess_over_service = null;
		$this->check_freshness = null;
		$this->freshness_threshold = null;
		$this->event_handler = null;
		$this->event_handler_enabled = null;
		$this->low_flap_threshold = null;
		$this->high_flap_threshold = null;
		$this->flap_detection_enabled = null;
		$this->flap_detection_on_ok = null;
		$this->flap_detection_on_warning = null;
		$this->flap_detection_on_critical = null;
		$this->flap_detection_on_unknown = null;
		$this->process_perf_data = null;
		$this->retain_status_information = null;
		$this->retain_nonstatus_information = null;
		$this->notification_interval = null;
		$this->notification_period = null;
		$this->notification_on_warning = null;
		$this->notification_on_unknown = null;
		$this->notification_on_critical = null;
		$this->notification_on_recovery = null;
		$this->notification_on_flapping = null;
		$this->notification_on_scheduled_downtime = null;
		$this->notifications_enabled = null;
		$this->stalking_on_ok = null;
		$this->stalking_on_warning = null;
		$this->stalking_on_unknown = null;
		$this->stalking_on_critical = null;
		$this->failure_prediction_enabled = null;
		$this->notes = null;
		$this->notes_url = null;
		$this->action_url = null;
		$this->icon_image = null;
		$this->icon_image_alt = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collNagiosServiceCheckCommandParameters) {
				foreach ($this->collNagiosServiceCheckCommandParameters as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceGroupMembers) {
				foreach ($this->collNagiosServiceGroupMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceContactMembers) {
				foreach ($this->collNagiosServiceContactMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceContactGroupMembers) {
				foreach ($this->collNagiosServiceContactGroupMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosDependencys) {
				foreach ($this->collNagiosDependencys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosEscalations) {
				foreach ($this->collNagiosEscalations as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate) {
				foreach ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate) {
				foreach ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceCustomObjectVars) {
				foreach ($this->collNagiosServiceCustomObjectVars as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collNagiosServiceCheckCommandParameters instanceof PropelCollection) {
			$this->collNagiosServiceCheckCommandParameters->clearIterator();
		}
		$this->collNagiosServiceCheckCommandParameters = null;
		if ($this->collNagiosServiceGroupMembers instanceof PropelCollection) {
			$this->collNagiosServiceGroupMembers->clearIterator();
		}
		$this->collNagiosServiceGroupMembers = null;
		if ($this->collNagiosServiceContactMembers instanceof PropelCollection) {
			$this->collNagiosServiceContactMembers->clearIterator();
		}
		$this->collNagiosServiceContactMembers = null;
		if ($this->collNagiosServiceContactGroupMembers instanceof PropelCollection) {
			$this->collNagiosServiceContactGroupMembers->clearIterator();
		}
		$this->collNagiosServiceContactGroupMembers = null;
		if ($this->collNagiosDependencys instanceof PropelCollection) {
			$this->collNagiosDependencys->clearIterator();
		}
		$this->collNagiosDependencys = null;
		if ($this->collNagiosEscalations instanceof PropelCollection) {
			$this->collNagiosEscalations->clearIterator();
		}
		$this->collNagiosEscalations = null;
		if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate instanceof PropelCollection) {
			$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate->clearIterator();
		}
		$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = null;
		if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate instanceof PropelCollection) {
			$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate->clearIterator();
		}
		$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = null;
		if ($this->collNagiosServiceCustomObjectVars instanceof PropelCollection) {
			$this->collNagiosServiceCustomObjectVars->clearIterator();
		}
		$this->collNagiosServiceCustomObjectVars = null;
		$this->aNagiosCommandRelatedByCheckCommand = null;
		$this->aNagiosCommandRelatedByEventHandler = null;
		$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
		$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(NagiosServiceTemplatePeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseNagiosServiceTemplate
