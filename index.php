<?php include("inc/head.php");?>
	
	<div id="carouselSantJordi" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselSantJordi" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselSantJordi" data-slide-to="1"></li>
	    <li data-target="#carouselSantJordi" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div id="carouselImg1" class="carousel-item active ">
	      <img class="img-fluid" src="img/carousel_ini_lg.png" alt="gif d'un caballer llegint un llibre sobre un drac">
	    </div>
	    <div id="carouselImg2" class="carousel-item">
	      <a href="llegenda.php"><img class="img-fluid" src="img/carousel_lleg_lg.png" alt="Accès a la llegenda"></a>
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Llegenda de Sant Jordi</h5>
		  </div> 
	    </div>
	    <div id="carouselImg3" class="carousel-item">
	     <a href="festivitat.php"><img class="img-fluid" src="img/carousel_fes_lg.png" alt="Accès a la festivitat"></a>
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Festivitat de Sant Jordi</h5>
		  </div>  
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselSantJordi" role="button" data-slide="prev">
	  	<span class="sr-only">Enrere</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselSantJordi" role="button" data-slide="next">
	 	<span class="sr-only">Endavant</span>
	  </a>
	</div>
	<?php include("inc/footer.php");?>