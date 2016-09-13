$(document).ready( function () {
		$(".trtmt-popup").fancybox({
			fitToView	: false,
			width: '600',
			height: '450',
			autoSize: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});

$(".fancybox").click(function() {
	$.fancybox([
		'/images/lashclient1.jpg',
		'/images/lashclient.jpg',
		'/images/lashclient2.jpg',
		'/images/lashclient3.jpg'				
	],	{
		fitToView	: false,
		//width: '600',
		//height: '450',
		autoSize: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
		});
	});

$(".hydra").click(function() {
	$.fancybox([
		'/images/hydraclient1.jpg',
		'/images/hydraclient2.jpg',
		'/images/hydraclient3.jpg'				
	],	{
		fitToView	: false,
		autoSize: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
		});
	});


});