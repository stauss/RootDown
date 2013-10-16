var col = $('.grid-col');

$('span', col).html($('.grid-col').width());

col.each(function(){
	var $this = $(this);
	var spanParent = $('span').parent();
	$(window).resize(function() {
		var colWidth = $('.grid-col').width();
		$('span', spanParent).html(colWidth);
	});
});










