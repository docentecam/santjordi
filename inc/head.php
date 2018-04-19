<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sant Jordi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-lightbox.css">
		<link rel="icon" href="img/favicon.png" type="image/x-icon">
		<script type="text/javascript">
			$('#myModal').on('shown.bs.modal', function () {
  				$('#myInput').trigger('focus')
			})
			function mostrarDesglossament(idDiv) {
	            divMostrar = document.getElementById(idDiv);
	            divMostrar.style.display = 'block';
	            console.log("arriba");
	        }

	        function tancarDesglossament(idDiv) {
	            divOcultar = document.getElementById(idDiv);
	            divOcultar.style.display = 'none';
	        }
	        function canviaIdioma(idioma) {
					
					var ocultaCA;
					var ocultaES;
					
					if(idioma) {
						ocultaCA="none";
						ocultaES="block";
					}
					else{
						ocultaCA="block";
						ocultaES="none";
					}
						objetosCA=document.getElementsByClassName("CA");
						objetosES=document.getElementsByClassName("ES");

					for(i=0;i<objetosCA.length;i++){
						objetosCA[i].style.display=ocultaCA;
						objetosES[i].style.display=ocultaES;
					}
			}
					       
		</script>
	</head>
	<body>
		<?php include("header.php");?>