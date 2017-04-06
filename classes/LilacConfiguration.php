<?php

require 'om/BaseLilacConfiguration.php';


/**
 * Skeleton subclass for representing a row from the 'lilac_configuration' table.
 *
 * Lilac Configuration
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class LilacConfiguration extends BaseLilacConfiguration {

	/**
	 * Initializes internal state of LilacConfiguration object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // LilacConfiguration
