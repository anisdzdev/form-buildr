<?php
defined( 'ABSPATH' ) or die( 'Please Don\'t try to hAcK us' );
?>
<div class="wrap" style="margin: 10px 20px 0 2px;">
	<?php
	
	//self::load_view( 'backend/header' );
	?>


	<div class="tfb-form-list">
		<h2><?php _e( 'My Forms', 'the-form-buildr' ); ?><a href="javascript:void(0);" class="tfb-add-form-trigger add-new-h2"><?php _e( 'New Form' ); ?></a></h2>

		<table class="wp-list-table widefat fixed posts tfb-table">
			<thead>
				<tr>
					<th scope="col" id="title" class="manage-column column-shortcode">
						<?php _e( 'Form Title', 'the-form-buildr' ); ?>
					</th>
					<th scope="col" id="shortcode" class="manage-column column-shortcode">
						<?php _e( 'Shortcode', 'the-form-buildr' ); ?>
					</th>
					<th scope="col" id="last-modified" class="manage-column column-shortcode">
						<?php _e( 'Last Edited', 'the-form-buildr' ); ?>
					</th>
					<!--<th scope="col" id="status" class="manage-column column-shortcode">
						<?php _e( 'Status', 'the-form-buildr' ); ?>
					</th>-->
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th scope="col" id="title" class="manage-column column-shortcode" >
						<span><?php _e( 'Form Title', 'the-form-buildr' ); ?>
					</th>
					<th scope="col" id="shortcode" class="manage-column column-shortcode">
						<?php _e( 'Shortcode', 'the-form-buildr' ); ?>
					</th>
					<th scope="col" id="last-modified" class="manage-column column-shortcode">
						<?php _e( 'Last Modified', 'the-form-buildr' ); ?>
					</th>
					<!--<th scope="col" id="status" class="manage-column column-shortcode">
						<?php _e( 'Status', 'the-form-buildr' ); ?>
					</th>-->
				</tr>
			</tfoot>
			<tbody id="the-list" data-wp-lists="list:post">
				<?php
				if ( count( $forms ) > 0 ) {
					$form_counter = 1;
					foreach ( $forms as $form ) {
						$delete_nonce = wp_create_nonce( 'tfb-delete-nonce' );
						$copy_nonce = wp_create_nonce( 'tfb-copy-nonce' );
						?>
						<tr class="<?php if ( $form_counter % 2 != 0 ) { ?>alternate<?php } ?>">
							<td class="title column-title">
								<strong>
									<a class="row-title" href="<?php echo admin_url('admin.php?page=tfb&action=edit-form&form_id=' . $form->form_id); ?>" title="Edit">
										<?php echo esc_attr( $form->form_title ); ?>
									</a>
								</strong>
								<div class="row-actions tfb-relative">
									<span class="edit"><a name="edit" href="<?php echo admin_url() . 'admin.php?page=tfb&action=edit-form&form_id=' . $form->form_id; ?>">Edit</a> | </span>
									<!--<span class="tfb-copy" data-form-id="<?php echo $form->form_id; ?>"><a href="javascript:void(0);">Copy</a> | </span>-->
									<span class="delete tfb-delete"><a href="javascript:void(0);">Delete</a> | </span>
									<!--<span class="tfb-preview"><a href="<?php echo site_url( '?tfb_form_preview=true&tfb_form_id=' . $form->form_id ); ?>" target="_blank"><?php _e( 'Preview', 'the-form-buildr' ); ?></a> | </span>-->
									<span class="tfb-entries"><a href="<?php echo admin_url( 'admin.php?page=tfb-form-entries&form_id=' . $form->form_id ); ?>"><?php _e( 'Entries', 'the-form-buildr' ); ?></a></span>
									<div class="tfb-delete-confirmation" style="display:none">
										<p><?php _e( 'Do you confirm you want to delete the form?', 'the-form-buildr' ); ?></p>
										<input type="button" value="<?php _e( 'Yes', 'the-form-buildr' ); ?>"  data-form-id="<?php echo $form->form_id; ?>" class="tfb-delete-yes tfb-form-delete-yes"/>
										<input type="button" value="<?php _e( 'Cancel', 'the-form-buildr' ); ?>"  data-form-id="<?php echo $form->form_id; ?>" class="tfb-delete-cancel tfb-form-cancel"/>
										<span class="tfb-ajax-loader" style="display:none;"></span>
									</div>
								</div>
							</td>
							<td class="shortcode column-shortcode"><input type="text" onFocus="this.select();" readonly="readonly" value="[tfb form_id=&quot;<?php echo $form->form_id; ?>&quot;]" class="shortcode-in-list-table wp-ui-text code"></td> <!-- wp-ui-text-highlight -->
							<td class="shortcode column-shortcode"><?php echo date( apply_filters('tfb_time_format','h:i:s A M jS, Y '), strtotime( $form->form_modified ) ); ?></td>
							<!--<td class="shortcode column-shortcode tfb-relative">
								<div class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-<?php echo $form->form_id; ?>" <?php checked( $form->form_status, true ); ?> style="display:none;">
									<label class="onoffswitch-label" for="myonoffswitch-<?php echo $form->form_id; ?>"  data-form-id="<?php echo $form->form_id; ?>">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>

								</div>
								<span class="tfb-ajax-loader tfb-status-loader" style="display:none;"></span>
								<span class="tfb-status-message" style="display:none;"></span>
							</td>-->

						</tr>
						<?php
						$form_counter++;
					}
				} else {
					?>
					<tr><td colspan="4"><div class="tfb-noresult"><?php _e( 'No Form added yet', 'the-form-buildr' ); ?></div></td></tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<div class="tfb-popup-wrap" style="display: none">
	<div class="tfb-overlay"></div>
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
<div class="tfb-copy-popup-wrap" style="display: none">
	<div class="tfb-overlay"></div>
	<div class="tfb-add-form-wrap">
		<div class="tfb-add-field-wrap">
			<label><?php _e( 'Copy Form Title', 'the-form-buildr' ); ?></label>
			<div class="tfb-field"><input type="text" class="tfb-form-title" placeholder="<?php _e( 'Contact Form', 'the-form-buildr' ); ?>"/></div>
			<div class="tfb-field-note"><?php _e( 'Please enter the form title', 'the-form-buildr' ); ?></div>
		</div>
		<div class="tfb-add-field-wrap">
			<div class="tfb-field">
				<select class="tfb-copy-form-id"><?php foreach ( $forms as $form ) {
					?>
						<option value="<?php echo $form->form_id; ?>"><?php echo esc_attr( $form->form_title ); ?></option>
						<?php
					}
					?></select>
			</div>
			<div class="tfb-field-note"><?php _e( 'Please choose a form to copy.', 'the-form-buildr' ); ?></div>
		</div>
		<div class="tfb-add-field-wrap">
			<input type="button" class="tfb-form-copy-btn button-primary" value="<?php _e( 'Copy Form', 'the-form-buildr' ); ?>"/><span class="tfb-ajax-loader" style="display: none"></span><span class="tfb-msg" style="display:none;"><?php _e( 'Form Copied.Redirecting...' ); ?></span>
			<div class="tfb-add-error tfb-error" style="display: none;"></div>
		</div>
	</div>
</div>