<?php # -*- coding: utf-8 -*-

namespace tfrommen\DefaultPostDate\Setting;

/**
 * Setting controller.
 *
 * @package tfrommen\DefaultPostDate\Setting
 */
class Controller {

	/**
	 * @var Setting
	 */
	private $setting;

	/**
	 * Constructor. Sets up the properties.
	 *
	 * @param Setting $setting Setting object.
	 */
	public function __construct( Setting $setting ) {

		$this->setting = $setting;
	}

	/**
	 * Wires up all functions.
	 *
	 * @return void
	 */
	public function initialize() {

		add_action( 'admin_init', array( $this->setting, 'register' ) );
	}
}
