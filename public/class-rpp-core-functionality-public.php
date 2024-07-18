<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Rpp_Core_Functionality
 * @subpackage Rpp_Core_Functionality/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Rpp_Core_Functionality
 * @subpackage Rpp_Core_Functionality/public
 * @author     Your Name <email@example.com>
 */
class Rpp_Core_Functionality_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $rpp_core_functionality    The ID of this plugin.
	 */
	private $rpp_core_functionality;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $rpp_core_functionality       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $rpp_core_functionality, $version ) {

		$this->rpp_core_functionality = $rpp_core_functionality;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rpp_Core_Functionality_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rpp_Core_Functionality_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->rpp_core_functionality, plugin_dir_url( __FILE__ ) . 'css/rpp-core-functionality-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rpp_Core_Functionality_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rpp_Core_Functionality_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->rpp_core_functionality, plugin_dir_url( __FILE__ ) . 'js/rpp-core-functionality-public.js', array( 'jquery' ), $this->version, false );

	}

}
