Number.prototype.format = function(n, x) {
    var re = '(\\d)(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
};
function changeHeight() {
	"use strict";
	var wHeight = $(window).height();
	var dHeight = $('#page-bg').height();
	var cHeight = $('#centered').height() + 360;
	if (cHeight< wHeight){$('#centered').css('margin-top', (wHeight - cHeight)/2 + 'px');}
	else {$('#centered').css('margin-top', 0);}
	if (dHeight < wHeight) {$('#page-bg').height(wHeight - 20);}
	else {
		$('#page-bg').height('auto');
		dHeight = $('#page-bg').height();
		if (dHeight < wHeight){$('#page-bg').height(wHeight - 20);}
	}	
}

$(document).ready(function() {
	"use strict";
	$(window).resize(function() {changeHeight();});
	
	$('#page-bg').css('min-height',$('#sidebar').height());
	
	$('#option-links a').click(function() {
		$('#option-links a').removeClass('active');
		$(this).addClass('active');
	});
	
	$('#more-options').click(function() {
		if(!$(this).hasClass('active')){
			$('#sidebar').stop().animate({left:0},500,'easeOutExpo');	
		}
	});
	
	$('#close-sidebar,#advanced-search-cancel').click(function() {
		$('#sidebar').stop().animate({left:-520},500,'easeOutExpo');	
	});
	
	$('.icon-check').click(function() {
		$(this).toggleClass('unchecked');
	});
	$('.switch').click(function() {
		$(this).parents('.switch-group').find('.switch').addClass('unchecked');
		$(this).removeClass('unchecked');
		var val =  $(this).attr('rel');
		$('#'+$(this).parents('.switch-group').attr('rel')).val(val);
	});
	
	$('.money-switch').click(function() {
		var val = 0;
		$(this).toggleClass('right');
		if($(this).hasClass('right')){val = 1;}
		$('#'+$(this).attr('rel')).val(val);
	});
	
	
	$('.opt-facilities').click(function(){
		var val = 0;
		$(this).find('.icon').toggleClass('blue').toggleClass('gray');
		$(this).find('.opt-label').toggleClass('blue').toggleClass('medium');
		if($(this).find('.icon').hasClass('blue')){val = 1;}
		$('#'+$(this).attr('rel')).val(val);
	});
	
	$(".slider").each(function() {
		this.Min 		= parseInt($(this).attr('min'));
		this.Max 		= parseInt($(this).attr('max'));
		this.slide 		= $('<div class="slide-content"></div>');
		this.range 		= true;
		this.values 	= [this.Min, this.Max];
		this.minText	= 'Any';
		this.maxText	= this.Max - 1 +'+';
		this.step		= 1;
		
		if($(this).hasClass('noMaxLabel')){
			this.maxText = this.Max.format();
		}
		if($(this)[0].hasAttribute('step')){
			this.step = parseInt($(this).attr('step'));	
		}
		
		this.slideLabel = $('<div class="slide-label"></div>');
		this.minLabel	= $('<div class="slide-min"></div>').appendTo(this.slideLabel);
		this.maxLabel	= $('<div class="slide-max"></div>').appendTo(this.slideLabel);
		
		$(this.slideLabel).appendTo($(this).parent());
		$(this.minLabel).text(this.minText);
		$(this.maxLabel).text(this.maxText);
		
		if($(this).hasClass('single')) {
			this.range = 'max';
			this.values = this.Min;
			$(this.slideLabel).remove();
		}
		this.slide.appendTo(this);
		
		var myslider = this;
		myslider.slide.slider({
			range	: this.range,
			min		: this.Min,
			max		: this.Max,
			step	: this.step,
			values	: this.values,
			slide	: function( event, ui ) {
				if($(myslider).hasClass('single')){
					$('#'+$(myslider).attr('rel')).val(ui.value);
					$('#'+$(myslider).attr('rel')+'-value').text(ui.value);
				}
				else{
					var minText  = parseInt(ui.values[0]).format();
					var maxText  = parseInt(ui.values[1]).format();
					if(parseInt(ui.values[0]) === parseInt(myslider.Min)){minText = myslider.minText;}
					if(parseInt(ui.values[1]) === parseInt(myslider.Max)){maxText = myslider.maxText;}
					$(myslider.minLabel).text(minText);
					$(myslider.maxLabel).text(maxText);
					$('#'+$(myslider).attr('rel')+'-min').val(ui.values[0]);
					$('#'+$(myslider).attr('rel')+'-max').val(ui.values[1]);
				}
			}
		});
	});

});
$(window).load(function() {
	"use strict";
	changeHeight();
});