(function ($) {

    function reset_form(selector) {

        selector.find('input[type="text"]').val('');
        selector.find('input[type="email"]').val('');
        selector.find('input[type="password"]').val('');
        selector.find('input[type="number"]').val('');
        selector.find('textarea').val('');
        selector.find('input[type="checkbox"]').removeAttr('checked');
        selector.find('option').removeAttr('selected');
        selector.find('.sbHolder > a:nth-child(2)').each(function () {
            var replace_html = $(this).parent().find('ul > li > a').html();
            $(this).html(replace_html);
        });
        if ($(selector).find('#g-recaptcha-response').length > 0) {
            grecaptcha.reset();
        }
    }

    $(function () {
		$(".click-form").on('click', function(event){
			document.getElementById("hidebg").style.display = "block";
		});
		
		$(".close-form").on('click', function(event){
			document.getElementById("hidebg").style.display = "none";
		});
		
		
        $('.tfb-front-form').submit(function (e) {
            e.preventDefault();
            var selector = $(this);
            var form_data = selector.serializeArray();
            var captchaResponse = $(this).find('#g-recaptcha-response').val();
            $.ajax({
                url: frontend_js_obj.ajax_url,
                type: 'post',
                data: {
                    _wpnonce: frontend_js_obj.ajax_nonce,
                    form_data: form_data,
                    captchaResponse: captchaResponse,
                    action: 'tfb_front_form_action'

                },
                beforeSend: function () {
                    selector.find('.tfb-form-loader').show();
                    selector.find('.tfb-error').html('');
                    $('.tfb-form-message').slideUp(300);
                },
                success: function (res) {
                    selector.find('.tfb-form-loader').hide();
                    console.log(res);
                    res = $.parseJSON(res);
                    if (res.error_flag == 1) {
                        for (error_key in res.error_keys) {
                            selector.find('div[data-error-key="' + error_key + '"]').html(res.error_keys[error_key]);
                        }
                        selector.find('.tfb-form-message').html(res.response_message).removeClass('tfb-success-message').addClass('tfb-error-message').slideDown(300);
                        if ($(selector).find('#g-recaptcha-response').length > 0) {
                            grecaptcha.reset();
                        }
                    } else {
                        selector.find('.tfb-form-message').html(res.response_message).removeClass('tfb-error-message').addClass('tfb-success-message').slideDown(300);
                        selector.find('.tfb-error').html('');
                        reset_form(selector);

                    }
                }
            });

        });

        $('.tfb-front-form input[type="text"],.tfb-front-form input[type="email"],.tfb-front-form input[type="email"],.tfb-front-form textarea,.tfb-front-form input[type="password"]').keyup(function () {
            $(this).next('.tfb-error').html('');
        });
        $('.tfb-front-form input[type="radio"],.tfb-front-form input[type="checkbox"]').click(function () {
            $(this).closest('.tfb-form-field').find('.tfb-error').html('');
        });
        $('.tfb-front-form select').change(function () {
            $(this).closest('.tfb-form-field').find('.tfb-error').html('');
        });

        $('.tfb-math-captcha-ans').keyup(function () {
            $(this).closest('.tfb-form-field-wrap').find('.tfb-error').html('');
        });

        /**
         * Custom dropdown 
         */
        $(".tfb-template-1 .tfb-form-dropdown,.tfb-template-2 .tfb-form-dropdown,.tfb-template-3 .tfb-form-dropdown,.tfb-template-4 .tfb-form-dropdown,.tfb-template-5 .tfb-form-dropdown").selectbox();

        $('.tfb-form-reset').click(function (e) {
            //e.preventDefault();
            var selector = $(this).closest('form');
            reset_form(selector);
        });
		
		$('.tfb-form-next').click(function (e) {
            //e.preventDefault();
            var nxtbtn = $(this).attr('name');
			var snddiv = parseInt(nxtbtn)+1;
			var nxtstep = parseInt(snddiv)+1;
            //reset_form(selector);
			document.getElementById(nxtbtn).style.display = "none";
			document.getElementById("step" + snddiv).classList.remove('is-active');
			document.getElementById("step" + nxtstep).classList.add('is-active');
			document.getElementById(snddiv).style.display = "block";
			
        });
		
		
		
		$('.tfb-form-back').click(function (e) {
            //e.preventDefault();
            var nxtbtn = $(this).attr('name');
			var snddiv = parseInt(nxtbtn)-1;
			var step = parseInt(nxtbtn)+1;
			var prevstep = parseInt(snddiv)+1;
            //reset_form(selector);
			document.getElementById(nxtbtn).style.display = "none";
			document.getElementById("step" + step).classList.remove('is-active');
			document.getElementById("step" + prevstep).classList.add('is-active');
			document.getElementById(snddiv).style.display = "block";
			
        });
		
		$('.astep').click(function (e) {
            //e.preventDefault();
            var selection = document.getElementsByClassName("is-active")[0];
            selection.classList.remove('is-active');
            var selected = selection.id.substring(4);
			var thisstep = $(this).attr('id').substring(4);
			var thisdiv = parseInt(thisstep)-1;
			var selecteddiv = parseInt(selected)-1;
            //reset_form(selector);
			document.getElementById(selecteddiv).style.display = "none";
			document.getElementById("step" + thisstep).classList.add('is-active');
			document.getElementById(thisdiv).style.display = "block";
			
        });
		
		$('.smartcheckbox').change(function() {
			if($(this).is(":checked")) {
				var action = $(this).attr('id');
				var array = action.split("{");
				action = array[0];
				if(action.toLowerCase() == 'toggle'){
					var ids = array[1].replace("}", "");
					var allids = ids.split(",");
					for(var n=0; n<allids.length; n++) {
						document.getElementById("mform"+allids[n]).style.display = "inline-block";
					}
				}
			}else{
				var action = $(this).attr('id');
				var array = action.split("{");
				action = array[0];
				if(action.toLowerCase() == 'toggle'){
					var ids = array[1].replace("}", "");
					var allids = ids.split(",");
					for(var n=0; n<allids.length; n++) {
						document.getElementById("mform"+allids[n]).style.display = "none";
					}
				}
			}			
			
		});


    });//document.ready close
}(jQuery));


/*function performaction(){
	var elements = document.getElementsByClassName("smartcheckbox");
	for(var i=0; i<elements.length; i++) {
		var action = elements[i].id;
		var array = str.split("{");
		action = array[0];
		if(action.toLowerCase() == 'toggle'){
			var ids = array[1].replace("}", "");
			var allids = ids.split(",");
			for(var n=0; n<allids.length; n++) {
				document.getElementById(allids[n]).style.display = "none";
			}
		}
	}
}*/
