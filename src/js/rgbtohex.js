// STARTING RGB TO HEX

(function () {
    'use strict';

    var	shadesElements = $('.shades__color'),
    	shadesColor;



    // Convert RGB to HEX
    function hexc(colorval) {
    	var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    	delete(parts[0]);
    	for (var i = 1; i <= 3; ++i) {
    		parts[i] = parseInt(parts[i]).toString(16);
    		if (parts[i].length == 1) parts[i] = '0' + parts[i];
    	}
    	shadesColor = '#' + parts.join('');
    }

    if (shadesElements.length){
    	// Get backgorund color from MAP and translate to HEX
    	shadesElements.each(function() {
    		var shadesBG = $(this).css('background-color');
    		hexc(shadesBG);
    		$(this).append('<div class="shades__description">' + shadesColor + '</div>');
    	});

    	// Show elements on click
    	shadesElements.click(function() {
    		shadesElements.removeClass('js-open');
    		$(this).addClass('js-open');
    	});
    }

}());