<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Trial_Project
 * @subpackage Trial_Project/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Trial_Project
 * @subpackage Trial_Project/admin
 * @author     Your Name <email@example.com>
 */
class Trial_Project_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $trial_project    The ID of this plugin.
	 */
	private $trial_project;

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
	 * @param      string    $trial_project       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $trial_project, $version ) {

		$this->trial_project = $trial_project;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Trial_Project_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Trial_Project_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->trial_project, plugin_dir_url( __FILE__ ) . 'css/trial-project-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Trial_Project_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Trial_Project_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->trial_project, plugin_dir_url( __FILE__ ) . 'js/trial-project-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function create_kitten_post() {
		$labels = array(
			'name' => __( 'Kittens'),
			'singular_name' => __( 'Kitten'),
			'add_new' => __('New Kitten'),
			'add_new_item' => __('Add New Kitten'),
			'edit_item' => __('Edit Kitten'),
			'new_item' => __('View Kitten'),
			'search_items' => __('Search Kittens'),
			'not_found' => __('No Kittens Found'),
			'not_found_in_trash' => __('No Kittens Found In Trash')
		);

		$args = array(
			'labels' => $labels,
			'has_archive' => true,
			'public' => true,
			'hierarchical' => false,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'page-attributes'
			)
		);

		register_post_type( 'kitten', $args);
	}

}
