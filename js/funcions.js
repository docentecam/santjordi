			$( document ).ready(function() {
		    	canviaIdioma(false);
			});

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
						ocultaES="inline";
					}
					else{
						ocultaCA="inline";
						ocultaES="none";
					}
						objetosCA=document.getElementsByClassName("CA");
						objetosES=document.getElementsByClassName("ES");

					for(i=0;i<objetosCA.length;i++){
						objetosCA[i].style.display=ocultaCA;
						objetosES[i].style.display=ocultaES;
					}
			}
					       