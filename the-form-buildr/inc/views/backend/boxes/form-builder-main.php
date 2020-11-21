<?php
global $library_obj;
$form_detail = maybe_unserialize( $form_row['form_detail'] );
$form_detail = empty( $form_detail ) ? $library_obj->get_default_detail() : $form_detail;
$email_settings = $form_detail['email_settings'];
?>
<div class="tfb-tab-content" id="tfb-form-builder-tab" style="/*background-image: linear-gradient(0deg, #bddac3, white);*/">
	<!--<button onclick="bhay()" id="myBtn" title="New">+</button>-->
	
	<div>
		<a id="plus_btn" class="nf-master-control nf-open-drawer" title="Add new field" href="#" data-drawerid="addField" onclick="openNav()">
			<i class="fa fa-plus" data-drawerid="addField" aria-hidden="true"></i>
		</a>
	</div>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
		<div class="tfb-form-element-outerwrap" style="padding-top: 40px;">
			<div class="tfb-form-elements-wrap" style="width:80%;padding-left:10%;padding-bottom: 20px;">
			<div style="margin: auto;text-align: center;width: 100%;color: white;font-size: 20px;padding-bottom: 20px;">Form Elements</div>
				<div class="tfb-form-elements-inner-wrap tfb-relative">
					<!--<span class="tfb-form-element-title">Form Elements</span>-->
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Name Field', 'the-form-buildr' ); ?>" data-field-type="namefield">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Email Field', 'the-form-buildr' ); ?>" data-field-type="email">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Password Field', 'the-form-buildr' ); ?>" data-field-type="password">
					<!--<input type="button" class="button-primary tfb-form-element" title="Please set the form type to cart or donation and save" style="pointer-events: auto;" value="<?php _e( 'Credit Card Field', 'the-form-buildr' ); ?>" data-field-type="cc" <?php echo ( $email_settings['type'] == 'cart' || $email_settings['type'] == 'donation') ? '' : 'disabled'; ?>>-->
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Address Field', 'the-form-buildr' ); ?>" data-field-type="addressfield">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'City Field', 'the-form-buildr' ); ?>" data-field-type="cityfield">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Text Area', 'the-form-buildr' ); ?>" data-field-type="textarea">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Other Text Field', 'the-form-buildr' ); ?>" data-field-type="textfield">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Date Field', 'the-form-buildr' ); ?>" data-field-type="datefield">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Country Field', 'the-form-buildr' ); ?>" data-field-type="countryfield">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Other Dropdown', 'the-form-buildr' ); ?>" data-field-type="dropdown">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Radio Buttons', 'the-form-buildr' ); ?>" data-field-type="radio">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Checkbox', 'the-form-buildr' ); ?>" data-field-type="checkbox">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Submit Button', 'the-form-buildr' ); ?>" data-field-type="submit">
					<!--<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Hidden Field', 'the-form-buildr' ); ?>" data-field-type="hidden">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Number Field', 'the-form-buildr' ); ?>" data-field-type="number">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Captcha', 'the-form-buildr' ); ?>" data-field-type="captcha">-->

				</div>
			<div style="margin: auto;text-align: center;width: 100%;color: white;font-size: 20px;padding-bottom: 20px;margin-top: 30px;">Multi-form</div>
				<div class="tfb-form-elements-inner-wrap tfb-relative">
					<!--<span class="tfb-form-element-title">Form Elements</span>-->
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Separator', 'the-form-buildr' ); ?>" data-field-type="separator">
					<!--<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Hidden Field', 'the-form-buildr' ); ?>" data-field-type="hidden">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Number Field', 'the-form-buildr' ); ?>" data-field-type="number">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Captcha', 'the-form-buildr' ); ?>" data-field-type="captcha">-->

				</div>

			
			<div style="margin: auto;text-align: center;width: 100%;color: white;font-size: 20px;padding-bottom: 20px;margin-top: 30px;">Smart Fields</div>
				<div class="tfb-form-elements-inner-wrap tfb-relative">
					<input type="button" class="button-primary tfb-form-element" value="<?php _e( 'Smart Checkbox', 'the-form-buildr' ); ?>" data-field-type="smartcheckbox">

				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="action" value="tfb_form_action"/>
	<div class="tfb-form-wrap" style="background: white;">
		<div class="tfb-form-innner-wrap tfb-relative" style="background: white;">
			<!--<span class="tfb-form-form-name">Editing : <?php echo esc_attr( $form_row['form_title'] ); ?></span>-->
			<span class="tfb-form-title" style="display:none;"><?php echo esc_attr( $form_row['form_title'] ); ?></span>
			<div class="tfb-form-field-holder">
				<?php
				global $library_obj;
				//$library_obj->print_array( $form_row );
				$form_detail = maybe_unserialize( $form_row['form_detail'] );
				//$library_obj->print_array( $form_detail );
				if ( !empty( $form_detail ) ) {
					//$library_obj->print_array( $form_detail );
					foreach ( $form_detail['field_data'] as $key => $val ) {
//						$library_obj->print_array($val);
						switch ( $val['field_type'] ) {
							case 'textfield':
								?>
								<!--Text Field Reference Field --->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
									<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>-->
									<span class="tfb-drag-arrow" id="0"><i class="fa fa-arrows"></i></span>
									<!--tfb-form-field-wrap-->
									<!--<div class="tfb-form-field form-preview">
										<input class="previewer" type="text" disabled="disabled" value="<?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?>"/>
									</div>-->
									
									<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
										<div class="thefield">
											<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>" value="">
										</div>
									</div>
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav" style="">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										<!---->
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Your Name', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_type" value="<?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo (isset( $val['field_id'] ) && $val['field_id'] != '') ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="required" <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="tfb-field-placeholder-field" type="text" name="field_data[<?php echo $key; ?>][placeholder]" placeholder='<?php _e( 'Your Name here', 'the-form-buildr' ); ?>' data-field-name="<?php echo $key; ?>" data-field-type="placeholder" value="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message" value="<?php echo (isset( $val['error_message'] )) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][min_chars]" placeholder='20' data-field-name="<?php echo $key; ?>" data-field-type="min_chars" value="<?php echo (isset( $val['min_chars'] )) ? esc_attr( $val['min_chars'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][max_chars]" placeholder='50' data-field-name="<?php echo $key; ?>" data-field-type="max_chars" value="<?php echo (isset( $val['max_chars'] )) ? esc_attr( $val['max_chars'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Position', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<select  name="field_data[<?php echo $key; ?>][position]" data-field-name="<?php echo $key; ?>" data-field-type="position">
													<option value="full_width" <?php echo ( $val['position'] == 'full_width') ? 'selected' : ''; ?>>Full Width</option>
													<option value="left" <?php echo ( $val['position'] == 'left') ? 'selected' : ''; ?>>Left</option>
													<option value="right" <?php echo ( $val['position'] == 'right') ? 'selected' : ''; ?>>Right</option>
												</select>
											</div>
										</div>
										
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][pre_filled_value]"  data-field-name="<?php echo $key; ?>" data-field-type="pre_filled_value" value="<?php echo (isset( $val['pre_filled_value'] )) ? esc_attr( $val['pre_filled_value'] ) : ''; ?>"/>
											</div>
										</div>-->
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo (isset( $val['field_class'] )) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>	
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="textfield" data-field-name="<?php echo $key; ?>" data-field-type="field_type" value="<?php echo (isset( $val['field_type'] )) ? esc_attr( $val['field_type'] ) : ''; ?>"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Text Field Reference Field --->
								<?php
								break;
								
							case 'textarea':
								?>
								<!--Text Area Reference Field --->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
									<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>-->
									<span class="tfb-drag-arrow" id="0" ><i class="fa fa-arrows"></i></span>
									<!--tfb-form-field-wrap-->
									
									<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
										<div class="thefield">
											<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>" value="">
										</div>
									</div>
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav" style="">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Your Message', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_type" value="<?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo (isset( $val['field_id'] )) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="required" <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message" value="<?php echo (isset( $val['error_message'] )) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Textarea Rows', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][textarea_rows]" placeholder='5' data-field-name="<?php echo $key; ?>" data-field-type="textarea_rows"  value="<?php echo (isset( $val['textarea_rows'] )) ? esc_attr( $val['textarea_rows'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Textarea Columns', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][textarea_columns]" placeholder='20' data-field-name="<?php echo $key; ?>" data-field-type="textarea_columns" value="<?php echo (isset( $val['textarea_columns'] )) ? esc_attr( $val['textarea_columns'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][max_chars]" placeholder='50' data-field-name="<?php echo $key; ?>" data-field-type="max_chars" value="<?php echo (isset( $val['max_chars'] )) ? esc_attr( $val['max_chars'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][min_chars]" placeholder='20' data-field-name="<?php echo $key; ?>" data-field-type="min_chars" value="<?php echo (isset( $val['min_chars'] )) ? esc_attr( $val['min_chars'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][placeholder]" placeholder='<?php _e( 'Your message here', 'the-form-buildr' ); ?>' data-field-name="<?php echo $key; ?>" data-field-type="placeholder" value="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>"/>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][pre_filled_value]" data-field-name="<?php echo $key; ?>" data-field-type="pre_filled_value" value="<?php echo (isset( $val['pre_filled_value'] )) ? esc_attr( $val['pre_filled_value'] ) : ''; ?>"/>
											</div>
										</div>-->
										<!---->
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo (isset( $val['field_class'] )) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="textarea" data-field-name="<?php echo $key; ?>" data-field-type="field_type" value="<?php echo (isset( $val['field_type'] )) ? esc_attr( $val['field_type'] ) : ''; ?>"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Text area reference -->
								<?php
								break;
							case 'email':
								?>
								<!--Email Reference Field --->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
									<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>-->
									<span class="tfb-drag-arrow" id="0" style=""><i class="fa fa-arrows"></i></span>
									
									<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
										<div class="thefield">
											<input disabled="disabled" type="email" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>" value="">
										</div>
									</div>
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav" style="">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										<!---->
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Your Email', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo (isset( $val['field_id'] )) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="required" <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" class="tfb-field-placeholder-field" name="field_data[<?php echo $key; ?>][placeholder]" placeholder='<?php _e( 'Your Email here', 'the-form-buildr' ); ?>' data-field-name="<?php echo $key; ?>" data-field-type="placeholder" value="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message"  value="<?php echo (isset( $val['error_message'] )) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Position', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<select  name="field_data[<?php echo $key; ?>][position]" data-field-name="<?php echo $key; ?>" data-field-type="position">
													<option value="full_width" <?php echo ( $val['position'] == 'full_width') ? 'selected' : ''; ?>>Full Width</option>
													<option value="left" <?php echo ( $val['position'] == 'left') ? 'selected' : ''; ?>>Left</option>
													<option value="right" <?php echo ( $val['position'] == 'right') ? 'selected' : ''; ?>>Right</option>
												</select>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][pre_filled_value]" data-field-name="<?php echo $key; ?>" data-field-type="pre_filled_value" value="<?php echo (isset( $val['pre_filled_value'] )) ? esc_attr( $val['pre_filled_value'] ) : ''; ?>"/>
											</div>
										</div>-->
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo (isset( $val['field_class'] )) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="email" data-field-name="<?php echo $key; ?>" data-field-type="field_type" value="<?php echo (isset( $val['field_type'] )) ? esc_attr( $val['field_type'] ) : ''; ?>"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Email Field reference-->
								<?php
								break;
								
							/*case 'cc':
								?>
								<!--Credit Card Field --->

								<div class="tfb-each-form-field tfb-relative ui-sortable <?php echo ( $email_settings['type'] == 'cart' || $email_settings['type'] == 'donation') ? '' : 'disabled" title="You cannot use Credit Card if you don\' change the form type to cart or donation'; ?>">
									<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>-->
									<span class="tfb-drag-arrow" id="0" style=""><i class="fa fa-arrows"></i></span>
									
									<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
										<div class="thefield">
											<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>" value="">
										</div>
									</div>
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav" style="<?php echo ( $email_settings['type'] == 'cart' || $email_settings['type'] == 'donation') ? '' : 'display:none'; ?>">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										<!---->
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Credit Card', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo (isset( $val['field_id'] )) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="required" <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" class="tfb-field-placeholder-field" name="field_data[<?php echo $key; ?>][placeholder]" placeholder='<?php _e( 'Your Email here', 'the-form-buildr' ); ?>' data-field-name="<?php echo $key; ?>" data-field-type="placeholder" value="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message"  value="<?php echo (isset( $val['error_message'] )) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Position', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<select  name="field_data[<?php echo $key; ?>][position]" data-field-name="<?php echo $key; ?>" data-field-type="position">
													<option value="full_width" <?php echo ( $val['position'] == 'full_width') ? 'selected' : ''; ?>>Full Width</option>
													<option value="left" <?php echo ( $val['position'] == 'left') ? 'selected' : ''; ?>>Left</option>
													<option value="right" <?php echo ( $val['position'] == 'right') ? 'selected' : ''; ?>>Right</option>
												</select>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][pre_filled_value]" data-field-name="<?php echo $key; ?>" data-field-type="pre_filled_value" value="<?php echo (isset( $val['pre_filled_value'] )) ? esc_attr( $val['pre_filled_value'] ) : ''; ?>"/>
											</div>
										</div>-->
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo (isset( $val['field_class'] )) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="email" data-field-name="<?php echo $key; ?>" data-field-type="field_type" value="<?php echo (isset( $val['field_type'] )) ? esc_attr( $val['field_type'] ) : ''; ?>"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Credit Card reference-->
								<?php
								break;*/
							
							case 'dropdown':
								?>
								<!--Dropdown Reference Field -->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
									<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>
										<span class="tfb-drag-arrow" id="1" style="visibility: hidden;"><i class="fa fa-arrows"></i></span>
										
										<div class="tfb-field-settings-wrap" style="display: none;">
										<!---->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'A DropDown', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo (isset( $val['field_label'] )) ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo isset( $val['field_id'] ) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="field_type" <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message" value="<?php echo isset( $val['error_message'] ) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
											<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="<?php echo $key; ?>"/>
												<div class="tfb-option-value-wrap">
													<?php
													if ( isset( $val['option'], $val['value'] ) ) {
														$value_index = 0;
														foreach ( $val['option'] as $option ) {
															?>
															<div class="tfb-each-option">
																<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
																<input type="text" name="field_data[<?php echo $key; ?>][option][]"  placeholder="Option" data-field-name="<?php echo $key; ?>" value="<?php echo $option; ?>"/>
																<input type="text" name="field_data[<?php echo $key; ?>][value][]"  placeholder="Value" data-field-name="<?php echo $key; ?>"  value="<?php echo $val['value'][$value_index]; ?>"/>
																<span class="tfb-option-remover">X</span>
															</div>
															<?php
															$value_index++;
														}
													}
													?>
												</div>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Multiple', 'the-form-buildr' ); ?></label>
											<?php $multiple = isset($val['multiple'])?1:0;?>
											<div class="tfb-form-field">
												<input type="checkbox" name="field_data[<?php echo $key; ?>][multiple]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="multiple" <?php checked($multiple,true);?>/>
											</div>
										</div>
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo isset( $val['field_class'] ) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="dropdown" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Dropdown Reference Field --->
								<?php
								break;
								
							case 'countryfield':
								?>
								<!--Country Reference Field -->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
									<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>-->
										<span class="tfb-drag-arrow" id="0"><i class="fa fa-arrows"></i></span>
										
										<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
											<div class="tfb-form-field custom-select tfb-form-dropdown thefield">
												<div class="select-selected">Afghanistan</div>
											</div>
										</div>
										
										<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
										
										
										<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
											<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										<!---->
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Your Country', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo (isset( $val['field_label'] )) ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo isset( $val['field_id'] ) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="field_type" <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Include State', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][include_state]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="field_type" <?php echo (isset( $val['include_state'] ) && $val['include_state'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message" value="<?php echo isset( $val['error_message'] ) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
											<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="<?php echo $key; ?>"/>
												<div class="tfb-option-value-wrap">
													<?php
													if ( isset( $val['option'], $val['value'] ) ) {
														$value_index = 0;
														foreach ( $val['option'] as $option ) {
															?>
															<div class="tfb-each-option">
																<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
																<input type="text" name="field_data[<?php echo $key; ?>][option][]"  placeholder="Option" data-field-name="<?php echo $key; ?>" value="<?php echo $option; ?>"/>
																<input type="text" name="field_data[<?php echo $key; ?>][value][]"  placeholder="Value" data-field-name="<?php echo $key; ?>"  value="<?php echo $val['value'][$value_index]; ?>"/>
																<span class="tfb-option-remover">X</span>
															</div>
															<?php
															$value_index++;
														}
													}
													?>
												</div>
											</div>
										</div>-->
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo isset( $val['field_class'] ) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="countryfield" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Country Reference Field --->
								<?php
								break;
								
								
							case 'datefield':
								?>
								<!--Date Reference Field -->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
									<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>-->
										<span class="tfb-drag-arrow" id="0"><i class="fa fa-arrows"></i></span>
										
										<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
										<div class="thefield">
											<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>" value="">
										</div>
									</div>
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav" style="">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										<!---->
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Birthday', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo (isset( $val['field_label'] )) ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo isset( $val['field_id'] ) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="field_type" <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Include State', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="checkbox" name="field_data[<?php echo $key; ?>][include_state]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="field_type" <?php echo (isset( $val['include_state'] ) && $val['include_state'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>-->
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message" value="<?php echo isset( $val['error_message'] ) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
											<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="<?php echo $key; ?>"/>
												<div class="tfb-option-value-wrap">
													<?php
													if ( isset( $val['option'], $val['value'] ) ) {
														$value_index = 0;
														foreach ( $val['option'] as $option ) {
															?>
															<div class="tfb-each-option">
																<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
																<input type="text" name="field_data[<?php echo $key; ?>][option][]"  placeholder="Option" data-field-name="<?php echo $key; ?>" value="<?php echo $option; ?>"/>
																<input type="text" name="field_data[<?php echo $key; ?>][value][]"  placeholder="Value" data-field-name="<?php echo $key; ?>"  value="<?php echo $val['value'][$value_index]; ?>"/>
																<span class="tfb-option-remover">X</span>
															</div>
															<?php
															$value_index++;
														}
													}
													?>
												</div>
											</div>
										</div>-->
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo isset( $val['field_class'] ) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="datefield" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Date Reference Field --->
								<?php
								break;
							case 'radio':
								?>
								<!--Radio Button Reference Field --->

								
								<div class="tfb-each-form-field tfb-relative ui-sortable">
									<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>-->
										<span class="tfb-drag-arrow" id="0" ><i class="fa fa-arrows"></i></span>
										<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
										<div class="thefield">
											<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>" value="">
										</div>
									</div>
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav" style="">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										<!---->
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Your Gender', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo isset( $val['field_id'] ) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1"  <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message"  value="<?php echo (isset( $val['error_message'] ) && $val['error_message'] != '') ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
											<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="<?php echo $key; ?>"/>
												<div class="tfb-option-value-wrap">
													<?php
													if ( isset( $val['option'], $val['value'] ) ) {
														$value_index = 0;
														foreach ( $val['option'] as $option ) {
															?>
															<div class="tfb-each-option">
																<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
																<input type="text" name="field_data[<?php echo $key; ?>][option][]"  placeholder="Option" data-field-name="<?php echo $key; ?>" value="<?php echo $option; ?>"/>
																<input type="text" name="field_data[<?php echo $key; ?>][value][]"  placeholder="Value" data-field-name="<?php echo $key; ?>"  value="<?php echo $val['value'][$value_index]; ?>"/>
																<span class="tfb-option-remover">X</span>
															</div>
															<?php
															$value_index++;
														}
													}
													?>



												</div>
											</div>
										</div>
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class"  value="<?php echo isset( $val['field_class'] ) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="radio" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Radio Button Reference Field -->
								<?php
								break;
							case 'checkbox':
								?>
								<!--Checkbox Reference Field -->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
								<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>
									--><span class="tfb-drag-arrow" id="0"><i class="fa fa-arrows"></i></span>
									
									<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
										<div class="thefield">
											<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="<?php echo (isset( $val['placeholder'] )) ? esc_attr( $val['placeholder'] ) : ''; ?>" value="">
										</div>
									</div>
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav" style="">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										<!---->
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Could be anything', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="tfb_key" data-field-type="field_label"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="tfb_key" data-field-type="required" <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_label"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
											<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="tfb_key"/>
												<div class="tfb-option-value-wrap">
													<div class="tfb-each-option">
														<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
														<input type="text" name="field_data[<?php echo $key; ?>][option][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="field_label"/>
														<input type="text" name="field_data[<?php echo $key; ?>][value][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="field_label"/>
														<span class="tfb-option-remover">X</span>
													</div>
													<div class="tfb-each-option">
														<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
														<input type="text" name="field_data[<?php echo $key; ?>][option][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="field_label"/>
														<input type="text" name="field_data[<?php echo $key; ?>][value][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="field_label"/>
														<span class="tfb-option-remover">X</span>
													</div>
													<div class="tfb-each-option">
														<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
														<input type="text" name="field_data[<?php echo $key; ?>][option][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="field_label"/>
														<input type="text" name="field_data[<?php echo $key; ?>][value][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="field_label"/>
														<span class="tfb-option-remover">X</span>
													</div>
												</div>
											</div>
										</div>
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="tfb_key" data-field-type="field_label"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="checkbox" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Checkbox Reference Field -->
								<?php
								break;
								
							case 'smartcheckbox':
								?>
								<!--smartcheckbox Reference Field -->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
								<!--<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>
									--><span class="tfb-drag-arrow" id="0"><i class="fa fa-arrows"></i></span>
									
									<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
										<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
										<div class="thefield">
											<input disabled="disabled" type="checkbox" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="">
										</div>
									</div>
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav" style="">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										
										<div class="tfb-form-field-wrap" style="margin-top:60px">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Could be anything', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label" value="<?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="tfb_key" data-field-type="field_label"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Action (check documentation)', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][action]" placeholder="<?php _e( 'toggle{field_id}', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="action" value="<?php echo (isset( $val['action'] ) && $val['action'] != '') ? esc_attr( $val['action'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="smartcheckbox" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--smartcheckbox Reference Field -->
								<?php
								break;
							case 'password':
								?>
								<!--Password Reference Field -->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
								<span class="tfb-field-label-ref tfb-element-title"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : ''; ?></span>
									<span class="tfb-drag-arrow" id="1" style="visibility: hidden;"><i class="fa fa-arrows"></i></span>
									
									<div class="tfb-field-settings-wrap" style="display: none;">
										
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Your Password', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo isset( $val['field_label'] ) ? esc_attr( $val['field_label'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id"  value="<?php echo isset( $val['field_id'] ) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="required"  <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][max_chars]" placeholder='50' data-field-name="<?php echo $key; ?>" data-field-type="max_chars"  value="<?php echo isset( $val['max_chars'] ) ? esc_attr( $val['max_chars'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][min_chars]" placeholder='20' data-field-name="<?php echo $key; ?>" data-field-type="min_chars"   value="<?php echo isset( $val['min_chars'] ) ? esc_attr( $val['min_chars'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill number only', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message" value="<?php echo isset( $val['error_message'] ) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][placeholder]" placeholder='<?php _e( 'Your Password here', 'the-form-buildr' ); ?>' data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo isset( $val['placeholder'] ) ? esc_attr( $val['placeholder'] ) : ''; ?>"/>
											</div>
										</div>
										
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo isset( $val['field_class'] ) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="password" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Password Reference Field -->
								<?php
								break;
							case 'hidden':
								?>
								<!--Hidden Reference Field-->

								<div class="tfb-each-form-field tfb-submit-button-wrap tfb-relative">
									<span class="tfb-drag-arrow" id="1" style="visibility: hidden;"><i class="fa fa-arrows"></i></span>
									<div class="tfb-form-field-wrap" style="display: none;">
										<label class="tfb-field-label-ref"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : __( 'Untitled Hidden', 'the-form-buildr' ); ?></label>
										<div class="tfb-form-field">
											<input type="hidden" disabled="disabled"/>
										</div>
									</div><!--tfb-form-field-wrap-->
									<div class="tfb-field-controls">
										<a href="javascript:void(0)" class="tfb-field-settings-trigger button-primary"><?php _e( 'Open Settings', 'the-form-buildr' ); ?></a>
										<a href="javascript:void(0)" class="tfb-field-delete-trigger">Delete</a>
									</div>
									<div class="tfb-field-settings-wrap" style="display: none;">
										
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo isset( $val['field_label'] ) ? esc_attr( $val['field_label'] ) : '' ?>"/>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][pre_filled_value]" data-field-name="<?php echo $key; ?>" data-field-type="pre_filled_value" value="<?php echo isset( $val['pre_filled_value'] ) ? esc_attr( $val['pre_filled_value'] ) : '' ?>"/>
											</div>
										</div>-->
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id"  value="<?php echo isset( $val['field_id'] ) ? esc_attr( $val['field_id'] ) : '' ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class" value="<?php echo isset( $val['field_class'] ) ? esc_attr( $val['field_class'] ) : '' ?>"/>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="hidden" data-field-name="<?php echo $key; ?>" data-field-type="field_label"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Hidden Reference Field-->
								<?php
								break;
							case 'number':
								?>
								<!--Number Reference Field-->

								<div class="tfb-each-form-field tfb-relative ui-sortable">
									<span class="tfb-drag-arrow" id="1" style="visibility: hidden;"><i class="fa fa-arrows"></i></span>
									<div class="tfb-form-field-wrap" style="display: none;">
										<label class="tfb-field-label-ref"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : __( 'Untitled Number', 'the-form-buildr' ); ?></label>
										<div class="tfb-form-field">
											<input type="number" disabled="disabled"/>
										</div>
									</div><!--tfb-form-field-wrap-->
									<div class="tfb-field-controls">
										<a href="javascript:void(0)" class="tfb-field-settings-trigger button-primary"><?php _e( 'Open Settings', 'the-form-buildr' ); ?></a>
										<a href="javascript:void(0)" class="tfb-field-delete-trigger">Delete</a>
									</div>
									<div class="tfb-field-settings-wrap">
										
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Your Number', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="<?php echo $key; ?>" data-field-type="field_label" value="<?php echo esc_attr( $val['field_label'] ); ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input class="requirable" type="checkbox" name="field_data[<?php echo $key; ?>][required]" value="1" data-field-name="<?php echo $key; ?>" data-field-type="field_label"  <?php echo (isset( $val['required'] ) && $val['required'] == 1) ? 'checked="checked"' : ''; ?>/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Max Value', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][max_value]" placeholder='50' data-field-name="<?php echo $key; ?>" data-field-type="max_value" value="<?php echo isset( $val['max_value'] ) ? $val['max_value'] : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Min Value', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][min_value]" placeholder='20' data-field-name="<?php echo $key; ?>" data-field-type="min_value"  value="<?php echo isset( $val['min_value'] ) ? $val['min_value'] : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please fill number only', 'the-form-buildr' ); ?>" data-field-name="<?php echo $key; ?>" data-field-type="error_message"  value="<?php echo esc_attr( $val['error_message'] ); ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][placeholder]" placeholder='<?php _e( 'Your age here', 'the-form-buildr' ); ?>' data-field-name="<?php echo $key; ?>" data-field-type="field_label"   value="<?php echo esc_attr( $val['placeholder'] ); ?>"/>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][pre_filled_value]"  data-field-name="<?php echo $key; ?>" data-field-type="pre_filled_value" value="<?php echo (isset( $val['pre_filled_value'] )) ? esc_attr( $val['pre_filled_value'] ) : ''; ?>"/>
											</div>
										</div>-->
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_label"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_label"/>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="number" data-field-name="<?php echo $key; ?>" data-field-type="field_label"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Number Reference Field-->
								<?php
								break;
							case 'submit':
								?>
								<!--Submit Reference Field-->

								<div class="tfb-each-form-field tfb-submit-button-wrap tfb-relative">
									<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
									<div class="tfb-form-field-wrap form-preview"style="border: none;margin-left:30px;    width: 85%;">
										<div class="tfb-form-field">
											<input type="submit" disabled="disabled" class="button-primary tfb-submit-reference" value="<?php echo (isset( $val['button_label'] ) && $val['button_label'] != '') ? esc_attr( $val['button_label'] ) : 'Submit'; ?>"/>
										</div>
									</div><!--tfb-form-field-wrap-->
									<!--<div class="tfb-field-controls">
										<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary" data-confirm-message="<?php _e( 'If you delete this element then data related with this element will also be deleted. Are you sure you want to delete this element?', 'the-form-buildr' ); ?>">Delete</a>
									</div>-->
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			
			
									<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
										<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="<?php echo $key; ?>" data-field-type="field_id" value="<?php echo esc_attr( $val['field_id'] ); ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap"  style="margin-top:60px">
											<label><?php _e( 'Submit Button label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][button_label]" class="tfb-submit-button" value="<?php echo esc_attr( $val['button_label'] ); ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Submit Button style(css)', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][button_style]" value="<?php echo esc_attr( $val['button_style'] ); ?>"/>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="<?php echo $key; ?>" data-field-type="field_class"  value="<?php echo esc_attr( $val['field_class'] ); ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="submit" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Submit Reference Field-->
								<?php
								break;
								
							case 'separator':
								?>
								<!--Separator-->

								<div class="tfb-each-form-field tfb-relative ui-sortable" style="padding-top:0px;padding-bottom:0px">
									<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'Separator', 'the-form-buildr' ); ?></span>
									<span class="tfb-drag-arrow" style="top:-14px"><i class="fa fa-arrows"></i></span>
									<!--tfb-form-field-wrap-->
									<!--<div class="tfb-field-controls">
										<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary" data-confirm-message="<?php _e( 'If you delete this element then data related with this element will also be deleted. Are you sure you want to delete this element?', 'the-form-buildr' ); ?>">Delete</a>
									</div>-->
									<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
									
									
									<div id="" class="tfb-field-settings-wrap" style="display:none;">
										
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="separator" data-field-name="<?php echo $key; ?>" data-field-type="field_type"/>
									</div>
								</div><!--tfb-each-form-field-->

								<!--Separator-->
								<?php
								break;
							case 'captcha':
								?>

								<div class="tfb-each-form-field tfb-submit-button-wrap tfb-relative">
									<span class="tfb-drag-arrow" id="1" style="visibility: hidden;"><i class="fa fa-arrows"></i></span>
									<div class="tfb-form-field-wrap" style="display: none;">
										<label class="tfb-field-label-ref"><?php echo (isset( $val['field_label'] ) && $val['field_label'] != '') ? esc_attr( $val['field_label'] ) : __( 'Untitled Captcha', 'the-form-buildr' ); ?></label>
										<div class="tfb-form-field">

										</div>
									</div><!--tfb-form-field-wrap-->
									<div class="tfb-field-controls">
										<a href="javascript:void(0)" class="tfb-field-settings-trigger button-primary"><?php _e( 'Open Settings', 'the-form-buildr' ); ?></a>
										<a href="javascript:void(0)" class="tfb-field-delete-trigger">Delete</a>
									</div>
									<div class="tfb-field-settings-wrap" style="display:none;">
										
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_label]" placeholder="<?php _e( 'Human Check', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label" value="<?php echo esc_attr( $val['field_label'] ); ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Captcha Type', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<select name="field_data[<?php echo $key; ?>][captcha_type]" class="tfb-captcha-type-dropdown">
													<option value="mathematical" <?php selected( $val['captcha_type'], 'mathematical' ); ?>><?php _e( 'Mathematical Captcha', 'the-form-buildr' ); ?></option>
													<option value="google" <?php selected( $val['captcha_type'], 'google' ); ?>><?php _e( 'Google reCaptcha', 'the-form-buildr' ); ?></option>
												</select>
											</div>
										</div>
										<div class="tfb-captcha-field-ref" <?php if ( $val['captcha_type'] == 'mathematical' ) { ?>style="display:none;"<?php } ?>>
											<div class="tfb-form-field-wrap">
												<label><?php _e( 'Site Key', 'the-form-buildr' ) ?></label>
												<div class="tfb-form-field">
													<input type="text" name="field_data[<?php echo $key; ?>][site_key]" value="<?php echo isset( $val['site_key'] ) ? esc_attr( $val['site_key'] ) : ''; ?>"/>
												</div>
											</div>
											<div class="tfb-form-field-wrap">
												<label><?php _e( 'Secret Key', 'the-form-buildr' ) ?></label>
												<div class="tfb-form-field">
													<input type="text" name="field_data[<?php echo $key; ?>][secret_key]" value="<?php echo isset( $val['secret_key'] ) ? esc_attr( $val['secret_key'] ) : ''; ?>"/>
												</div>
											</div>
											<div class="tfb-field-extra-note">
												<?php
												_e( 'Google Captcha will only show up in form filled the valid google captcha keys.Please visit <a href="https://www.google.com/recaptcha/admin" target="_blank">here</a> to get your site and secret key.', 'the-form-buildr' );
												?>

											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][error_message]" placeholder="<?php _e( 'Please verify you are human.', 'the-form-buildr' ); ?>" value="<?php echo isset( $val['error_message'] ) ? esc_attr( $val['error_message'] ) : ''; ?>"/>
											</div>
										</div>
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][placeholder]" placeholder='<?php _e( 'Enter Sum', 'the-form-buildr' ); ?>' value="<?php echo isset( $val['placeholder'] ) ? esc_attr( $val['placeholder'] ) : ''; ?>"/>
												<div class="tfb-field-note"><?php _e( 'Note: Placeholder is only for the mathematical type captcha.' ); ?></div>
											</div>
										</div>
										<!--<div class="tfb-form-field-wrap">
											<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_id]" data-field-name="tfb_key" data-field-type="field_label"  value="<?php echo isset( $val['field_id'] ) ? esc_attr( $val['field_id'] ) : ''; ?>"/>
											</div>
										</div>-->
										<div class="tfb-form-field-wrap">
											<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
											<div class="tfb-form-field">
												<input type="text" name="field_data[<?php echo $key; ?>][field_class]" data-field-name="tfb_key" data-field-type="field_class"  value="<?php echo isset( $val['field_class'] ) ? esc_attr( $val['field_class'] ) : ''; ?>"/>
											</div>
										</div>
										<input type="hidden" name="field_data[<?php echo $key; ?>][field_type]" value="captcha" data-field-name="tfb_key" data-field-type="field_label"/>
									</div>
								</div><!--tfb-each-form-field-->

								<?php
								break;
							default:
								break;
						}
					}
				}
				?>
			</div>
			<input type="hidden" name="form_title" value="<?php echo esc_attr( $form_row['form_title'] ); ?>" class="tfb-form-title-field"/>
			<input type="hidden" name="form_id" value="<?php echo esc_attr( $form_row['form_id'] ); ?>" class="tfb-form-id"/>
			<input type="hidden" name="form_key_count" value="<?php echo (isset( $form_detail['form_key_count'] ) && $form_detail['form_key_count'] != '') ? $form_detail['form_key_count'] : 0; ?>" class="tfb-form-key-count"/>
		</div>
	</div>
	<?php wp_nonce_field( 'tfb-form-nonce', 'tfb_form_nonce_field' ); ?>

	<div class="tfb-clear"></div>
	<!--<div class="tfb-form-controls tfb-text-align-right" style="width:10%;">
		<input type="button" class="button-primary tfb-save-form" value="<?php _e( 'Save Form', 'the-form-buildr' ); ?>" style="width:100%"/>
		<!--<a href="<?php echo site_url( '?tfb_form_preview=true&tfb_form_id=' . $form_row['form_id'] ); ?>" target="_blank"><input type="button" class="button-primary" value="<?php _e( 'Preview', 'the-form-buildr' ); ?>"/></a>
		
	</div>-->
	<div class="tfb-clear"></div>
</div>

