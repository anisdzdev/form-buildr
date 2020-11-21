<div id="nf-pre-builder" style="background:#fff;position:fixed;top:0;right:0;bottom:0;left:0;z-index:9999999;"></div>
<div class="wrap" style="
    background: #fff;
    padding: 30px 40px;
    overflow: auto;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 10000000;
">
	
	<div class="tfb-form-controls tfb-text-align-right" style="width:10%; float:left;margin-top: -10px;">
		<!--<input type="button" class="button-primary tfb-save-form" value="<?php _e( 'Back', 'the-form-buildr' ); ?>" style="width:100%;"/>-->
		<a href="<?php echo admin_url('?page=tfb');?>" style="width:100%;background-color: #923030; /* Green */border: none;color: white;height: 50px;/* padding: 15px 32px; */text-align: center;text-decoration: none;display: inline-block;font-size: 16px;/* vertical-align: middle; */box-shadow: none;line-height: 50px;border-radius:3px;"><?php _e( 'Back', 'the-form-buildr' ); ?></a>
		<!--<div class="tfb-field-note"><?php _e( 'Don\'t forget to save before leaving!', 'the-form-buildr' ); ?></div>-->
	</div>
	<div class="tfb-form-controls tfb-text-align-right" style="width:10%;    margin-top: -10px;">
		<input type="button" class="button-primary tfb-save-form" value="<?php _e( 'Save Form', 'the-form-buildr' ); ?>" style="width:100%;background-color: #4CAF50; /* Green */border: none;color: white;height: 50px;/* padding: 15px 32px; */text-align: center;text-decoration: none;display: inline-block;font-size: 16px;box-shadow: none;"/>
		<!--<a href="<?php echo site_url('admin.php?tfb_form_preview=true&tfb_form_id='.$form_row['form_id']);?>" target="_blank"><input type="button" class="button-primary" value="<?php _e( 'Preview', 'the-form-buildr' ); ?>"/></a> -->
		<!--<div class="tfb-field-note"><?php _e( 'Don\'t forget to save before leaving!', 'the-form-buildr' ); ?></div>-->
	</div>
	<?php
	/**
	 * Always use self::load_view to load view inside a view
	 * Header view loaded
	 */
	$data['form_row'] = $form_row;
	self::load_view( 'backend/header' );
	
	?>
	
	<!--<div class="tfb-shortcode-display-wrap">Shortcode: <input type="text" onfocus="this.select();" readonly="readonly" value="[tfb form_id=&quot;<?php echo intval($_GET['form_id']);?>&quot;]" class="shortcode-in-list-table wp-ui-text code"></div>-->
	
	<div style="width: 100%; position: relative; display: inline-block; text-align: center;">
		<div class="nav-tab-wrapper" style="display: inline-block;list-style-type: none;align-items: center;align-self: center;align-content: center;">
				<a href="javascript:void(0);" class="nav-tab tfb-tab-trigger nav-tab-active" data-id="form-builder">Editor</a>
				<!--<a href="javascript:void(0);" class="nav-tab tfb-tab-trigger" data-id="display" >Visual Settings</a>-->
				<a href="javascript:void(0);" class="nav-tab tfb-tab-trigger" data-id="email">Settings</a>
				<a href="javascript:void(0);" class="nav-tab tfb-tab-trigger" data-id="addons">Addons</a>

		</div>


	</div>
	<?php if ( isset( $_SESSION['tfb_message'] ) ) { ?>
		<!--<div class="tfb-message">
			<p>
				<?php
				//echo $_SESSION['tfb_message'];
				//unset( $_SESSION['tfb_message'] );
				?>
			</p>
			<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>
		</div>-->
	<?php } ?>
	
	<div class="tfb-clear"></div>
	<div class="tfb-tab-content-wrapper" data-ps-id="cd6dbc8c-bcfd-08b6-eb22-799643ed2ced">
		<!--form builder reference fields-->
		<?php self::load_view( 'backend/boxes/form-fields-html' ); ?>
		<!--form builder reference fields-->

		<form class="tfb-form" method="post" action="<?php echo admin_url( 'admin-post.php' ); ?>" data-changed="false">
			<!--Form Builder Section -->
			<?php self::load_view( 'backend/boxes/form-builder-main', $data ); ?>
			<!--Form Builder Section -->

			<!--Display Settings Section -->
			<?php self::load_view( 'backend/boxes/display-settings', $data ); ?>
			<!--Display Settings Section -->

			<!--Email Settings Section -->
			<?php self::load_view( 'backend/boxes/email-settings', $data ); ?>
			<!--Email Settings Section -->
            
            <!--More WordPress Resources Section -->
			<?php self::load_view( 'backend/boxes/addons', $data ); ?>
			<!--More WordPress Resources Section -->
			
		</form>	
	</div>

	<!--<script type="text/javascript">
		var myVar;

		function myFunction() {
		  myVar = setTimeout(showPage, 3000);
		}

		function showPage() {
		  document.getElementById("loader").style.display = "none";
		  document.getElementById("myDiv").style.display = "block";
		}
	</script>-->
</div>

