$( document ).ready(function() {
   	if(!getCookie('selIdi')){
   		setCookie('selIdi','CA',365);
   	}
   	objetosCA=document.getElementsByClassName("CA");
	objetosES=document.getElementsByClassName("ES");
   	mostrarIdiomes();
   	//document.cookie = 'selIdi' +  '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
});

function getCookie(c_name){
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1){
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1){
		c_value = null;
	}
	else
	{
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1){
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
	}
	return c_value;
}
function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}
function canviaIdioma(idioma) {
	setCookie('selIdi',idioma,365);
	mostrarIdiomes();
}
function mostrarIdiomes()
{
	var ocultaCA;
	var ocultaES;
	if(getCookie('selIdi')=="ES") {
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


function agrandaDiv(num){
	
	document.getElementById("myModal"+num).style.display = "block";
}
function tancaDiv(num)
{
	document.getElementById("myModal"+num).style.display = "none";
}

// Get the modal
			// var modal = document.getElementById('myModal');

			// // Get the image and insert it inside the modal - use its "alt" text as a caption
			// var img = document.getElementById('myImg');
			// var modalImg = document.getElementById("img01");
			// //var captionText = document.getElementById("caption");
			// img.onclick = function(){
			//     modal.style.display = "block";
			//     //modalImg.src = this.src;
			//     //captionText.innerHTML = this.alt;
			// }

			// // Get the <span> element that closes the modal
			// var span = document.getElementsByClassName("close")[0];

			// // When the user clicks on <span> (x), close the modal
			// span.onclick = function() {
			//   modal.style.display = "none";
			// }
			//}

// $('#myModal').on('shown.bs.modal', function () {
// 	$('#myInput').trigger('focus')
// })

// function canviaIdioma(idioma) {
// 	var ocultaCA;
// 	var ocultaES;
					
// 					if(idioma) {
// 						ocultaCA="none";
// 						ocultaES="inline";
// 					}
// 					else{
// 						ocultaCA="inline";
// 						ocultaES="none";
// 					}
// 						objetosCA=document.getElementsByClassName("CA");
// 						objetosES=document.getElementsByClassName("ES");

// 					for(i=0;i<objetosCA.length;i++){
// 						objetosCA[i].style.display=ocultaCA;
// 						objetosES[i].style.display=ocultaES;
// 					}
// 			}

// 			// window_layer{
// 			function muestraDes()
// 			{
// 				var modal = document.getElementById('myModal');
// 				img.onclick = function(){
// 				    modal.style.display = "block";
// 				    modalImg.src = this.src;
// 				    //captionText.innerHTML = this.alt;
// 				}
// 				var span = document.getElementsByClassName("close")[0];
// 				span.onclick = function() {
// 				  modal.style.display = "none";
// 				}
// 			}


// function mostrarDesglossament(idDiv) {
// 	divMostrar = document.getElementById(idDiv);
// 	divMostrar.style.display = 'block';
// 	console.log("arriba");
// }
// function tancarDesglossament(idDiv) {
// 	divOcultar = document.getElementById(idDiv);
// 	divOcultar.style.display = 'none';
// }


