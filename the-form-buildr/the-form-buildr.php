<?php

defined( 'ABSPATH' ) or die( 'please dont try to cheat!' );

/*
  Plugin Name: The Form BuildR
  Description: The plugin that helps you build custom forms
  Version:     1.0
  Author:      Tech & Pro
 */

/**
 * Necessary Constants for plugin
 */
global $wpdb;
defined( 'TFB_VERSION' ) or define( 'TFB_VERSION', '1.0' ); //plugin version
defined( 'TFB_SLUG' ) or define( 'TFB_SLUG', 'tfb' ); //plugin admin slug
defined( 'TFB_TD' ) or define( 'TFB_TD', 'the-form-buildr' ); //plugin's text domain
defined( 'TFB_IMG_DIR' ) or define( 'TFB_IMG_DIR', plugin_dir_url( __FILE__ ) . 'images' ); //plugin image directory
defined( 'TFB_JS_DIR' ) or define( 'TFB_JS_DIR', plugin_dir_url( __FILE__ ) . 'js' );  //plugin js directory
defined( 'TFB_CSS_DIR' ) or define( 'TFB_CSS_DIR', plugin_dir_url( __FILE__ ) . 'css' ); // plugin css dir
defined( 'TFB_PATH' ) or define( 'TFB_PATH', plugin_dir_path( __FILE__ ) );
defined( 'TFB_FORM_TABLE' ) or define( 'TFB_FORM_TABLE', $wpdb->prefix . 'tfb_forms' );
defined( 'TFB_ENTRY_TABLE' ) or define( 'TFB_ENTRY_TABLE', $wpdb->prefix . 'tfb_entries' );
defined( 'TFB_ENTRY_LIMIT' ) or define( 'TFB_ENTRY_LIMIT', 10 );

require_once TFB_PATH . 'classes/tfb-lib.php';
require_once TFB_PATH . 'classes/tfb-model.php';

/**
 * Plugin's main class
 */
