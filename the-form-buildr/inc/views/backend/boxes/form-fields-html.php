<div class="tfb-form-fields-reference" style="display:none;">
	<!--Text Field Reference Field --->
	<div class="tfb-textfield-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Texfield', 'the-form-buildr' ); ?></span>-->
			<!--<div class="tfb-form-field form-preview">
					<input class="previewer" type="text" disabled="disabled" value="<?php _e( 'A Texfield', 'the-form-buildr' ); ?>"/>
				</div>-->
				<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'A Texfield', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="">
					</div>
				</div>
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<!--tfb-form-field-wrap-->
			
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
				<!---->
				<div class="tfb-form-field-wrap"  style="margin-top:60px">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Enter Information', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="required"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" class="tfb-field-placeholder-field" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'Your Name here', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="placeholder"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="error_message"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][min_chars]" placeholder='20' data-field-name="tfb_key" data-field-type="min_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][max_chars]" placeholder='50' data-field-name="tfb_key" data-field-type="max_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Position', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<select name="field_data[tfb_key][position]" value="1" data-field-name="tfb_key" data-field-type="position">
							<option value="full_width">Full Width</option>
							<option value="left">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
				</div>
				
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][pre_filled_value]"  data-field-name="tfb_key" data-field-type="pre_filled_value"/>
					</div>
				</div>-->
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="textfield" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Text Field Reference Field --->
	
	<!--Name Field Reference Field --->
	<div class="tfb-namefield-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'Name', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<!--tfb-form-field-wrap-->
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'Name', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
				<!---->
				<div class="tfb-form-field-wrap" style="margin-top:60px">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Name', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label" value="<?php _e( 'Name', 'the-form-buildr' ); ?>"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="required"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" class="tfb-field-placeholder-field" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'Name...', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="placeholder"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="error_message"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][min_chars]" placeholder='20' data-field-name="tfb_key" data-field-type="min_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][max_chars]" placeholder='50' data-field-name="tfb_key" data-field-type="max_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Position', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<select name="field_data[tfb_key][position]" value="1" data-field-name="tfb_key" data-field-type="position">
							<option value="full_width">Full Width</option>
							<option value="left">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
				</div>
				
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][pre_filled_value]"  data-field-name="tfb_key" data-field-type="pre_filled_value"/>
					</div>
				</div>-->
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="textfield" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Name Field Reference Field --->
	
	<!--Address Field Reference Field -->
	<div class="tfb-addressfield-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'Address', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<!--tfb-form-field-wrap-->
			
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'Address', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
				<!---->
				<div class="tfb-form-field-wrap" style="margin-top:60px">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Address', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label" value="<?php _e( 'Address', 'the-form-buildr' ); ?>"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="required"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" class="tfb-field-placeholder-field" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'Address...', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="placeholder"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your address', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="error_message"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][min_chars]" placeholder='20' data-field-name="tfb_key" data-field-type="min_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][max_chars]" placeholder='50' data-field-name="tfb_key" data-field-type="max_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Position', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<select name="field_data[tfb_key][position]" value="1" data-field-name="tfb_key" data-field-type="position">
							<option value="full_width">Full Width</option>
							<option value="left">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
				</div>
				
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][pre_filled_value]"  data-field-name="tfb_key" data-field-type="pre_filled_value"/>
					</div>
				</div>-->
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="textfield" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Address Field Reference Field --->
	
	<!--City Field Reference Field --->
	<div class="tfb-cityfield-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'City', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<!--tfb-form-field-wrap-->
			
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'City', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
				<!---->
				<div class="tfb-form-field-wrap" style="margin-top:60px">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field" >
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'City', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label" value="<?php _e( 'City', 'the-form-buildr' ); ?>"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requiarable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="required"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" class="tfb-field-placeholder-field" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'City...', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="placeholder"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your city', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="error_message"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][min_chars]" placeholder='20' data-field-name="tfb_key" data-field-type="min_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][max_chars]" placeholder='50' data-field-name="tfb_key" data-field-type="max_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Position', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<select name="field_data[tfb_key][position]" value="1" data-field-name="tfb_key" data-field-type="position">
							<option value="full_width">Full Width</option>
							<option value="left">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
				</div>
				
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][pre_filled_value]"  data-field-name="tfb_key" data-field-type="pre_filled_value"/>
					</div>
				</div>-->
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="textfield" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--City Field Reference Field --->

	<!--Text Area Reference Field --->
	<div class="tfb-textarea-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Texarea', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<!--tfb-form-field-wrap-->
			
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'Message', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
			
				<div class="tfb-form-field-wrap" style="margin-top:60px">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Your Message', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_type" value="<?php _e( 'Message', 'the-form-buildr' ); ?>"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Textarea Rows', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][textarea_rows]" placeholder='5' data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Textarea Columns', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][textarea_columns]" placeholder='20' data-field-name="tfb_key" data-field-type="textarea_columns"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][max_chars]" placeholder='50' data-field-name="tfb_key" data-field-type="max_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][min_chars]" placeholder='20' data-field-name="tfb_key" data-field-type="min_chars"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" class="tfb-field-placeholder-field" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'Your message here', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="placeholder"/>
					</div>
				</div>
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][pre_filled_value]" data-field-name="tfb_key" data-field-type="pre_filled_value"/>
					</div>
				</div>-->
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="textarea" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Text area reference -->

	<!--Email Reference Field --->
	<div class="tfb-email-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Email', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'Email', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			
			
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
				<!---->
				<div class="tfb-form-field-wrap" style="margin-top:60px">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Your Email', 'the-form-buildr' ); ?>" value="<?php _e( 'Email', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="required"/>
					</div>
				</div>
				
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" class="tfb-field-placeholder-field" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'Your Email here', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="placeholder"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="error_message"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Position', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<select name="field_data[tfb_key][position]" value="1" data-field-name="tfb_key" data-field-type="position">
							<option value="full_width">Full Width</option>
							<option value="left">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
				</div>
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][pre_filled_value]" data-field-name="tfb_key" data-field-type="pre_filled_value"/>
					</div>
				</div>-->
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="email" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Email Field reference-->

	<!--Dropdown Reference Field --->
	<div class="tfb-dropdown-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
		<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Dropdown', 'the-form-buildr' ); ?></span>
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			
			<div class="tfb-field-settings-wrap">
				<!---->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Name this dropdown', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
					<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="tfb_key"/>
						<div class="tfb-option-value-wrap">
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
						</div>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Multiple', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="checkbox" name="field_data[tfb_key][multiple]" value="1" data-field-name="tfb_key" data-field-type="multiple"/>
					</div>
				</div>
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="dropdown" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Dropdown Reference Field --->
	
	<!--Country Reference Field --->
	<div class="tfb-countryfield-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
		<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'Country/Region', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
				<label class="tfb-element-title prepreviewer"><span class="previewer"><?php echo _e( 'Country/Region', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700;<?php if($val['required'] != 1){ ?> display:none <?php } ?> "> *</span> </label>
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
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Country/Region', 'the-form-buildr' ); ?>" value="<?php _e( 'Your Country', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Include State', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][include_state]" value="1" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
					<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="tfb_key"/>
						<div class="tfb-option-value-wrap">
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
						</div>
					</div>
				</div>-->
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="countryfield" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Country Reference Field --->
	
	<!--Date Reference Field --->
	<div class="tfb-datefield-reference">
		<!--<div class="tfb-each-form-field tfb-relative ui-sortable">
		<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'Birthday', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'Birthday', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			
			
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
				<!---->
				<div class="tfb-form-field-wrap" style="margin-top:60px"> 
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Birthday', 'the-form-buildr' ); ?>" value="<?php _e( 'Birthday', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Include State', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="checkbox" name="field_data[tfb_key][include_state]" value="1" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>-->
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_type"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
					<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="tfb_key"/>
						<div class="tfb-option-value-wrap">
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="option"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="value"/>
								<span class="tfb-option-remover">X</span>
							</div>
						</div>
					</div>
				</div>-->
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="datefield" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->

	<!--Date Reference Field --->

	<!--Radio Button Reference Field --->
	<div class="tfb-radio-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
		<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Radio', 'the-form-buildr' ); ?></span>
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			
			<div class="tfb-field-settings-wrap">
				<!---->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Your Gender', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="checkbox" name="field_data[tfb_key][required]" value="1"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
					<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="tfb_key"/>
						<div class="tfb-option-value-wrap">
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="field_label"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="field_label"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="field_label"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="field_label"/>
								<span class="tfb-option-remover">X</span>
							</div>

						</div>
					</div>
				</div>
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="radio" data-field-name="tfb_key" data-field-type="field_label"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Radio Button Reference Field --->

	<!--Checkbox Reference Field --->
	<div class="tfb-checkbox-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Checkbox', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'A Checkbox', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="checkbox" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="You checkbox info">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			
			
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
			
				<!---->
				<div class="tfb-form-field-wrap" style="margin-top:60px">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Could be anything', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label" value="<?php _e( 'A Checkbox', 'the-form-buildr' ); ?>"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap tfb-full-width tfb-op-wrap">
					<label><?php _e( 'Options', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="button" value="<?php _e( 'New', 'the-form-buildr' ); ?>" class="tfb-option-value-adder button-primary" data-field-key="tfb_key"/>
						<div class="tfb-option-value-wrap">
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="field_label"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 1', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="field_label"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="field_label"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 2', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="field_label"/>
								<span class="tfb-option-remover">X</span>
							</div>
							<div class="tfb-each-option">
								<span class="tfb-option-drag-arrow"><i class="fa fa-arrows"></i></span>
								<input type="text" name="field_data[tfb_key][option][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Option" data-field-name="tfb_key" data-field-type="field_label"/>
								<input type="text" name="field_data[tfb_key][value][]" value="<?php _e( 'Option 3', 'the-form-buildr' ); ?>" placeholder="Value" data-field-name="tfb_key" data-field-type="field_label"/>
								<span class="tfb-option-remover">X</span>
							</div>
						</div>
					</div>
				</div>
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="checkbox" data-field-name="tfb_key" data-field-type="field_label"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Checkbox Reference Field --->
	
	<!--smartcheckbox Reference Field --->
	<div class="tfb-smartcheckbox-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Smart Checkbox', 'the-form-buildr' ); ?></span>-->
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'A Smart Checkbox', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="checkbox" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="You checkbox info">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			
			
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
			
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap" style="margin-top:60px">
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Could be anything', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label" value="<?php _e( 'A Smart Checkbox', 'the-form-buildr' ); ?>"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Action (check documentation)', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][action]" placeholder="<?php _e( 'toggle{field_id;field_id}', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="action"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill your name', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="error_message"/>
					</div>
				</div>
				
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="smartcheckbox" data-field-name="tfb_key" data-field-type="field_label"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--smartcheckbox Reference Field --->

	<!--Password Reference Field --->
	<div class="tfb-password-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
		<!--<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Password', 'the-form-buildr' ); ?></span>-->
			<div class="tfb-form-field form-preview" style="padding: 0px 10px;">
					<label class="tfb-element-title prepreviewer"><span class="previewer"><?php _e( 'A Password', 'the-form-buildr' ); ?></span><span class="tfb-req-symbol" style="color: #e80000;font-weight: 700; display:none "> *</span> </label>
					<div class="thefield">
						<input disabled="disabled" type="text" class="tfb-form-textfield" data-max-chars="" data-min-chars="" data-error-message="" placeholder="" value="">
					</div>
				</div>
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			
			
			<div id="settingsnav" class="tfb-field-settings-wrap settingsnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="box-shadow: none;">&times;</a>
				<!---->
				<div class="tfb-form-field-wrap" style="margin-top:60px"> 
					<label><?php _e( 'Field Label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Your Password', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Max Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][max_chars]" placeholder='50' data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Min Characters', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][min_chars]" placeholder='20' data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill number only', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'Your Password here', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="password" data-field-name="tfb_key" data-field-type="field_label"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Password Reference Field --->

	<!--Hidden Reference Field-->
	<div class="tfb-hidden-reference">
		<div class="tfb-each-form-field tfb-submit-button-wrap tfb-relative">
		<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'A Hidden', 'the-form-buildr' ); ?></span>
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<div class="tfb-form-field-wrap">
				<label class="tfb-field-label-ref"></label>
				<div class="tfb-form-field">
					<input type="hidden" disabled="disabled"/>
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
						<input type="text" name="field_data[tfb_key][field_label]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][pre_filled_value]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="hidden" data-field-name="tfb_key" data-field-type="field_label"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Hidden Reference Field-->

	<!--Number Reference Field-->
	<div class="tfb-number-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable">
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<div class="tfb-form-field-wrap">
				<label class="tfb-field-label-ref"><?php _e( 'A Number', 'the-form-buildr' ); ?></label>
				<div class="tfb-form-field">
					<input type="number" disabled="disabled"/>
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
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Your Number', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Required', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input class="requirable" type="checkbox" name="field_data[tfb_key][required]" value="1" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Max Value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][max_value]" placeholder='50' data-field-name="tfb_key" data-field-type="max_value"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Min Value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][min_value]" placeholder='20' data-field-name="tfb_key" data-field-type="min_value"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Error Message', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please fill number only', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'Your Password here', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Pre filled value', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][pre_filled_value]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="number" data-field-name="tfb_key" data-field-type="field_label"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Number Reference Field-->

	<!--Captcha Reference Field-->
	<div class="tfb-captcha-reference">
		<div class="tfb-each-form-field tfb-submit-button-wrap tfb-relative">
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<div class="tfb-form-field-wrap">
				<label class="tfb-field-label-ref"><?php _e( 'A Captcha', 'the-form-buildr' ); ?></label>
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
						<input type="text" name="field_data[tfb_key][field_label]" placeholder="<?php _e( 'Human Check', 'the-form-buildr' ); ?>" class="tfb-field-label-field" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Captcha Type', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<select name="field_data[tfb_key][captcha_type]" class="tfb-captcha-type-dropdown">
							<option value="mathematical"><?php _e( 'Mathematical Captcha', 'the-form-buildr' ); ?></option>
							<option value="google"><?php _e( 'Google reCaptcha', 'the-form-buildr' ); ?></option>
						</select>
					</div>
				</div>
				<div class="tfb-captcha-field-ref" style="display:none;">
					<div class="tfb-form-field-wrap">
						<label><?php _e( 'Site Key', 'the-form-buildr' ) ?></label>
						<div class="tfb-form-field">
							<input type="text" name="field_data[tfb_key][site_key]" data-field-name="tfb_key"/>
						</div>
					</div>
					<div class="tfb-form-field-wrap">
						<label><?php _e( 'Secret Key', 'the-form-buildr' ) ?></label>
						<div class="tfb-form-field">
							<input type="text" name="field_data[tfb_key][secret_key]" data-field-name="tfb_key"/>
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
						<input type="text" name="field_data[tfb_key][error_message]" placeholder="<?php _e( 'Please verify you are human.', 'the-form-buildr' ); ?>" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Placeholder', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][placeholder]" placeholder='<?php _e( 'Enter Sum', 'the-form-buildr' ); ?>' data-field-name="tfb_key" data-field-type="placeholder"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'ID', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_label"/>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="captcha" data-field-name="tfb_key" data-field-type="field_label"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Captcha Reference Field-->

	<!--Submit Reference Field-->
	<div class="tfb-submit-reference">
		<div class="tfb-each-form-field tfb-submit-button-wrap tfb-relative">
			<span class="tfb-drag-arrow"><i class="fa fa-arrows"></i></span>
			<div class="tfb-form-field-wrap form-preview" style="border: none;margin-left:30px;    width: 85%;">
				<div class="tfb-form-field">
					<input type="submit" disabled="disabled" class="button-primary tfb-submit-reference" value="<?php _e( 'Submit', 'the-form-buildr' ); ?>"/>
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
						<input type="text" name="field_data[tfb_key][field_id]" data-field-name="tfb_key" data-field-type="field_id"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap"  style="margin-top:60px">
					<label><?php _e( 'Submit Button label', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field" >
						<input type="text" name="field_data[tfb_key][button_label]" class="tfb-submit-button" data-field-name="tfb_key" data-field-type="button_label"/>
					</div>
				</div>
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Submit Button style(css)', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][button_style]" data-field-name="tfb_key" data-field-type="button_style"/>
					</div>
				</div>
				
				<!--<div class="tfb-form-field-wrap">
					<label><?php _e( 'Class of the field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<input type="text" name="field_data[tfb_key][field_class]" data-field-name="tfb_key" data-field-type="field_class"/>
					</div>
				</div>-->
				<div class="tfb-form-field-wrap">
					<label><?php _e( 'Delete field', 'the-form-buildr' ); ?></label>
					<div class="tfb-form-field">
						<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary">Delete</a>
					</div>
				</div>
				<input type="hidden" name="field_data[tfb_key][field_type]" value="submit" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Submit Reference Field-->
	
	<!--Separator Reference-->
	<div class="tfb-separator-reference">
		<div class="tfb-each-form-field tfb-relative ui-sortable" style="padding-top:0px;padding-bottom:0px">
			<span class="tfb-field-label-ref tfb-element-title"><?php _e( 'Separator', 'the-form-buildr' ); ?></span>
			<span class="tfb-drag-arrow" style="top:-14px"><i class="fa fa-arrows"></i></span>
			<!--tfb-form-field-wrap-->
			<!--<div class="tfb-field-controls">
				<a href="javascript:void(0)" class="tfb-field-delete-trigger button-primary" data-confirm-message="<?php _e( 'If you delete this element then data related with this element will also be deleted. Are you sure you want to delete this element?', 'the-form-buildr' ); ?>">Delete</a>
			</div>-->
			<a href="javascript:void(0)" class="tfb-field-delete-trigger x-button">&times;</a>
			
			
			<div id="" class="tfb-field-settings-wrap" style="display:none;">
				
				<input type="hidden" name="field_data[tfb_key][field_type]" value="separator" data-field-name="tfb_key" data-field-type="field_type"/>
			</div>
		</div><!--tfb-each-form-field-->
	</div>
	<!--Separator Reference-->

</div>
<div class="tfb-form-temp-holder" style="display:none;">

</div>
