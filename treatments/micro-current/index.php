<?php $thisPage="Micro-Current"; ?>

<?php include ("../../head.php");?>

<body id="microcurr">


<div class="container">
  <?php include "../../header.php"; ?>
    <div class="content">
    	<div class="content-inner clearfix">
	        <div class="cat-info">
    	        <h1>Micro-current</h1>
    	        	<div class="cat-image">
        	    		<img src="/images/microcurr.jpg" alt="Micro-current" />
        			</div><!--cat-image-->

        	    <ul>
        	    	<li>Non-surgical face lift</li>
        	    	<li>Procedure that sends electrical signals to the facial muscles and surrounding tissues to promote youthful,  healing energy in skin cells</li>
        	    	<li>Visibly firms and tightens deep layers of the skin</li>
        	    	<li>Minimizes fine lines and wrinkles</li> 
				</ul>
        		
        	</div><!--cat-info-->
        	

       	<div class="clearboth"></div>

		<div class="svcs-info">
			<div class="trtmtcat">
				<div class="trtmtcat-content">
					<div class="trtmt">
						<div class="trtmntdetails">
							<div class="trtmtType">
								MICRO-CURRENT WITH FACIAL
								<br />
								<span>
									cleanse &bull; prep toner &bull; exfoliating mask &bull; micro-current treatment &bull; moisturizer &bull; SPF
								</span>
							</div>
							<div class="details">
								Micro-Current is known as the 'lunch-time face lift' and can literally lift your cheek bones and eyebrows back to where they once were!
								<br /><br />
								Although a remarkable difference is seen after the first treatment, the benefits of micro-current are cumulative and typically a course of 10-12 treatments will be required for optimum results.
							</div>

							<div class="duration">
								<ul>
									<li>45 minutes: $120</li>
									<li>10 sessions: 30% off</li>
								</ul>
							</div>
							<br class="clearboth" />
						</div><!--trtmntdetails-->
					</div><!--trtmt-->
				</div><!--trtmtcat-content-->

			</div><!--trtmtcat-->
	   		<div class="trtmtcat border">
				<div class="trtmtcat-content">
					<div class="trtmt">
						<div class="trtmntdetails">
							<div class="trtmtType">
								MICRO-CURRENT AS ADD-ON
							</div>
							<div class="details">
								The most advanced treatment available to tone and firm the muscles, rehydrate and rejuvenate the skin for smoother and younger appearance.							</div>

							<div class="duration">
								<ul>
									<li>25 minutes: $55</li>
								</ul>
							</div>
							<br class="clearboth" />

						</div><!--trtmntdetails-->
					</div><!--trtmt-->
				</div><!--trtmtcat-content-->
				
			</div><!--trtmtcat-->
		</div><!--svcs-info-->

		</div><!--content-inner-->

        <?php include "../../footer.php"; ?>

	</div><!--content-->

</div><!--container-->

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/mobile.js"></script>
<script type="text/javascript" src="/js/fancybox/jquery.fancybox.js"></script>

<script>
$(document).ready(function() {
	$("#treatments").addClass("active");
	$(".trtmt-popup").fancybox({
		fitToView	: false,
		width: '600',
		height: '450',
		autoSize: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>


</body>
</html>