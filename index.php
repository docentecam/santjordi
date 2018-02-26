<?php include("inc/head.php");?>
	
	<div id="carouselSantJordi" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselSantJordi" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselSantJordi" data-slide-to="1"></li>
	    <li data-target="#carouselSantJordi" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100 img-fluid" src="img/ruta-medieval-montblanc-sant-jordi.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <a href="llegenda.php"><img class="d-block w-100 img-fluid" src="img/santjordi.jpg" alt="Second slide"></a>
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Llegenda de Sant Jordi</h5>
		  </div> 
	    </div>
	    <div class="carousel-item">
	     <a href="festivitat.php"><img class="d-block w-100 img-fluid" src="img/sant-jordi-llibre-i-roses1-1748x984.jpg" alt="Third slide"></a>
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Festivitat de Sant Jordi</h5>
		  </div>  
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselSantJordi" role="button" data-slide="prev">
	   <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselSantJordi" role="button" data-slide="next">
	   <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	
<?php include("inc/footer.php");?>