$(document).ready(function(){
	
	(function fafa_click(fafa_element, container, class_to_add){
		fafa_element.click(function(){
			if(container.hasClass(class_to_add)){
				container.removeClass(class_to_add);
			}else{ container.addClass(class_to_add); }
		});
	})($('.fa.fa-gamepad'), $('#container'), 'active');
	
	
	//add the clickToggle method to jquery.
	(function($) {
	    $.fn.clickToggle = function(func1, func2) {
	        var funcs = [func1, func2];
	        this.data('toggleclicked', 0);
	        this.click(function() {
	            var data = $(this).data();
	            var tc = data.toggleclicked;
	            $.proxy(funcs[tc], this)();
	            data.toggleclicked = (tc + 1) % 2;
	        });
	        return this;
	    };
	}(jQuery));
	
	function limit_to_one_slidedown(){
		//code to shut down any open slidedowns.
		$('.animate_active') //find all slidedowns that are open.
			.parent() //find the parent of such slidedowns.
			.find('.slidedown_trigger') //within the parent, find the trigger for the slidedowns.
			.trigger('click'); //trigger the click event on active slidedowns.
	};
	
	function slidedown(trigger, target){
		$(trigger).clickToggle(function() {
			limit_to_one_slidedown();
			$(target).slideDown().addClass("animate_active");			
		}, function() {
			$(target).slideUp().removeClass("animate_active");
		});
		
		//For Fun...comment out the limit_one_slidedown and uncomment the setTimeout
		//setTimeout(function(){ slidedown(trigger, target) }, 6000);
	};

	slidedown("#slidedown_trigger_1", "#slidedown_1");
	slidedown("#slidedown_trigger_2", "#slidedown_2");
	slidedown("#slidedown_trigger_3", "#slidedown_3");
	slidedown("#slidedown_trigger_4", "#slidedown_4");
	
	
	
	(function active_overlay(){
		$(".overlay").overlay({effect: 'apple'});
		
		
	})();
	
	(function window_resize_event(){
		$(window).resize(function(){
			if($(window).width() < 700)
			{
				//this is mobile view
				$(".overlayable").removeClass('overlay_desktop').addClass('overlay_mobile');
				$('#overlay_trigger_1').click(function(){
					$(this)
						.parents()
						.find('.content-container')
						.find('.default-content').hide();
					$(this)
						.parents()
						.find('.content-container')
						.find('.loadable-content').html($('#overlay_1').html()).fadeIn('slow');
				});
			} else {
				//this is fullscreen view.
				$('#overlay_trigger_1').click(function(){
					$('#overlay_1').overlay().load();
				});
				$(".overlayable").addClass('overlay_desktop').removeClass('overlay_mobile');
			}
		});
		
		$(window).trigger("resize");
	})();
	
});