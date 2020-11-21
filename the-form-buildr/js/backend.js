(function ($) {
    /**
     * Function to capture field type html
     * @param {string} field_type
     * @returns {string}
     */
    function get_field_html(field_type) {
		$('.sidenav').css('width', '0');
		$('#plus_btn').css('visibility', 'visible');
        var form_key_count = $('.tfb-form-key-count').val();
        form_key_count++;
        var field_key = 'tfb_field_' + form_key_count;
        $('.tfb-form-key-count').val(form_key_count);
        var html = $('.tfb-' + field_type + '-reference').html();
        $('.tfb-form-temp-holder').html(html);
        $('.tfb-form-temp-holder input').each(function () {
            var name_attr = $(this).attr('name');
            if (name_attr) {
                name_attr = name_attr.replace('tfb_key', field_key);
                $(this).attr('name', name_attr);
                //alert(name_attr);
            }



        });
        $('.tfb-form-temp-holder select').each(function () {
            var name_attr = $(this).attr('name');
            if (name_attr) {
                name_attr = name_attr.replace('tfb_key', field_key);
                $(this).attr('name', name_attr);
                //alert(name_attr);
            }



        });
        var html = $('.tfb-form-temp-holder').html();
        $('.tfb-form-temp-holder').html('');
        return html;

    }

    $(function () {
        /**
         * Add Form Popup Hide Show
         */
        $('.tfb-add-form-trigger').click(function () {
            $('.tfb-popup-wrap').fadeIn(400);
            $('.tfb-form-title').focus();
        });

        $('.tfb-overlay').click(function () {
            $('.tfb-popup-wrap').fadeOut(200);
        });

        /**
         * Form ajax add
         */
        $('.tfb-form-add-btn').click(function () {
            var selector = $(this);
            $.ajax({
                type: 'post',
                url: tfb_ajax_obj.ajax_url,
                data: {_wpnonce: tfb_ajax_obj.ajax_nonce,
                    action: 'add_form_action',
                    form_title: $('.tfb-form-title').val()
                },
                beforeSend: function () {
                    selector.parent().find('.tfb-ajax-loader').show();
                },
                success: function (res) {
                    $('.tfb-ajax-loader').hide();
                    res = $.parseJSON(res);
                    if (res.success == 1) {
                        $('.tfb-msg').show();
                        window.location = res.redirect_url;
                        return false;
                    } else {
                        $('.tfb-add-error').html(res.error_msg).show();
                    }

                }
            });
        });

        /**
         * Form on and off toggle
         */
        $('.onoffswitch-label').click(function () {
            var selector = $(this);
            var form_id = $(this).data('form-id');
            if ($(this).parent().find('.onoffswitch-checkbox').is(':checked')) {
                var status = 0;
            } else {
                var status = 1;
            }
            $.ajax({
                type: 'post',
                url: tfb_ajax_obj.ajax_url,
                data: {
                    _wpnonce: tfb_ajax_obj.ajax_nonce,
                    status: status,
                    form_id: form_id,
                    action: 'tfb_form_status_action'
                },
                beforeSend: function () {
                    selector.closest('.shortcode').find('.tfb-ajax-loader').show();
                },
                success: function (res) {
                    selector.closest('.shortcode').find('.tfb-ajax-loader').hide();
                    selector.closest('.shortcode').find('.tfb-status-message').html(res).show().fadeOut(3500);

                }

            });
        });

        /**
         * Tabs Trigger show hide
         */
        $('.tfb-tab-trigger').click(function () {
            var attr_id = $(this).data('id');
            $('.tfb-tab-trigger').removeClass('nav-tab-active');
            $(this).addClass('nav-tab-active');
            $('.tfb-tab-content').hide();
            $('#tfb-' + attr_id + '-tab').show();
        });

        /**
         * Form Title edit trigger
         */
        $('.tfb-form-title').click(function () {
            if ($('.tfb-form-title #tfb-form-title').length == 0) {
                var form_title = $(this).html();
                $(this).html('<input type="text" id="tfb-form-title" value="' + form_title + '"/>');
                $('.tfb-form-title #tfb-form-title').focus();
            }

        });
		
		
        $('body').on('blur', '.tfb-form-title #tfb-form-title', function () {
            var form_title = $(this).val();
            form_title = (form_title == '') ? 'Untitled Form' : form_title;
            $('.tfb-form-title').html(form_title);
            $('.tfb-form-title-field').val(form_title);
        });

        /**
         * Form Builder functionality
         */
        $('.tfb-form-element').click(function () {
            var field_type = $(this).data('field-type');
            var field_html = get_field_html(field_type);
            //field_html = '<div class="tfb-each-form-field">' + field_html + '<div class="tfb-field-controls"><a href="javascript:void(0)" class="tfb-field-settings-trigger button-primary">Settings</a><a href="javascript:void(0)" class="tfb-field-delete-trigger" onclick="return confirm(\'If you delete this element then data related with this element will also be deleted. Are you sure you want to delete this element?\')">Delete</a></div></div>';
            $('.tfb-form-field-holder').append(field_html);

        });

        /**
         * Form Element Delete
         */
        $('body').on('click', '.tfb-field-delete-trigger', function () {
            if (confirm('If you delete this element then data related with this element will also be deleted. Are you sure you want to delete this element?')) {
                $(this).closest('.tfb-each-form-field').fadeOut(500, function () {
                    $(this).remove();
                });
            }

        });

        $('.tfb-form-field-holder').sortable({
            handle: '.tfb-drag-arrow'
        });
		
		/*$('.tfb-form-field-holder').sortable({
            handle: '.tfb-drag-arrow-collapsed'
        });*/
        $('.tfb-option-value-wrap').sortable({
            containment: "parent",
            handle: '.tfb-option-drag-arrow'
        });

        /*$('body').on('click', '.tfb-field-settings-trigger', function () {
            if ($(this).next('span').html() == '+') {
                var selector = $(this);
                $(this).closest('.tfb-each-form-field').find('.tfb-field-settings-wrap').slideDown(500, function () {

                    selector.next('span').html('-');
                });
            } else {
                var selector = $(this);
                $(this).closest('.tfb-each-form-field').find('.tfb-field-settings-wrap').slideUp(500, function () {
                    selector.next('span').html('+');

                });
            }

        });*/
		
		
		/*$('body').on('click', '.tfb-field-settings-trigger', function () {
            if ($(this).html() == 'Open Settings') {
                var selector = $(this);
                $(this).closest('.tfb-each-form-field').find('.tfb-field-settings-wrap').slideDown(500, function () {

                    selector.html('Close Settings');
                });
            } else {
                var selector = $(this);
                $(this).closest('.tfb-each-form-field').find('.tfb-field-settings-wrap').slideUp(500, function () {
                    selector.html('Open Settings');

                });
            }

        });*/
		
		
		
		/*$('body').on('click', '.tfb-each-form-field', function () {
			var thisAttr = $(this).closest('.tfb-each-form-field').find('.tfb-drag-arrow').attr('id');
			var each_form = $(this).closest('.tfb-each-form-field').find('.tfb-drag-arrow');
			//prompt("Please enter your name", "Harry Potter");
			
			if($(this).find('.tfb-field-settings-wrap').width() == "0"){
				var elements = document.getElementsByClassName("tfb-field-settings-wrap");
				var elementss = document.getElementsByClassName("tfb-each-form-field");
				for(var i=0; i<elements.length; i++) {
					elements[i].style.width = "0";
				}
				for(var i=0; i<elementss.length; i++) {
					elementss[i].style.border = "2px solid #afafaf";
				}
				$(this).find('.tfb-field-settings-wrap').css('width','350px');
				$(this).css('border','2px solid #45f9cf');
				document.getElementById("plus_btn").style.visibility = "visible";
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("plus_btn").style.visibility = "hidden";
			}else{
				$(this).find('.tfb-field-settings-wrap').css('width','0');
				$(this).css('border','2px solid #afafaf');
				document.getElementById("plus_btn").style.visibility = "visible";
			}
            

        });*/
		
    	$('body').on('click', '.form-preview', function () {
			if($(this).closest('.tfb-each-form-field').find('.tfb-field-settings-wrap').width() == "0"){
				var elements = document.getElementsByClassName("tfb-field-settings-wrap");
				var elementss = document.getElementsByClassName("tfb-each-form-field");
				for(var i=0; i<elements.length; i++) {
					elements[i].style.width = "0";
				}
				for(var i=0; i<elementss.length; i++) {
					elementss[i].style.border = "2px solid #afafaf";
				}
				$(this).closest('.tfb-each-form-field').find('.tfb-field-settings-wrap').css('width','350px');
				$(this).closest('.tfb-each-form-field').css('border','2px solid #45f9cf');
				document.getElementById("plus_btn").style.visibility = "visible";
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("plus_btn").style.visibility = "hidden";
			}else{
				$(this).closest('.tfb-each-form-field').find('.tfb-field-settings-wrap').css('width','0');
				$(this).closest('.tfb-each-form-field').css('border','2px solid #afafaf');
				document.getElementById("plus_btn").style.visibility = "visible";
			}
            

        });
		
		$('body').on('click', '.x-button', function () {
				var elements = document.getElementsByClassName("tfb-field-settings-wrap");
				var elementss = document.getElementsByClassName("tfb-each-form-field");
				for(var i=0; i<elements.length; i++) {
					elements[i].style.width = "0";
				}
				for(var i=0; i<elementss.length; i++) {
					elementss[i].style.border = "2px solid #afafaf";
				}
				document.getElementById("plus_btn").style.visibility = "visible";
			
            

        });
		
		$('body').on('click', '.requirable', function () {
			var thisAttr = $(this).closest('.tfb-each-form-field').find('.tfb-drag-arrow').attr('id');
			var each_form = $(this).closest('.tfb-each-form-field').find('.tfb-drag-arrow');
			//prompt("Please enter your name", "Harry Potter");
			if($(this). prop("checked") == true){
				$(this).closest('.tfb-each-form-field').find('.form-preview').find('.prepreviewer').find('.tfb-req-symbol').css('display','inline-block');
			}else{
				$(this).closest('.tfb-each-form-field').find('.form-preview').find('.prepreviewer').find('.tfb-req-symbol').css('display','none');
			}

        });
		

        $('body').on('keyup', '.tfb-field-label-field', function () {
            var label_text = $(this).val();
            label_text = (label_text != '') ? label_text : 'A Field';
            //$(this).closest('.tfb-each-form-field').find('.tfb-field-label-ref').html(label_text);
			$(this).closest('.tfb-each-form-field').find('.form-preview').find('.prepreviewer').find('.previewer').html(label_text + " ");
        });
		
		$('body').on('keyup', '.tfb-field-placeholder-field', function () {
            var label_text = $(this).val();
            label_text = (label_text != '') ? label_text : '';
            //$(this).closest('.tfb-each-form-field').find('.tfb-field-label-ref').html(label_text);
			$(this).closest('.tfb-each-form-field').find('.form-preview').find('.thefield').find('.tfb-form-textfield').attr("placeholder", label_text);
        });
		
        $('body').on('keyup', '.tfb-submit-button', function () {
            var label_text = $(this).val();
            label_text = (label_text != '') ? label_text : 'Submit';
            $(this).closest('.tfb-each-form-field').find('.tfb-submit-reference').val(label_text);
        });
		

        $('body').on('click', '.tfb-option-remover', function () {
            $(this).closest('.tfb-each-option').fadeOut(500, function () {
                $(this).remove();
            });
        });

        /**
         * Add Option for radio button, checkbox, dropdown
         */
        $('body').on('click', '.tfb-option-value-adder', function () {
            var html = $(this).closest('.tfb-form-field').find('.tfb-each-option').first().html();
            html = '<div class="tfb-each-option" style="display:none;">' + html + '</div>';
            $(this).closest('.tfb-form-field').find('.tfb-option-value-wrap').append(html);
            $(this).closest('.tfb-form-field').find('.tfb-option-value-wrap').find('.tfb-each-option').last().find('input[type="text"]').val('');
            $('.tfb-each-option').show();
            $(this).closest('.tfb-form-field').find('.tfb-option-value-wrap').find('.tfb-each-option').last().find('input[type="text"]').first().focus();
        });



        /**
         * Form Post
         */
        $('.tfb-save-form').click(function () {
            $('.tfb-form').submit();
        });

        $('.tfb-message button').click(function () {
            $(this).parent().remove();
        });

        /**
         * Email Reciever add trigger
         */
        $('.tfb-email-adder').click(function () {
            var html = '<div class="tfb-email-fields"><input type="text" name="email_settings[email_reciever][]" placeholder="test@abc.com"/><span class="tfb-email-remove">X</span></div>';
            $(this).parent().append(html);
            $('.tfb-email-fields').last().find('input').focus();
        });

        $('body').on('click', '.tfb-email-remove', function () {
            $(this).parent().fadeOut(300, function () {
                $(this).remove();
            });
        });

        $('.tfb-delete').click(function () {
            $(this).parent().find('.tfb-delete-confirmation').slideToggle(500);
        });
        $('.tfb-delete-cancel').click(function () {
            $(this).parent().slideUp(500);
        });

        /* $('.row-actions').mouseleave(function () {
         $(this).find('.tfb-delete-confirmation').slideUp(500);
         });
         */
        $('.tfb-form-delete-yes').click(function () {
            var form_id = $(this).data('form-id');
            var selector = $(this);
            $.ajax({
                url: tfb_ajax_obj.ajax_url,
                type: 'post',
                data: {
                    form_id: form_id,
                    _wpnonce: tfb_ajax_obj.ajax_nonce,
                    action: 'tfb_form_delete_action'
                },
                beforeSend: function () {
                    selector.parent().find('.tfb-ajax-loader').show();
                },
                success: function (res) {
                    if (res == 'success') {
                        selector.closest('tr').fadeOut(500, function () {
                            $(this).remove();
                        });
                        console.log(res);
                    } else {
                        alert(res);
                    }



                }
            });
        });

        $('.tfb-add-form-wrap .tfb-form-title').keypress(function (e) {
            if (e.which == 13) {
                $(this).closest('.tfb-add-form-wrap').find('.tfb-form-add-btn').click();
            }
        });
        $('.tfb-new-form-wrap .tfb-form-title').keypress(function (e) {
            if (e.which == 13) {
                $(this).closest('.tfb-new-form-wrap').find('.tfb-form-add-btn').click();
            }
        });
        $('.tfb-copy-popup-wrap .tfb-form-title').keypress(function (e) {
            if (e.which == 13) {
                $(this).closest('.tfb-add-form-wrap').find('.tfb-form-copy-btn').click();
            }
        });
		
		$('.selector').on('change', function() {
		  if($(this).children("option:selected").val() == "normal"){
				$(this).closest('.tfb-tab-content').find('.button-style').css("display", "none");
				$(this).closest('.tfb-tab-content').find('.button-txt').css("display", "none");
		  }else{
				$(this).closest('.tfb-tab-content').find('.button-style').css("display", "block");
				$(this).closest('.tfb-tab-content').find('.button-txt').css("display", "block");
		  }
		});


        /**
         * Delete Entry 
         */
        $('.tfb-delete-entry-yes').click(function () {
            var entry_id = $(this).data('entry-id');
            var selector = $(this);
            $.ajax({
                url: tfb_ajax_obj.ajax_url,
                type: 'post',
                data: {
                    entry_id: entry_id,
                    _wpnonce: tfb_ajax_obj.ajax_nonce,
                    action: 'tfb_entry_delete_action'
                },
                beforeSend: function () {
                    selector.parent().find('.tfb-ajax-loader').show();
                },
                success: function (res) {
                    selector.parent().find('.tfb-ajax-loader').hide();
                    if (res == 'success') {
                        selector.closest('tr').fadeOut(500, function () {
                            $(this).remove();
                        });
                        console.log(res);
                    } else {
                        alert(res);
                    }



                }
            });
        });

        /**
         * View Entry Popup
         */
        $('.tfb-view-entry > a').click(function () {
            var entry_id = $(this).data('entry-id');
            $.ajax({
                url: tfb_ajax_obj.ajax_url,
                data: {
                    entry_id: entry_id,
                    _wpnonce: tfb_ajax_obj.ajax_nonce,
                    action: 'tfb_get_entry_detail_action'
                },
                type: 'post',
                beforeSend: function () {
                    $('.tfb-entry-overlay').fadeIn(300, function () {
                        $('.tfb-entry-wrap').show();
                    });
                },
                success: function (res) {
                    height = $(window).height();
                    var entry_inner_wrap_height = 0.70 * height;
                    $('.tfb-entry-wrap').html(res);
                    $('.tfb-entry-wrap .tfb-entry-inner-wrap').height(entry_inner_wrap_height);
                }
            });

        });

        /**
         * Entry Popup Close
         */
        $('body').on('click', '.tfb-entry-overlay,.tfb-entry-detail-close', function () {
            $('.tfb-entry-overlay').fadeOut(300, function () {
                $('.tfb-entry-wrap').html('<span class="tfb-entry-ajax-loader"></span>');

            });
            $('.tfb-entry-wrap').fadeOut(300);


        });

        /**
         * Entry Filter 
         */
        $('.tfb-entry-filter-select').change(function () {
            var form_id = $(this).val();
            var admin_url = $(this).data('admin-url');
            var redirect_url = (form_id == '') ? admin_url + 'admin.php?page=tfb-form-entries' : admin_url + 'admin.php?page=tfb-form-entries&form_id=' + form_id;
            window.location = redirect_url;
            return false;
        });

        /**
         * Form copy popup open
         */
        $('body').on('click', '.tfb-copy', function () {
            var form_id = $(this).data('form-id');
            $('.tfb-copy-form-id option[value="' + form_id + '"]').attr('selected', 'selected');
            $('.tfb-copy-popup-wrap').fadeIn(300);
            $('.tfb-copy-popup-wrap .tfb-form-title').focus();
        });

        $('.tfb-overlay').click(function () {
            $('.tfb-copy-popup-wrap').fadeOut(300);
        });

        /**
         * Form Copy 
         */
        $('.tfb-form-copy-btn').click(function () {
            var selector = $(this);
            $.ajax({
                type: 'post',
                url: tfb_ajax_obj.ajax_url,
                data: {_wpnonce: tfb_ajax_obj.ajax_nonce,
                    action: 'copy_form_action',
                    form_title: selector.closest('.tfb-copy-popup-wrap').find('.tfb-form-title').val(),
                    form_id: selector.closest('.tfb-copy-popup-wrap').find('.tfb-copy-form-id').val()
                },
                beforeSend: function () {
                    selector.closest('.tfb-add-form-wrap').find('.tfb-ajax-loader').show();
                },
                success: function (res) {
                    $('.tfb-ajax-loader').hide();
                    res = $.parseJSON(res);
                    if (res.success == 1) {
                        $('.tfb-msg').show();
                        window.location = res.redirect_url;
                        return false;
                    } else {
                        $('.tfb-add-error').html(res.error_msg).show();
                    }

                }
            });
        });

        /**
         * Captcha Type Dropdown on Change
         */
        $('body').on('change', '.tfb-captcha-type-dropdown', function () {
            var captcha_type = $(this).val();
            if (captcha_type == 'google') {
                $(this).closest('.tfb-field-settings-wrap').find('.tfb-captcha-field-ref').show();
            } else {
                $(this).closest('.tfb-field-settings-wrap').find('.tfb-captcha-field-ref').hide();

            }
        });

        /**
         * Backend template change
         */
        $('.tfb-form-template-dropdown').change(function () {
            var template_name = $(this).val();
            $('.tfb-template-preview img').hide();
            $('.tfb-template-preview #preview-' + template_name).show();
        });

        /**
         * Page Leave Message
         */
        $(".tfb-form :input").change(function () {
            $('.tfb-form').data("changed", true);
        });
       
        $(window).bind('beforeunload',function(){
            if ($('.tfb-form').data('changed') == true) {

                return 'The changes you made will be lost if you navigate away from this page.';
            }
        })
        
        $(".tfb-form").submit(function () {
            $(window).unbind("beforeunload");
        });


    });//document.ready close
}(jQuery));

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}


function openNav() {
	document.getElementById("plus_btn").style.visibility = "hidden";
	document.getElementById("mySidenav").style.width = "250px";
  
}

/* Set the width of the side navigation to 0 */
function closeNav() {
	document.getElementById("plus_btn").style.visibility = "visible";
	document.getElementById("mySidenav").style.width = "0";
	var elements = document.getElementsByClassName("tfb-field-settings-wrap");
	var elementss = document.getElementsByClassName("tfb-each-form-field");
	for(var i=0; i<elements.length; i++) {
		elements[i].style.width = "0";
	}
	for(var i=0; i<elementss.length; i++) {
		elementss[i].style.border = "2px solid #afafaf";
	}
}
