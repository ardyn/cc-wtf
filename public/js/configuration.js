jQuery(document).ready(function() {

	/* Input Place holder Script*/
	$('input[placeholder]').each(function(){  
		var input = $(this);        
		$(input).val(input.attr('placeholder'));

		$(input).focus(function(){
			if (input.val() == input.attr('placeholder')) {
			   input.val('');
			}
		});

		$(input).blur(function(){
		   if (input.val() == '' || input.val() == input.attr('placeholder')) {
			   input.val(input.attr('placeholder'));
		   }
		});
	});
  
	$('.inputDisabled input').attr("disabled", "disabled");
	$('.inputDisabled #companyName').removeAttr('disabled');
	
	$('.inputDisabled input#companyName').blur(function(){
	    if($(this).val().length != 0){
	       $('.inputDisabled input').removeAttr('disabled');
	    }    
	});

	/*Side Navigation Script*/
	$(".sideNav").click(function (evt) {
		var $this = $(this);
		$('.sideNav').removeClass('current');
		$this.addClass('current');

		if($("#content").hasClass( "side-menu" ) == true){
			if ($this.hasClass('leftMenu') == true) {
				$("#content").removeClass('side-menu');
				$('#home').hide();
				$('#calander').hide();
				$('#users').hide();
				$('#chart').hide();
				$('#setting').hide();
			}
		} else {
			$('.main-content').addClass('side-menu');
			$('#home').show(400);
			$('#calander').hide();
			$('#users').hide();
			$('#chart').hide();
			$('#setting').hide();
		}
		evt.preventDefault();
    });

    $(".home").click(function () {
		$('#home').show();
		$('#calander').hide();
		$('#users').hide();
		$('#chart').hide();
		$('#setting').hide();
 
    });
 
    $(".calander").click(function () {
		$('#home').hide();
		$('#calander').show();
		$('#users').hide();
		$('#chart').hide();
		$('#setting').hide();
 
    });

    $(".users").click(function () {
		$('#home').hide();
		$('#calander').hide();
		$('#users').show();
		$('#chart').hide();
		$('#setting').hide();
 
    });

    $(".chart").click(function () {
		$('#home').hide();
		$('#calander').hide();
		$('#users').hide();
		$('#chart').show();
		$('#setting').hide();
 
    });
    $(".setting").click(function () {
		$('#home').hide();
		$('#calander').hide();
		$('#users').hide();
		$('#chart').hide();
		$('#setting').show();
 
    });

    $(".navigation li").click(function (evt) {
		var $this = $(this);
		$('.navigation li').removeClass('active');
		$this.addClass('active');
	});

});
