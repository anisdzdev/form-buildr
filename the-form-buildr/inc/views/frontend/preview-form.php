<?php $form_id = intval(sanitize_text_field($_GET['tfb_form_id'])); ?>
<html>
	<head>
		<title><?php _e( 'Form Preview', 'the-form-buildr' ); ?></title>
		<?php wp_head(); ?>
		<style>
			body:before{display:none !important;}
			body:after{display:none !important;}
			body{background:#F1F1F1 !important;}
            .ufb-preview-subtitle a { color: #116CB9;}
		</style>

	</head>
	<body>
		<div class="tfb-preview-title-wrap">
			<div class="tfb-preview-title"><?php _e( 'Preview Mode', 'the-form-buildr' ); ?></div>
		</div>
		<div class="tfb-preview-note"><?php _e( 'This is just the basic preview and it may look different when used in frontend as per your theme\'s styles.', 'the-form-buildr' ); ?></div>
		<div class="tfb-form-preview-wrap">
        <span class="ufb-preview-subtitle"><a href="<?php echo admin_url('admin.php?page=tfb&action=edit-form&form_id='.esc_attr($form_id));?>"><?php _e('Edit Form','the-form-buildr');?></a></span>
			<?php
			
			echo do_shortcode( '[tfb form_id="' . $form_id . '"]' );
			?>
		</div>

	</body>

</html>

