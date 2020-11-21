<div class="tfb-entry-detail-wrap">
	<div class="tfb-relative">
		<span class="tfb-entry-detail-close">X</span>
		<?php
		if ( $entry_row != NULL && !empty( $entry_row ) ) {
			?>
			<h3><?php echo esc_attr( $entry_row['form_title'] ); ?></h3>
			<div class="tfb-entry-inner-wrap">
				<?php
				$form_detail = maybe_unserialize( $entry_row['form_detail'] );
				 if ( !empty( $form_detail ) ) {
					$field_data = $form_detail['field_data'];
					$entry_detail = maybe_unserialize( $entry_row['entry_detail'] ); 
					$except_field_types = array( 'submit', 'captcha' );
					$field_count = 0;
					?>
					<div class="tfb-entry-field-wrap <?php echo ($field_count % 2 == 0) ? 'tfb-entry-even' : ''; ?>">
						<label><?php _e( 'Entry Posted Date', 'the-form-buildr' ); ?></label>
						<div class="tfb-entry-value"><?php echo date( apply_filters('tfb_time_format','h:i:s A M jS, Y '), strtotime( $entry_row['entry_created'] ) ); ?></div>
					</div>
					<?php
					foreach ( $field_data as $field_key => $field_settings ) {
						$field_count++;
						if ( !in_array( $field_settings['field_type'], $except_field_types ) ) {
							$field_label = ($field_settings['field_label'] != '') ? esc_attr( $field_settings['field_label'] ) : __( 'Untitled', 'the-form-buildr' ) . ' ' . $field_settings['field_type'];
							if ( isset( $entry_detail[$field_key] ) ) {
								if ( is_array( $entry_detail[$field_key] ) ) {
									$entry_detail[$field_key] = array_map( 'esc_attr', $entry_detail[$field_key] );
									$entry_value = implode( ', ', $entry_detail[$field_key] );
								} else {
									$entry_value = ($entry_detail[$field_key] != '') ? esc_attr( $entry_detail[$field_key] ) : '';
								}
							}else {
								$entry_value = '';
							}
							?>
							<div class="tfb-entry-field-wrap <?php echo ($field_count % 2 == 0) ? 'tfb-entry-even' : ''; ?>">
								<label><?php echo $field_label; ?></label>
								<div class="tfb-entry-value"><?php echo $entry_value; ?></div>
							</div>
							<?php
							
						}else if ($field_key === 'tfb_field_17'){
						    ?>
							<div class="tfb-entry-field-wrap <?php echo ($field_count % 2 == 0) ? 'tfb-entry-even' : ''; ?>">
								<label><?php echo __( 'State', 'the-form-buildr' ); ?></label>
								<div class="tfb-entry-value"><?php echo $entry_detail[$field_key]; ?></div>
							</div>
							<?php
						    
						}
					}
					foreach($entry_detail as $entry_key => $field_settings){
					    if( $entry_key === 'state' ){   
					    ?>
					        <div class="tfb-entry-field-wrap <?php echo ($field_count % 2 == 0) ? 'tfb-entry-even' : ''; ?>">
								<label><?php echo __( 'State', 'the-form-buildr' ); ?></label>
								<div class="tfb-entry-value"><?php echo $field_settings; ?></div>
							</div>
					    <?php 
					        
					    }
					    //self::print_array( $field_settings );
					}
					//self::print_array( $field_data );
					//self::print_array( $entry_detail );
				}
			} else {
				?>
				<p><?php _e( "It seems that you have deleted the form of this entry.Entry not found in database!", 'the-form-buildr' ); ?></p>
				<?php
			}
			?>
		</div>
	</div>
</div>
