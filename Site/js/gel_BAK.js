
$(document).ready(function(){

// Function For Coverting coloes to hex

function hexc(colorval) {
	var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	delete(parts[0]);
	for (var i = 1; i <= 3; ++i) {
		parts[i] = parseInt(parts[i]).toString(16);
		if (parts[i].length == 1) parts[i] = '0' + parts[i];
	}
	hexColor = '#' + parts.join('');
}
			

	
///////////////////////// Header Settings


$('.h').each(function(){

		// Pass var fontColor in hex change function then apply
		var fontColor = $(this).css('color');
		hexc(fontColor);
		$('.cr1 i').html("P Color " + hexColor + " | ");

		// Get H Size
		fontSize = parseInt($(this).css("font-size"));
		$('.h-size', this).html(fontSize + "px");

		// Get H Letter Spacing
		letterSpacing = $(this).css("letter-spacing");
		$('.cr1 em', this).html("Letter Spacing " + letterSpacing);

});


///////////////////////// End Header Settings


///////////////////////// P settings

$('.main-p').each(function(){

	// Pass var fontColor in hex change function then apply
	var pColor = $(this).css("color");
	hexc(pColor);
	$('.p-size').html("P Color " + hexColor + " | ");

	// Get p LS
	pLs = $(this).css("letter-spacing");
	$('.p-ls').html("letter Spacing " + pLs + " | ");

	// Get p LS
	pLh = $(this).css("line-height");
	$('.p-lh').html("Line Height " + pLh + " | ");

	// Pass var fontColor in hex change function then apply
	var linkColor = $('a', this).css("color");
	hexc(linkColor);
	$('.p-linkcolor').html("A Color " + hexColor);

	// Get P color and Convert to Hex
	//pColor = $(this).css("color");
	//$('.p-size').html("P Color " + pColor + " | ");

});

///////////////////////// End P Section Code


// UL settings

	$('.lists ul').each(function(){
				
			// Get UL Size
			ulSize = parseInt($(this).css("font-size"));
			$('.ul-size').html(ulSize + "px | ");
			
			// Get UL LS
			ulLs = $(this).css("letter-spacing");
			$('.ul-ls').html("letter Spacing " + ulLs + " | ");

			// Get UL LS
			ulLh = $(this).css("line-height");
			$('.ul-lh').html("Line Height " + ulLh);

	});

// OL settings

	$('.lists ul').each(function(){
				
			// Get ol Size
			olSize = parseInt($(this).css("font-size"));
			$('.ol-size').html(olSize + "px | ");
			
			// Get ol LS
			olLs = $(this).css("letter-spacing");
			$('.ol-ls').html("letter Spacing " + olLs + " | ");

			// Get ol LS
			olLh = $(this).css("line-height");
			$('.ol-lh').html("Line Height " + olLh);

	});

///////////////////////// End UL OL Section Code


// Swatches settings

	$('.color-top').each(function(){

		// Get bg color
		bgColor = parseInt($(this).css("background-color"));
		$('.color-top', this).html(bgColor);

	});

///////////////////////// End Swatches Code

});