if ( !class_exists( 'TFB_Class' ) ) {

	class TFB_Class {

		var $library;
		var $model;

		/**
		 * Plugin initialization hooks
		 */
		function __construct() {
			$this->library = new TFB_Lib();
			$this->model = new TFB_Model();
			add_action( 'init', array( $this, 'tfb_init' ) ); //executes when init hook is fired
			add_action( 'admin_menu', array( $this, 'tfb_menu' ) ); //adds plugin menu in wordpress backend
			add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_assets' ) ); //registers admin assets
			add_action( 'wp_enqueue_scripts', array( $this, 'register_frontend_assets' ) ); //registers admin assets

			/**
			 * Form Add Action
			 */
			add_action( 'wp_ajax_add_form_action', array( $this, 'add_form_ajax' ) ); //add form ajax action
			add_action( 'wp_ajax_nopriv_add_form_action', array( $this, 'no_permission' ) ); //preventing unauthorized ajax call

			/**
			 * Form Copy Action
			 */
			add_action( 'wp_ajax_copy_form_action', array( $this, 'copy_form_ajax' ) ); //copy form ajax action
			add_action( 'wp_ajax_nopriv_copy_form_action', array( $this, 'no_permission' ) ); //preventing unauthorized ajax call

			/**
			 * Front Form Action
			 */
			add_action( 'wp_ajax_tfb_front_form_action', array( $this, 'front_form_action' ) ); //add form ajax action
			add_action( 'wp_ajax_nopriv_tfb_front_form_action', array( $this, 'front_form_action' ) ); //preventing unauthorized ajax call

			/**
			 * Form Status Action
			 */
			add_action( 'wp_ajax_tfb_form_status_action', array( $this, 'form_status_action' ) ); //add form ajax action
			add_action( 'wp_ajax_nopriv_tfb_form_status_action', array( $this, 'no_permission' ) ); //preventing unauthorized ajax call

			/**
			 * Form Delete Action
			 */
			add_action( 'wp_ajax_tfb_form_delete_action', array( $this, 'form_delete_action' ) ); //form delete ajax action
			add_action( 'wp_ajax_nopriv_tfb_form_delete_action', array( $this, 'no_permission' ) ); //preventing unauthorized ajax call

			/**
			 * Entry Delete Action
			 */
			add_action( 'wp_ajax_tfb_entry_delete_action', array( $this, 'entry_delete_action' ) ); //entry delete ajax action
			add_action( 'wp_ajax_nopriv_tfb_form_delete_action', array( $this, 'no_permission' ) ); //preventing unauthorized ajax call

			/**
			 * Entry Detail Action
			 */
			add_action( 'wp_ajax_tfb_get_entry_detail_action', array( $this, 'get_entry_detail_action' ) ); //entry detail ajax action
			add_action( 'wp_ajax_nopriv_tfb_get_entry_detail_action', array( $this, 'no_permission' ) ); //preventing unauthorized ajax call

			register_activation_hook( __FILE__, array( $this, 'activate_plugin' ) ); //executes when plugin is activated
			add_action( 'admin_post_tfb_form_action', array( $this, 'tfb_form_action' ) ); //form action

			/**
			 * Form Shortcode
			 */
			add_shortcode( 'tfb', array( $this, 'shortcode_manager' ) );

			/**
			 * CSV Export Action
			 */
			add_action( 'admin_post_tfb_csv_export', array( $this, 'export_csv' ) );

			/**
			 * Form Preview
			 */
			add_action( 'template_redirect', array( $this, 'preview_form' ) );
		}

		/**
		 * Tasks to be done in init hook
		 * Loads plugin for translation
		 * Starts session
		 */
		function tfb_init() {
			if ( !session_id() && !headers_sent() ) {
				session_start(); //starts session if already not started
			}
			do_action( 'tfb_init' );
		}

		/**
		 * Adds Plugin menu in wordpress backend
		 */
		function tfb_menu() {
			add_menu_page( __( 'Form BuildR', 'the-form-buildr' ), __( 'Form BuildR', 'the-form-buildr' ), 'manage_options', TFB_SLUG, array( $this, 'forms_list' ),'dashicons-format-aside',36 );
			add_submenu_page( TFB_SLUG, isset( $_GET['form_id'] ) ? __( 'Edit Form', 'the-form-buildr' ) : __( 'My Forms', 'the-form-buildr' ), __( 'My Forms', 'the-form-buildr' ), 'manage_options', TFB_SLUG, array( $this, 'forms_list' ) );
			add_submenu_page( TFB_SLUG, __( 'New Form', 'the-form-buildr' ), __( 'New Form', 'the-form-buildr' ), 'manage_options', 'tfb-new-form', array( $this, 'add_new_form' ) ); 
			add_submenu_page( TFB_SLUG, __( 'Form Entries', 'the-form-buildr' ), __( 'Form Entries', 'the-form-buildr' ), 'manage_options', 'tfb-form-entries', array( $this, 'forms_entries' ) );
			//add_submenu_page( TFB_SLUG, __( 'How to use', 'the-form-buildr' ), __( 'How to use', 'the-form-buildr' ), 'manage_options', 'tfb-how-to-use', array( $this, 'how_to_use' ) );
			//add_submenu_page( TFB_SLUG, __( 'About', 'the-form-buildr' ), __( 'About', 'the-form-buildr' ), 'manage_options', 'tfb-about', array( $this, 'about' ) );
            
		}

		/**
		 * Forms Listing
		 */
		function forms_list() {
			if ( isset( $_GET['action'], $_GET['form_id'] ) && $_GET['action'] == 'edit-form' ) {
				$form_id = intval(sanitize_text_field( $_GET['form_id'] ));
				$data['form_row'] = $this->model->get_form_detail( $form_id );
				if ( $data['form_row'] != null ) {
					$this->library->load_view( 'backend/form-builder', $data );
				} else {
					echo  __( 'No form found for this form id.Please go back and create a new form.', 'the-form-buildr' );
				}
			} else {
				$forms = $this->model->get_all_forms();
				$data['forms'] = $forms;
				$this->library->load_view( 'backend/form-list', $data );
			}
		}


		/**
		 * Plugin on activation tasks
		 */
		function activate_plugin() {
			$this->library->load_core( 'activation' );
		}

		/**
		 * Registers admin assets
		 */
		function register_admin_assets() {
			$plugin_pages = array( TFB_SLUG, 'tfb-new-form', 'tfb-form-entries', 'tfb-how-to-use', 'tfb-about' );
			$admin_ajax_nonce = wp_create_nonce( 'tfb-admin-ajax-nonce' );
			$admin_ajax_object = array( 'ajax_url' => admin_url( 'admin-ajax.php' ), 'ajax_nonce' => $admin_ajax_nonce );
			if ( isset( $_GET['page'] ) && in_array( $_GET['page'], $plugin_pages ) ) {
				wp_enqueue_script( 'jquery-ui-sortable' );
				wp_enqueue_style( 'tfb-admin', TFB_CSS_DIR . '/backend.css');//, array(), TFB_VERSION );
				wp_enqueue_style( 'tfb-font-awesome', TFB_CSS_DIR.'/font-awesome.min.css', array(), TFB_VERSION );
				wp_enqueue_script( 'jquery-perfect-scrollbar', TFB_JS_DIR . '/lib/perfect-scrollbar.jquery.min.js', array( 'jquery' ) );
				wp_enqueue_script( 'tfb-admin-js', TFB_JS_DIR . '/backend.js', array( 'jquery', 'jquery-ui-sortable' ), TFB_VERSION );
				wp_localize_script( 'tfb-admin-js', 'tfb_ajax_obj', $admin_ajax_object );
			}
		}

		/**
		 * Registers front assets
		 */
		function register_frontend_assets() {
			wp_enqueue_style( 'tfb-custom-select-css', TFB_CSS_DIR . '/jquery.selectbox.css', array(), TFB_VERSION );
			wp_enqueue_style( 'tfb-front-css', TFB_CSS_DIR . '/frontend.css', array(), TFB_VERSION );
			wp_enqueue_style( 'tfb-date-css', TFB_CSS_DIR . '/tail.datetime-default.css', array(), TFB_VERSION );
			wp_enqueue_style( 'tfb-date-blue-css', TFB_CSS_DIR . '/tail.datetime-default-blue.css', array(), TFB_VERSION );
			wp_enqueue_script( 'tfb-custom-select-js', TFB_JS_DIR . '/jquery.selectbox-0.2.min.js', array( 'jquery' ), TFB_VERSION );
			wp_enqueue_script( 'tfb-front-js', TFB_JS_DIR . '/frontend.js', array( 'jquery','tfb-custom-select-js' ), TFB_VERSION );
			wp_enqueue_script( 'tfb-date-js', TFB_JS_DIR . '/tail.datetime.js', array(), TFB_VERSION );
			$frontend_js_obj = array(
				'default_error_message' => __( 'This field is required', 'the-form-buildr' ),
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'ajax_nonce' => wp_create_nonce( 'frontend-ajax-nonce' )
			);
			wp_localize_script( 'tfb-front-js', 'frontend_js_obj', $frontend_js_obj );
		}

		/**
		 * Unauthorized ajax call
		 */
		function no_permission() {
			die( 'Please Don\'t try to hAcK us' );
		}
		
		/**
		 * Add New Form
		 */
		function add_new_form(){
			$this->library->load_view('backend/new-form');
		}

		/**
		 * Add Form Ajax Action
		 */
		function add_form_ajax() {
			if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'tfb-admin-ajax-nonce' ) ) {
				$this->model->add_form();
			} else {
				die( 'No script kiddies please' );
			}
		}

		/**
		 * Form status change action
		 */
		function form_status_action() {
			if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'tfb-admin-ajax-nonce' ) ) {
				$this->model->change_form_status();
			} else {
				die( 'No script kiddies please' );
			}
		}

		/**
		 * Form Save Action
		 */
		function form_save_action() {
			if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'tfb-admin-ajax-nonce' ) ) {
				$this->model->save_form();
			} else {
				die( 'No script kiddies please' );
			}
		}

		/**
		 * Form Delete Action
		 */
		function form_delete_action() {
			if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'tfb-admin-ajax-nonce' ) ) {
				$this->model->delete_form();
			} else {
				die( 'No script kiddies please' );
			}
		}

		/**
		 * TFB Form Save Action
		 */
		function tfb_form_action() {
			if ( isset( $_POST['tfb_form_nonce_field'] ) && wp_verify_nonce( $_POST['tfb_form_nonce_field'], 'tfb-form-nonce' ) ) {
				$this->model->save_form();
			} else {
				die( 'No script kiddies please' );
			}
		}

		/**
		 * Form Entries Page
		 */
		function forms_entries() {
			$form_rows = $this->model->get_forms();
			$data['form_rows'] = $form_rows;
			$page = isset($_GET['page_num'])?intval(sanitize_text_field($_GET['page_num'])):1;
			$limit = TFB_ENTRY_LIMIT;
			$offset = ($page-1)*$limit;
			if ( isset( $_GET['form_id'] ) ) {
				$form_id = intval(sanitize_text_field( $_GET['form_id'] ));
				$form_entries_row = $this->model->get_forms_entries( $form_id,$limit,$offset );
				$total_form_entries = $this->model->get_total_form_entries($form_id);
			} else {
				$form_entries_row = $this->model->get_forms_entries(NULL,$limit,$offset);
				$total_form_entries = $this->model->get_total_form_entries();
			}
			$total_pages = $total_form_entries/$limit;
			if($total_form_entries%$limit!=0){
				$total_pages = intval($total_pages)+1;
			}
			$data['form_entry_rows'] = $form_entries_row;
			$data['total_pages'] = $total_pages;
			$this->library->load_view( 'backend/form-entries-list', $data );
		}

		/**
		 * Form Shortcode
		 */
		function shortcode_manager( $atts = array() ) {
			if ( isset( $atts['form_id'] ) ) {
				$form_id = $atts['form_id'];
				$form_row = $this->model->get_form_row( $form_id );
				if ( $form_row != '' ) {
					if ( $form_row['form_status'] == 1 ) {

						$form_html = $this->generate_form( $form_row );
					} else {
						$close_message = isset( $atts['close_message'] ) ? $atts['close_message'] : __( 'This form is closed', 'the-form-buildr' );
						$form_html = '<p>' . $close_message . '</p>';
					}
				} else {
					$form_html = '<p>' . __( 'No Form-BuildR Form found with id ', 'the-form-buildr' ) . $form_id . '</p>';
				}


				return $form_html;
			} else {
				return __( 'Form ID missing', 'the-form-buildr' );
			}
		}

		/**
		 * Form HTML
		 * 
		 */
		function generate_form( $form_row ) {
			$data['form_row'] = $form_row;
			ob_start();
			$this->library->load_view( 'frontend/front-form', $data );
			$form_html = ob_get_contents();
			ob_clean();
			return $form_html;
		}

		/**
		 * Front Form Action
		 */
		function front_form_action() {
			if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'frontend-ajax-nonce' ) ) {
				//$this->library->print_array( $_POST );
				$this->library->do_form_process();
				do_action( 'tfb_front_form_action' );
				die();
			} else {
				die( 'Please Don\'t try to hAcK us' );
			}
		}

		/**
		 * Entry Delete Action
		 */
		function entry_delete_action() {
			if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'tfb-admin-ajax-nonce' ) ) {
				//$this->library->print_array($_POST);die();
				$entry_id = sanitize_text_field( $_POST['entry_id'] );
				$delete = $this->model->delete_entry( $entry_id );
			} else {
				die( 'Please Don\'t try to hAcK us' );
			}
		}

		/**
		 * Get Entry Detail Action
		 */
		function get_entry_detail_action() {
			if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'tfb-admin-ajax-nonce' ) ) {
				//$this->library->print_array($_POST);die();
				$entry_id = sanitize_text_field( $_POST['entry_id'] );
				$entry_row = $this->model->get_entry_detail( $entry_id );
				$data['entry_row'] = $entry_row;
				$this->library->load_view( 'backend/entry-detail', $data );
				die();
			} else {
				die( 'Please Don\'t try to hAcK us' );
			}
		}

		/**
		 * Exports File to CSV
		 */
		function export_csv() {
			if ( isset( $_GET['_wpnonce'] ) && wp_verify_nonce( $_GET['_wpnonce'], 'tfb-csv-nonce' ) ) {
				if ( isset( $_GET['form_id'] ) ) {
					$form_id = intval(sanitize_text_field( $_GET['form_id'] ));
					$form_data = $this->model->get_form_data( $form_id );
					$entry_rows = $this->model->get_all_forms_entries( $form_id );
					$this->library->generate_csv( $form_data, $entry_rows );
				} else {
					wp_redirect( admin_url( 'admin.php?page=tfb-form-entries' ) );
					exit;
				}
			} else {
				die( 'Please Don\'t try to hAcK us!' );
			}
		}

		/**
		 * Form copy action
		 */
		function copy_form_ajax() {
			if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'tfb-admin-ajax-nonce' ) ) {
				$this->model->copy_form();
			} else {
				die( 'No script kiddies please' );
			}
		}
		
		/**
		 * Form Preview
		 */
		function preview_form(){
			if(isset($_GET['tfb_form_preview'],$_GET['tfb_form_id']) && is_user_logged_in()){
			 
           	 $current_user = wp_get_current_user();
                if (user_can( $current_user, 'administrator' )) {
                  // user is an admin
                  $this->library->load_view('frontend/preview-form');
				exit();
                }
				
			}
		}
		
		/**
		 * How to use page
		 
		function how_to_use(){
			$this->library->load_view('backend/how-to-use');
		}*/
		
		/**
		 * About page
		 
		function about(){
			$this->library->load_view('backend/about');
		}*/
        
        
	}

	/**
	 * Plugin initialization with object creation
	 */
	$tfb_obj = new TFB_Class();
	$library_obj = new TFB_Lib();

	//class termination
}
