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

			// window_layer{
			function muestraDes()
			{
				var modal = document.getElementById('myModal');
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    //captionText.innerHTML = this.alt;
				}
				var span = document.getElementsByClassName("close")[0];
				span.onclick = function() {
				  modal.style.display = "none";
				}
			}


			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById('myImg');
			var modalImg = document.getElementById("img01");
			//var captionText = document.getElementById("caption");
			img.onclick = function(){
			    modal.style.display = "block";
			    //modalImg.src = this.src;
			    //captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			  modal.style.display = "none";
			}
			//}




					       