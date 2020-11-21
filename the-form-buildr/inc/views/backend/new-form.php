<div class="wrap">
	<?php //self::load_view( 'backend/header' ); ?>
	<h3><?php _e( 'New Form', 'the-form-buildr' ); ?></h3>
	<div class="tfb-add-form-wrap">
		<div class="tfb-add-field-wrap">
			<label><?php _e( 'Title', 'the-form-buildr' ); ?></label>
			<div class="tfb-field"><input type="text" class="tfb-form-title" placeholder="<?php _e( 'Any form Name', 'the-form-buildr' ); ?>"/></div>
			<div class="tfb-field-note"><?php _e( 'Enter the form title here', 'the-form-buildr' ); ?></div>
		</div>
		<div class="tfb-add-field-wrap">
			<input type="button" class="tfb-form-add-btn button-primary" value="<?php _e( 'Add Form', 'the-form-buildr' ); ?>"/><span class="tfb-ajax-loader" style="display: none"></span><span class="tfb-msg" style="display:none;"><?php _e( 'Form Created !' ); ?></span>
			<div class="tfb-add-error tfb-error" style="display: none;"></div>
		</div>
	</div>
</div>

