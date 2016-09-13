$(document).ready (function() {

	$("#treatments").addClass("active");

	$("#products").addClass("active");

	$("#spraytan").addClass("active");

	function nWin() {
		var w = window.open();
  		var html = $("#toNewWindow").html();

    	$(w.document.body).html(html);
	}

});


