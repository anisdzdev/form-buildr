<div class="wrap" style="margin: 10px 20px 0 2px;">
	<?php
	/**
	 * Always use self::load_view to load view inside a view
	 * Header view loaded
	 */
	//self::load_view( 'backend/header' );
	?>
	<div class="tfb-entry-filter-wrap">
		<h3><?php _e( 'Form Entries', 'the-form-buildr' ); ?></h3>

		<select class="tfb-entry-filter-select" data-admin-url="<?php echo admin_url(); ?>">
			<option value=""><?php _e( 'All Form entries', 'the-form-buildr' ); ?></option>
			<?php
			$form_id = isset( $_GET['form_id'] ) ? intval(sanitize_text_field($_GET['form_id'])) : '';
			if ( count( $form_rows ) > 0 ) {
				foreach ( $form_rows as $form_row ) {
					?>
					<option value="<?php echo $form_row['form_id'] ?>" <?php selected( $form_id, $form_row['form_id'] ); ?>><?php echo $form_row['form_title']; ?></option>
					<?php
				}
			}
			?>
		</select>
		<?php $csv_nonce = wp_create_nonce( 'tfb-csv-nonce' ); ?>
		<?php if ( $form_id != '' ) { ?>
			<!--<a href="<?php echo admin_url( 'admin-post.php?action=tfb_csv_export&form_id=' . $form_id . '&_wpnonce=' . $csv_nonce ); ?>"><input type="button" class="tfb-csv-export-trigger" value="<?php _e( 'Export to CSV', 'the-form-buildr' ); ?>" data-admin-url="<?php echo admin_url(); ?>" data-form-id="<?php echo $form_id; ?>"/></a>-->
			<?php
		}

		$current_page = isset( $_GET['page_num'] ) ? intval(sanitize_text_field($_GET['page_num'])) : 1;
		$upper_page_limit = $current_page + 2;
		$upper_page_limit = ($upper_page_limit > $total_pages) ? $total_pages : $upper_page_limit;
		$lower_page_limit = $current_page - 2;
		$lower_page_limit = ($lower_page_limit <= 0) ? 1 : $lower_page_limit;
		if ( $total_pages > 1 ) {
			?>
			<div class="tfb-entries-pagination-outerwrap">
				<div class="tfb-entries-pagination-wrap">
					<?php
					$previous_page = $current_page - 1;
					$next_page = $current_page + 1;
					if ( $previous_page > 0 ) {
						if ( $form_id != ''  ) {
							$page_link = admin_url( 'admin.php?page=tfb-form-entries&form_id=' . $form_id . '&page_num=' . $previous_page );
						} else {
							$page_link = admin_url( 'admin.php?page=tfb-form-entries&page_num=' . $previous_page );
						}
						?>
						<a class="tfb-entry-previous-page tfb-entry-page-link" href="<?php echo $page_link; ?>"><?php _e( 'Previous', 'the-form-buildr' ); ?></a>
						<?php
					}
					for ( $page = $lower_page_limit; $page <= $upper_page_limit; $page++ ) {
						if ( $form_id != ''  ) {
							$page_link = admin_url( 'admin.php?page=tfb-form-entries&form_id=' . $form_id . '&page_num=' . $page );
						} else {
							$page_link = admin_url( 'admin.php?page=tfb-form-entries&page_num=' . $page );
						}
						?>
						<a href="<?php echo $page_link; ?>" class="tfb-entry-page-link <?php echo ($current_page == $page) ? 'tfb-entry-current-page' : ''; ?>"><?php echo $page; ?></a>
						<?php
					}
					if ( $next_page <= $total_pages ) {
						if ( $form_id != '' ) {
							$page_link = admin_url( 'admin.php?page=tfb-form-entries&form_id=' . $form_id . '&page_num=' . $next_page );
						} else {
							$page_link = admin_url( 'admin.php?page=tfb-form-entries&page_num=' . $next_page );
						}
						?>
						<a class="tfb-entry-next-page tfb-entry-page-link" href="<?php echo $page_link; ?>"><?php _e( 'Next', 'the-form-buildr' ); ?></a>
						<?php
					}
					?>
				</div>
                <div class="tfb-clear"></div>
                
			</div><?php
		}
		?>
	</div>
    <!--<p class="description"><?php _e('Please choose a form from list to export to CSV','the-form-buildr');?></p>-->
	<table class="wp-list-table widefat fixed posts tfb-table">
		<thead>
			<tr>
				<th scope="col" id="title" class="manage-column column-shortcode">
					<?php _e( 'Form Title', 'the-form-buildr' ); ?>
				</th>
				<th scope="col" id="shortcode" class="manage-column column-shortcode">
					<?php _e( 'Entry Recieved', 'the-form-buildr' ); ?>
				</th>

			</tr>
		</thead>
		<tfoot>
			<tr>
				<th scope="col" id="title" class="manage-column column-shortcode">
					<?php _e( 'Form Title', 'the-form-buildr' ); ?>
				</th>
				<th scope="col" id="shortcode" class="manage-column column-shortcode">
					<?php _e( 'Entry Recieved', 'the-form-buildr' ); ?>
				</th>

			</tr>
		</tfoot>

		<tbody id="the-list" data-wp-lists="list:post">
			<?php
			if ( count( $form_entry_rows ) > 0 ) {
				$form_counter = 1;
				foreach ( $form_entry_rows as $form_entry_row ) {
					$delete_nonce = wp_create_nonce( 'tfb-delete-nonce' );
					$copy_nonce = wp_create_nonce( 'tfb-copy-nonce' );
					?>
					<tr class="<?php if ( $form_counter % 2 != 0 ) { ?>alternate<?php } ?>">
						<td class="title column-title">
							<strong>
								
								<a class="row-title" href="<?php echo admin_url('admin.php?page=tfb&action=edit-form&form_id='.$form_entry_row['form_id']);?>" title="Edit" data-entry-id="<?php echo $form_entry_row['entry_id']; ?>" target="_blank">
										<?php echo esc_attr( $form_entry_row['form_title'] ); ?>
									</a>
								
							</strong>
							<div class="row-actions tfb-relative">
								<span class="delete tfb-delete"><a href="javascript:void(0);">Delete</a> | </span>
								<span class="tfb-view-entry"><a href="javascript:void(0);" data-entry-id="<?php echo $form_entry_row['entry_id']; ?>"><?php _e( 'View Entry', 'the-form-buildr' ); ?></a></span>
								<div class="tfb-delete-confirmation" style="display:none">
									<p><?php _e( 'Are you sure you want to delete this entry?', 'the-form-buildr' ); ?></p>
									<input type="button" value="<?php _e( 'Yes', 'the-form-buildr' ); ?>"  data-entry-id="<?php echo $form_entry_row['entry_id']; ?>" class="tfb-delete-yes tfb-delete-entry-yes"/>
									<input type="button" value="<?php _e( 'Cancel', 'the-form-buildr' ); ?>" class="tfb-delete-cancel"/>
									<span class="tfb-ajax-loader" style="display:none;"></span>
								</div>
							</div>
						</td>
						<td class="shortcode column-shortcode"><?php echo date( apply_filters('tfb_time_format','h:i:s A M jS, Y '), strtotime( $form_entry_row['entry_created'] ) ); ?></td>
					</tr>
					<?php
					$form_counter++;
				}
			} else {
				?>
				<tr><td colspan="2"><div class="tfb-noresult"><?php _e( 'Entries not found for this form.', 'the-form-buildr' ); ?></div></td></tr>
				<?php
			}
			?>
		</tbody>
	</table>
</div>
<div class="tfb-entry-overlay" style="display:none"></div>
<div class="tfb-entry-wrap"  style="display:none"><span class="tfb-entry-ajax-loader"></span></div>

