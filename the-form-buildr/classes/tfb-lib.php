<?php

defined( 'ABSPATH' ) or die( 'Please Don\'t try to hAcK us' );
/**
 * TFB Library Class
 * Class with all the necessary functions
 */
if ( !class_exists( 'TFB_Lib' ) ) {

	class TFB_Lib {

		/**
		 * 
		 * @param string $view_file
		 * @returns void 
		 */
		public static function load_view( $view_file, $variable_array = array() ) {
			if ( !empty( $variable_array ) && is_array( $variable_array ) ) {
				/**
				 * Creating a variable for each key
				 */
				foreach ( $variable_array as $key => $val ) {
					$$key = $val;
				}
			}
			if ( file_exists( TFB_PATH . 'inc/views/' . $view_file . '.php' ) ) {
				include TFB_PATH . 'inc/views/' . $view_file . '.php';
			} else {
				echo TFB_PATH . 'inc/views/' . $view_file . '.php File Not found';
			}
		}

		/**
		 * 
		 * @param string $core_file
		 * @return void 
		 */
		public static function load_core( $core_file, $variable_array = array() ) {
			if ( !empty( $variable_array ) && is_array( $variable_array ) ) {
				/**
				 * Creating a variable for each key
				 */
				foreach ( $variable_array as $key => $val ) {
					$$key = $val;
				}
			}
			if ( file_exists( TFB_PATH . 'inc/cores/' . $core_file . '.php' ) ) {
				include TFB_PATH . 'inc/cores/' . $core_file . '.php';
			} else {
				echo TFB_PATH . 'inc/cores/' . $core_file . '.php File Not Found';
			}
		}

		/**
		 * 
		 * @param array $array
		 * @return void
		 */
		public static function print_array( $array ) {
			echo "<pre>";
			print_r( $array );
			echo "</pre>";
		}

		/**
		 * Returns Form default values
		 * @return array
		 */
		public static function get_default_detail() {
			$default_detail = array();
			$default_detail['field_data'] = array();
			$default_detail['form_design'] = array( 'plugin_style' => 1, 'form_width' => '', 'form_template' => 'tfb-default-template' );
			$default_detail['email_settings'] = array( 'email_reciever' => array( get_option( 'admin_email' ) ), 'from_name' => '', 'from_email' => '', 'from_subject' => '' );
			return $default_detail;
		}

		public static function do_form_process() {
			$form_data = array();
			foreach ( $_POST['form_data'] as $val ) {
				if ( strpos( $val['name'], '[]' ) !== false ) {
					$form_data_name = str_replace( '[]', '', $val['name'] );
					if ( !isset( $form_data[$form_data_name] ) ) {
						$form_data[$form_data_name] = array();
					}
					$form_data[$form_data_name][] = $val['value'];
				} else {

					$form_data[$val['name']] = $val['value'];
				}
			}
			$form_id = intval(sanitize_text_field( $form_data['form_id'] ));
			$form_temp_data = $form_data;
			$form_row = TFB_Model::get_form_detail( $form_id );
			$form_detail = maybe_unserialize( $form_row['form_detail'] );
			$field_data = $form_detail['field_data'];
			//self::print_array( $form_data );
			$form_response = array();
			$form_response['error_keys'] = array();
			$error_flag = 0;
			$email_reference_array = array();

			foreach ( $field_data as $key => $value ) {

				switch ( $field_data[$key]['field_type'] ) {
					case 'textfield':
						$val = isset( $form_data[$key] ) ? sanitize_text_field( $form_data[$key] ) : '';
						if ( isset( $field_data[$key]['required'] ) && $field_data[$key]['required'] == 1 && $val == '' ) {
							$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'This field is required', 'the-form-buildr' );
							$error_flag = 1;
							$form_response['error_keys'][$key] = $error_message;
						} else {
							if ( $field_data[$key]['max_chars'] != '' && strlen( $val ) > $field_data[$key]['max_chars'] ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Characters exceeded.Max characters allowed is :', 'the-form-buildr' ) . $field_data[$key]['max_chars'];
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							}
							if ( $field_data[$key]['min_chars'] != '' && strlen( $val ) < $field_data[$key]['min_chars'] ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Mininum characters required is :', 'the-form-buildr' ) . $field_data[$key]['min_chars'];
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							}
						}
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'textarea':
						$val = isset( $form_data[$key] ) ? sanitize_text_field( $form_data[$key] ) : '';
						if ( isset( $field_data[$key]['required'] ) && $field_data[$key]['required'] == 1 && $val == '' ) {
							$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'This field is required', 'the-form-buildr' );
							$error_flag = 1;
							$form_response['error_keys'][$key] = $error_message;
						} else {
							if ( $field_data[$key]['max_chars'] != '' && strlen( $val ) > $field_data[$key]['max_chars'] ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Characters exceeded.Max characters allowed is :', 'the-form-buildr' ) . $field_data[$key]['max_chars'];
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							}
							if ( $field_data[$key]['min_chars'] != '' && strlen( $val ) < $field_data[$key]['min_chars'] ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Mininum characters required is :', 'the-form-buildr' ) . $field_data[$key]['min_chars'];
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							}
						}
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'email':
						$val = isset( $form_data[$key] ) ? sanitize_text_field( $form_data[$key] ) : '';
						if ( isset( $field_data[$key]['required'] ) && $field_data[$key]['required'] == 1 && $val == '' ) {
							$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'This field is required', 'the-form-buildr' );
							$error_flag = 1;
							$form_response['error_keys'][$key] = $error_message;
						} else {
							if ( !is_email( $val ) && $val != '' ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Please enter the valid email address.', 'the-form-buildr' );
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							}
						}
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'checkbox':
						if ( isset( $form_data[$key] ) ) {
							$val = array_map( 'sanitize_text_field', $form_data[$key] );
							$val = implode( ',', $val );
						} else {
							$val = '';
						}

						if ( isset( $field_data[$key]['required'] ) && $field_data[$key]['required'] == 1 && $val == '' ) {
							$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'This field is required', 'the-form-buildr' );
							$error_flag = 1;
							$form_response['error_keys'][$key] = $error_message;
						}
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'radio':
						$val = isset( $form_data[$key] ) ? sanitize_text_field( $form_data[$key] ) : '';
						if ( isset( $field_data[$key]['required'] ) && $field_data[$key]['required'] == 1 && $val == '' ) {
							$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'This field is required', 'the-form-buildr' );
							$error_flag = 1;
							$form_response['error_keys'][$key] = $error_message;
						}
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'dropdown':
                    
						if ( isset( $form_data[$key] ) ) {

							if ( is_array( $form_data[$key] ) ) {
								$val = array_map( 'sanitize_text_field', $form_data[$key] );
								$val = implode( ',', $val );
							} else {
								$val = sanitize_text_field( $form_data[$key] );
							}
						} else {
							$val = '';
						}
                        if ( isset( $field_data[$key]['required'] ) && $field_data[$key]['required'] == 1 && $val == '' ) {
							$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'This field is required', 'the-form-buildr' );
							$error_flag = 1;
							$form_response['error_keys'][$key] = $error_message;
						}
						if ( $error_flag == 0 ) {
						  $val = (is_array($val))?implode(',',$val):$val;
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'password':
						$val = isset( $form_data[$key] ) ? $form_data[$key] : '';
						if ( isset( $field_data[$key]['required'] ) && $field_data[$key]['required'] == 1 && $val == '' ) {
							$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'This field is required', 'the-form-buildr' );
							$error_flag = 1;
							$form_response['error_keys'][$key] = $error_message;
						} else {
							if ( $field_data[$key]['max_chars'] != '' && strlen( $val ) > $field_data[$key]['max_chars'] ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Characters exceeded.Max characters allowed is :', 'the-form-buildr' ) . $field_data[$key]['max_chars'];
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							}
							if ( $field_data[$key]['min_chars'] != '' && strlen( $val ) < $field_data[$key]['min_chars'] ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Mininum characters required is :', 'the-form-buildr' ) . $field_data[$key]['min_chars'];
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							}
						}
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'number':
						$val = isset( $form_data[$key] ) ? sanitize_text_field( $form_data[$key] ) : '';
						if ( isset( $field_data[$key]['required'] ) && $field_data[$key]['required'] == 1 && $val == '' ) {
							$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'This field is required', 'the-form-buildr' );
							$error_flag = 1;
							$form_response['error_keys'][$key] = $error_message;
						} else {
							if ( $val!='' && !is_numeric( $val ) ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Only numbers allowed.', 'the-form-buildr' );
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							} else {
								if ( $field_data[$key]['max_value'] != '' && intval( $val ) > $field_data[$key]['max_value'] ) {
									$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Characters exceeded.Max characters allowed is :', 'the-form-buildr' ) . $field_data[$key]['max_value'];
									$error_flag = 1;
									$form_response['error_keys'][$key] = $error_message;
								}
								if ( $field_data[$key]['min_value'] != '' && intval( $val ) < $field_data[$key]['min_value'] ) {
									$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Mininum characters required is :', 'the-form-buildr' ) . $field_data[$key]['min_value'];
									$error_flag = 1;
									$form_response['error_keys'][$key] = $error_message;
								}
							}
						}
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'hidden':
						$val = isset( $form_data[$key] ) ? sanitize_text_field( $form_data[$key] ) : '';
						if ( $error_flag == 0 ) {
							$email_reference_array[$key] = array( 'label' => $field_data[$key]['field_label'], 'value' => $val );
						}
						break;
					case 'captcha':
						if ( $value['captcha_type'] == 'mathematical' ) {
							$val = isset( $form_data[$key] ) ? sanitize_text_field( $form_data[$key] ) : 0;
							if ( $val != 0 ) {
								$num1_key = $key . '_num_1';
								$num2_key = $key . '_num_2';
								$num1 = $form_data[$num1_key];
								$num2 = $form_data[$num2_key];
								$result = $num1 + $num2;
								if ( $result != $val ) {
									$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Please enter the correct sum.', 'the-form-buildr' );
									$error_flag = 1;
									$form_response['error_keys'][$key] = $error_message;
								}
							} else {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Please enter the correct sum.', 'the-form-buildr' );
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							}
						} else {
							$captcha = sanitize_text_field( $_POST['captchaResponse'] ); // get the captchaResponse parameter sent from our ajax
							if ( !$captcha ) {
								$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Please check the captcha.', 'the-form-buildr' );
								$error_flag = 1;
								$form_response['error_keys'][$key] = $error_message;
							} else {
								$secret_key = $value['secret_key'];
								$response_html = wp_remote_get( "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret_key . "&response=" . $captcha );
								//self::print_array($response_html);
								$response = json_decode( $response_html['body'] );
								if ( $response->success == false ) {
									$error_message = (isset( $field_data[$key]['error_message'] ) && $field_data[$key]['error_message'] != '') ? $field_data[$key]['error_message'] : __( 'Please check the captcha.', 'the-form-buildr' );
									$error_flag = 1;
									$form_response['error_keys'][$key] = $error_message;
								}
							}
						}
						break;
					default:
						break;
				}//switch close
			}//foreach form data close
			$form_response['error_flag'] = $error_flag;
			$form_submission_message = (isset( $form_detail['email_settings']['form_submission_message'] ) && $form_detail['email_settings']['form_submission_message'] != '') ? esc_attr( $form_detail['email_settings']['form_submission_message'] ) : __( 'Form submitted successfully.', 'the-form-buildr' );
			$form_error_message = ( isset( $form_detail['email_settings']['form_error_message'] ) && $form_detail['email_settings']['form_error_message'] != '') ? esc_attr( $form_detail['email_settings']['form_error_message'] ) : __( 'Please review what was submitted and click the button again.', 'the-form-buildr' );
			$form_response['response_message'] = ($error_flag == 1) ? $form_error_message : $form_submission_message;
			if ( $error_flag == 0 ) {
				self::do_email_process( $email_reference_array, $form_row );
				TFB_Model::save_to_db( $form_data );
			}
            /**
             * ufb_form_response
             * 
             * Filters form submission response
             * 
             * @since 1.2.8
             * 
             * @param array $form_response
             * @param array $form_data
             * @param array $form_row
             * 
             * */
			echo json_encode( apply_filters('ufb_form_response',$form_response,$form_data,$form_row) );
			die();
		}

		/**
		 * Do the email sending process after form validation
		 * return void
		 * @param array $form_data
		 */
		public static function do_email_process( $email_reference_array = array(), $form_row = array() ) {
			if ( !empty( $form_row ) && !empty( $email_reference_array ) ) {
				$form_title = $form_row['form_title'];
				$form_detail = maybe_unserialize( $form_row['form_detail'] );
				$field_data = $form_detail['field_data'];
				$fields_html = '';
				$count = 0;
				foreach ( $email_reference_array as $key => $val ) {
					$field_label = ($field_data[$key]['field_label'] != '') ? $field_data[$key]['field_label'] : __( 'Untitled', 'the-form-buildr' ) . ' ' . $field_data[$key]['field_type'];
					$count++;
					if ( $count % 2 == 0 ) {
						$fields_html .= '<tr style="background-color:#eee;"><td style="width:150px;border:1px solid #D54E21;" ><strong>' . $field_label . ':</strong></td> <td style="border:1px solid #D54E21;">' . $val['value'] . '</td><tr>';
					} else {
						$fields_html .= '<tr><td style="width:150px;border:1px solid #D54E21;" ><strong>' . $field_label . ':</strong></td> <td style="border:1px solid #D54E21;">' . $val['value'] . '</td><tr>';
					}
				}
				$form_html = '<html>
								<head><title></title></head>
						<body>
						      <table style="border:1px solid #D54E21" cellspacing="0" cellpadding="10" align="center" style="width:600px;">
							   <tr><td colspan="2" style="text-align:center;"><h2>' . $form_title . '</h2></td></tr>
							   ' .
						$fields_html
						. '</table></body>
						</html>';
				$site_url = str_replace( 'http://', '', site_url() );
				$site_url = str_replace( 'https://', '', $site_url );
				$email_subject = ($form_detail['email_settings']['from_subject'] != '') ? esc_attr( $form_detail['email_settings']['from_subject'] ) : __( 'New Form Submission', 'the-form-buildr' );
				$from_name = ($form_detail['email_settings']['from_name'] != '') ? esc_attr( $form_detail['email_settings']['from_name'] ) : __( 'No Name', 'the-form-buildr' );
				$from_email = ($form_detail['email_settings']['from_email'] != '') ? esc_attr( $form_detail['email_settings']['from_email'] ) : 'noreply@' . $site_url;
				$admin_email = get_option( 'admin_email' );
				$email_recievers = apply_filters('tfb_email_receivers',$form_detail['email_settings']['email_reciever'],$email_reference_array,$form_row);
				$headers = array();
                $headers[] = 'Content-Type: text/html; charset=UTF-8';
                $headers[] = 'From: ' . $from_name . ' <' . $from_email . '>' ;
				$headers = apply_filters('tfb_mail_header',$headers);
                
				foreach ( $email_recievers as $email_reciever ) {
					$to_email = ($email_reciever == '') ? $admin_email : esc_attr( $email_reciever );
					//$mail = mail( $to_email, $email_subject, $form_html, $headers );
                    $mail = wp_mail( $to_email,$email_subject, $form_html, $headers );
                    
                    /**
                     * Action to trigger after email
                     * */
                    do_action('tfb_email_send',$to_email,$email_subject,$form_html,$headers);
				}
			}
		}

		/**
		 * Function to generate CSV for form entries
		 * @param array $form_data
		 * @param array $entry_rows
		 */
		public static function generate_csv( $form_data, $entry_rows ) {
			//self::print_array( $form_data );
			//self::print_array( $entry_rows );
			$output = '';
			foreach ( $form_data['form_labels'] as $label ) {
				//$output .=$label . ',';
				$output .='"' . $label . '",';
			}
			$output .='"' . __( 'Entry Created On', 'the-form-buildr' ) . '",';
			$output .="\n";
			foreach ( $entry_rows as $entry_row ) {
				$entry_detail = maybe_unserialize( $entry_row['entry_detail'] );
				foreach ( $form_data['form_keys'] as $form_key ) {
					if ( isset( $entry_detail[$form_key] ) ) {
						if ( is_array( $entry_detail[$form_key] ) ) {
							$entry_value = array_map( 'esc_attr', $entry_detail[$form_key] );
							$entry_value = implode( ', ', $entry_value );
						} else {
							$entry_value = esc_attr( $entry_detail[$form_key] );
						}
					} else {
						$entry_value = '';
					}
					//$output .=$entry_value . ',';
					$output .='"' . $entry_value . '",';
				}
				$output .='"' . $entry_row['entry_created'] . '",';
				$output .="\n";
			}
			$filename = "form-entries.csv";
			header( 'Content-type: application/csv' );
			header( 'Content-Disposition: attachment; filename=' . $filename );

			echo $output;
			exit;
		}

	}

	//class termination
}//class exists check