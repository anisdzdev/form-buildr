<?php
global $library_obj;
$form_detail = maybe_unserialize( $form_row['form_detail'] );
$form_default_settings = $library_obj->get_default_detail();
$form_design = isset( $form_detail['form_design'] ) ? $form_detail['form_design'] : $form_default_settings['form_design'];
//$library_obj->print_array($form_default_settings);
?>
<div class="tfb-tab-content" id="tfb-display-tab" style="display:none">
	<div class="tfb-display-sub-section">
		<div class="tfb-field-wrap">
			<label><?php _e( 'Disable Plugin Styles', 'the-form-buildr' ); ?></label>
			<div class="tfb-field">
				<input type="checkbox" name="form_design[disable_plugin_style]" value='1' <?php echo (isset( $form_design['disable_plugin_style'] ) && $form_design['disable_plugin_style'] == 1) ? 'checked="checked"' : ''; ?>/>
				<div class="tfb-side-note"><?php _e( 'Check if you want to disable all the plugin styles in the frontend.', 'the-form-buildr' ); ?></div>
			</div>
		</div>
		<!--<div class="tfb-field-wrap">
			<label><?php _e( 'Hide Form Title', 'the-form-buildr' ); ?></label>
			<div class="tfb-field">
				<input type="checkbox" name="form_design[hide_form_title]" value='1' <?php echo (isset( $form_design['hide_form_title'] ) && $form_design['hide_form_title'] == 1) ? 'checked="checked"' : ''; ?>/>
				<div class="tfb-side-note"><?php _e( 'Check to hide the form title in frontend form.', 'the-form-buildr' ); ?></div>
			</div>
		</div>
		<div class="tfb-field-wrap">
			<label><?php _e( 'Form Width', 'the-form-buildr' ); ?></label>
			<div class="tfb-field">
				<input type="text" name="form_design[form_width]" placeholder="500px or 100%" value="<?php echo esc_attr( $form_design['form_width'] ); ?>"/>
			</div>
		</div>-->
		
		<div class="tfb-field-wrap">
			<label><?php _e( 'Form Template', 'the-form-buildr' ); ?></label>
			<div class="tfb-field">

				<select name="form_design[form_template]" class="tfb-form-template-dropdown">
					<option value="tfb-default-template" <?php selected( $form_design['form_template'], 'tfb-default-template' ); ?>><?php _e('Default Template','the-form-buildr');?></option>
					<?php for ( $i = 1; $i <= apply_filters('tfb_form_template_count',5); $i++ ) {
						?>
						<option value="tfb-template-<?php echo $i; ?>" <?php selected( $form_design['form_template'], 'tfb-template-' . $i ); ?>>Template <?php echo $i; ?></option>
						<?php
					}
					?>
				</select>
			</div>
		</div>
		<!--<div class="tfb-form-controls">
			<input type="button" class="button-primary tfb-save-form" value="<?php _e( 'Save Form', 'the-form-buildr' ); ?>"/>
			
			
		</div>-->
	</div>	
	<!--<div class="tfb-template-preview">
		<h3><?php _e( 'Template Preview', 'the-form-buildr' ); ?></h3>
		<img src="<?php echo TFB_IMG_DIR . '/previews/default-template.jpg' ?>" alt="Default Template" id="preview-tfb-default-template" <?php if ( $form_design['form_template'] != 'tfb-default-template' ) { ?>style="display:none"<?php } ?>/>
		<img src="<?php echo TFB_IMG_DIR . '/previews/template-1.jpg' ?>" alt="Template 1" id="preview-tfb-template-1" <?php if ( $form_design['form_template'] != 'tfb-template-1' ) { ?>style="display:none"<?php } ?>/>
		<img src="<?php echo TFB_IMG_DIR . '/previews/template-2.jpg' ?>" alt="Template 2" id="preview-tfb-template-2" <?php if ( $form_design['form_template'] != 'tfb-template-2' ) { ?>style="display:none"<?php } ?>/>
		<img src="<?php echo TFB_IMG_DIR . '/previews/template-3.jpg' ?>" alt="Template 3" id="preview-tfb-template-3" <?php if ( $form_design['form_template'] != 'tfb-template-3' ) { ?>style="display:none"<?php } ?>/>
		<img src="<?php echo TFB_IMG_DIR . '/previews/template-4.png' ?>" alt="Template 4" id="preview-tfb-template-4" <?php if ( $form_design['form_template'] != 'tfb-template-4' ) { ?>style="display:none"<?php } ?>/>
		<img src="<?php echo TFB_IMG_DIR . '/previews/template-5.jpg' ?>" alt="Template 5" id="preview-tfb-template-5" <?php if ( $form_design['form_template'] != 'tfb-template-5' ) { ?>style="display:none"<?php } ?>/>

	</div>-->
	<div class="tfb-clear"></div>
</div>

