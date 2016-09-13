<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/mobile.js"></script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-79742808-1', 'auto');
  ga('send', 'pageview');
 
</script>

<?php
if (in_array($_SERVER['REQUEST_URI'],array('/','/index.php'))) {
	echo '<script type="text/javascript" src="/js/custombx.js"></script>
<script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.fitvids.js"></script>
';
	
} elseif(in_array($_SERVER['REQUEST_URI'],array('/treatments/body/','/treatments/peels/','/treatments/micro-current/','/treatments/skin-conditions/','/treatments/electrolysis/'))) {
	echo '<script type="text/javascript">
	$(document).ready(function () {
		$("#treatments").addClass("active");
	});
</script>
';
	
} elseif (in_array($_SERVER['REQUEST_URI'],array('/treatments/facials/','/treatments/micro-dermabrasion/','/treatments/light-therapy/','/treatments/hydrafacial/','/treatments/facials/index_test.php'))) {
	echo '<script type="text/javascript" src="/js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="/js/fancy.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#treatments").addClass("active");
	});
</script>
';
	
} elseif ($_SERVER['REQUEST_URI'] == '/treatments/lashes/') {
echo '<script type="text/javascript" src="/js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="/js/fancy.js"></script>
';
} elseif ($_SERVER['REQUEST_URI'] == '/treatments/waxing/') {
echo '<script type="text/javascript" src="/js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
';

} elseif ($_SERVER['REQUEST_URI'] == '/products/') {
echo '<script type="text/javascript">
	$(document).ready(function () {
		$("#products").addClass("active");
	});
</script>
';

} elseif ($_SERVER['REQUEST_URI'] == '/spray-tan/') {
echo '<script type="text/javascript">
	$(document).ready(function () {
		$("#spraytan").addClass("active");
	});
</script>
';

} elseif ($_SERVER['REQUEST_URI'] == '/about/gallery.php') {
echo '<script type="text/javascript" src="/js/custombx.js"></script>
<script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.fitvids.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#about").addClass("active");
	});
</script>';
} elseif (in_array($_SERVER['REQUEST_URI'],array('/about/policy.php','/about/bio.php'))) {
echo '<script>
$(document).ready(function () {
	$("#about").addClass("active");
});
</script>
'; }
?>





