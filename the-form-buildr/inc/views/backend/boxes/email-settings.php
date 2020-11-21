<?php
global $library_obj;
$form_detail = maybe_unserialize( $form_row['form_detail'] );
$form_detail = empty( $form_detail ) ? $library_obj->get_default_detail() : $form_detail;
$email_settings = $form_detail['email_settings'];
?>
<div class="tfb-tab-content" id="tfb-email-tab" style="display: none;">
	<!--<div class="tfb-email-wrap">
		<label><?php _e( 'Email Reciever', 'the-form-buildr' ); ?></label>
		<div class="tfb-emails">
			<input type="button" value="<?php _e( 'Add email', 'the-form-buildr' ); ?>" class="button-primary tfb-email-adder"/>
			<?php
			$count = 0;
			foreach ( $email_settings['email_reciever'] as $email ) {
				$count++;
				?>
				<div class="tfb-email-fields">
					<input type="text" name="email_settings[email_reciever][]" placeholder="test@abc.com" value="<?php echo esc_attr( $email ); ?>"/>
					<?php if ( $count != 1 ) {
						?>
						<span class="tfb-email-remove">X</span>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>
		</div>
	</div>-->
	<div class="tfb-field-wrap">
		<label class="tfb-field"><?php _e( 'Form Title', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="form_title" value="<?php echo esc_attr( $form_row['form_title'] ); ?>"/>
		</div>
	</div>
	<div class="tfb-field-wrap">
		<label><?php _e( 'Form Type', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<select class="selectortype" style="width:282px" name="email_settings[type]" data-field-type="type">
				<option value="contact" <?php echo ( $email_settings['type'] == 'contact') ? 'option:selected selected' : ''; ?>>Contact</option>
				<option value="cart" <?php echo ( $email_settings['type'] == 'cart') ? 'option:selected selected' : ''; ?>>Cart</option>
				<option value="donation" <?php echo ( $email_settings['type'] == 'donation') ? 'option:selected selected' : ''; ?>>Donation</option>
			</select>
		</div>
	</div>
	<div class="tfb-field-wrap">
		<label><?php _e( 'Form Design', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<select class="selector" style="width:282px" name="email_settings[position]" data-field-type="position">
				<option value="normal" <?php echo ( $email_settings['position'] == 'normal') ? 'option:selected selected' : ''; ?>>Normal</option>
				<option value="popup" <?php echo ( $email_settings['position'] == 'popup') ? 'option:selected selected' : ''; ?>>Popup</option>
			</select>
		</div>
	</div>
	<div class="tfb-field-wrap button-txt" style="<?php echo ( $email_settings['position'] == 'normal') ? 'display:none;' : ''; ?>">
		<label class="tfb-field"><?php _e( 'Button Text', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="email_settings[btn_txt]" placeholder='<?php _e( 'Fill Form', 'the-form-buildr' ); ?>' value="<?php echo esc_attr( $email_settings['btn_txt'] ); ?>"/>
		</div>
	</div>
	<div class="tfb-field-wrap button-style" style="<?php echo ( $email_settings['position'] == 'normal') ? 'display:none;' : ''; ?>">
		<label class="tfb-field"><?php _e( 'Button Style', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="email_settings[btn_style]" placeholder='<?php _e( 'margin:0px;', 'the-form-buildr' ); ?>' value="<?php echo esc_attr( $email_settings['btn_style'] ); ?>"/>
		</div>
	</div>
	
	<div class="tfb-field-wrap">
		<label class="tfb-field"><?php _e( 'Email Reciever', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<?php
			$count = 0;
			foreach ( $email_settings['email_reciever'] as $email ) {
				$count++;
				?>
				<div class="tfb-email-fields">
					<input type="text" name="email_settings[email_reciever][]" placeholder="test@domain.com" value="<?php echo esc_attr( $email ); ?>"/>
					<?php if ( $count != 1 ) {
						?>
						<span class="tfb-email-remove">X</span>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>		</div>
	</div>
	<div class="tfb-field-wrap">
		<label class="tfb-field"><?php _e( 'From Email', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="email_settings[from_email]" placeholder='test@domain.com' value="<?php echo esc_attr( $email_settings['from_email'] ); ?>"/>
		</div>
	</div>
	<div class="tfb-field-wrap">
		<label class="tfb-field"><?php _e( 'From Name', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="email_settings[from_name]" placeholder='John Corner' value="<?php echo esc_attr( $email_settings['from_name'] ); ?>"/>
		</div>
	</div>
	<div class="tfb-field-wrap">
		<label class="tfb-field"><?php _e( 'Email Subject', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="email_settings[from_subject]" placeholder='<?php _e( 'New Form Submission', 'the-form-buildr' ); ?>' value="<?php echo esc_attr( $email_settings['from_subject'] ); ?>"/>
		</div>
	</div>
	<div class="tfb-field-wrap">
		<label><?php _e( 'Form Submission Message', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="email_settings[form_submission_message]" placeholder="<?php _e( 'Form submitted successfully.', 'the-form-buildr' ); ?>"><?php echo isset( $email_settings['form_submission_message'] ) ? esc_attr( $email_settings['form_submission_message'] ) : ''; ?></textarea>
		</div>
	</div>
	<div class="tfb-field-wrap">
		<label><?php _e( 'Form Error Message', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="email_settings[form_error_message]" placeholder="<?php _e( 'Validation errors occurred in the form.', 'the-form-buildr' ); ?>" ><?php echo isset( $email_settings['form_error_message'] ) ? esc_attr( $email_settings['form_error_message'] ) : ''; ?></textarea>
		</div>
	</div>
	<!--<div class="tfb-field-wrap">
		<label><?php _e( 'Hide Form Title', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="checkbox" name="email_settings[hide_form_title]" value='1' <?php echo (isset( $email_settings['hide_form_title'] ) && $email_settings['hide_form_title'] == 1) ? 'checked="checked"' : ''; ?>/>
			<div class="tfb-side-note"><?php _e( 'Check to hide the form title in frontend form.', 'the-form-buildr' ); ?></div>
		</div>
	</div>-->
	<div class="tfb-field-wrap">
		<label><?php _e( 'Form Width', 'the-form-buildr' ); ?></label>
		<div class="tfb-field">
			<input type="text" name="email_settings[form_width]" placeholder="500px or 100%" value="<?php echo esc_attr( $email_settings['form_width'] ); ?>"/>
		</div>
	</div>
	<!--<div class="tfb-form-controls">
		<input type="button" class="button-primary tfb-save-form" value="<?php _e( 'Save Form', 'the-form-buildr' ); ?>"/>
		
	</div>-->
    <div class="tfb-clear"></div>
</div>

