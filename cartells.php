<?php include("inc/head.php");?>
	<div class="row">
		<!-- TODO: aplicar mx a los titulos y a los carteles -->
		<div class="col-10 d-none d-sm-block txtTitles text-center mx-2">
			<h1>Els cartells</h1>
		</div>
	</div>
	<div class="row">
		<!-- TODO:opacitat w3school estructura-->
		<div class="col-12 col-md-4 col-lg-3">
			<div class="col-md-8 text-center offset-2">
				<img id="myImg" src="img/cartells/cartell1.png" class="img-fluid">
			</div>
			<div class="col-10 text-center mx-2 ">
				Marina Aguiló
			</div>
			<!-- TODO:opacitat w3school -->
			<div id="myModal" class="modal">
			  <!-- The Close Button -->
			  	<div class="close col-12 d-flex justify-content-end">
					<img src="img/cartells/proposta2TancarReduida.png" class="img-fluid">
			 	</div>
			  <!-- Modal Content (The Image) -->
			  <img class="modal-content" id="img01">
			  <!-- Modal Caption (Image Text) -->
			  	<div class="row">
					<!-- TODO: copy -->
					<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4">
						<img src="img/cartells/cartellAlumne1.png" class="img-fluid">
					</div>
					<!-- TODO: copy -->
					<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
							<!-- TODO: copy -->
							<div class="col-12 col-lg-12 d-flex align-items-end" style="color:#FFFFFF;">
								<img src="img/cartells/cartellFoto1.png" class="img-fluid " >&nbsp;&nbsp;&nbsp;Marina Aguiló
							</div>
							<div class="col-12 col-lg-12 mt-lg-4" style="color:#FFFFFF;">
								<p>
									Els llibres et transporten a un món de fantasia i imaginació al mateix temps que et permeten viure mil històries. 
									El meu pòster de Sant Jordi representa una nena llegint.La nena es troba pujada a una escala tan llarga que arriba als núvols.Durant la lectura, un dels núvols es transforma en un drac. Els núvols estan fets amb plastilina i posteriorment fotografiats.
								</p>
							</div>
					</div>	
				</div>
			</div>
		</div>

	</div>	
	

	<div class="row">
		<div class="col-12 col-md-4 col-lg-3">
			<a class="noLink" href="javascript:mostrarDesglossament('desgAlum1');">
				<div class="col-md-8 text-center offset-2">
					<img class="img-fluid" src="img/cartells/cartell1.png">
				</div>
			</a>
			<div class="col-10 text-center mx-2 ">
				Marina Aguiló
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3">
			<a class="noLink" href="javascript:mostrarDesglossament('desgAlum2');">
				<div class="col-md-8 text-center offset-2">
					<img class="img-fluid" src="img/cartells/cartell2.png">
				</div>
			</a>
			<div class="col-10 text-center mx-2">
				Rebeca Burgos
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3">
			<a class="noLink" href="javascript:mostrarDesglossament('desgAlum3');">
				<div class="col-md-8 text-center offset-2">
					<img class="img-fluid" src="img/cartells/cartell3.png">
				</div>
			</a>
			<div class="col-10 text-center mx-2"> 
				Mari Cazorla
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3">
			<a class="noLink" href="javascript:mostrarDesglossament('desgAlum4');">
				<div class="col-md-8 text-center offset-2">
					<img class="img-fluid" src="img/cartells/cartell4.png">
				</div>
			</a>
			<div class="col-10 text-center mx-2"> 
				Ana Del Campo
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3">
			<a class="noLink" href="javascript:mostrarDesglossament('desgAlum5');">
				<div class="col-md-8 text-center offset-2">
					<img class="img-fluid" src="img/cartells/cartell5.png">
				</div>
			</a>	
			<div class="col-10 text-center mx-2">
				Sara Garcimartín
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3">
			<a class="noLink" href="javascript:mostrarDesglossament('desgAlum6');">
				<div class="col-md-8 text-center offset-2">
					<img class="img-fluid" src="img/cartells/cartell6.png">
				</div>
			</a>	
			<div class="col-10 text-center mx-2">
				Belén Garrido	
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3">
			<a class="noLink" href="javascript:mostrarDesglossament('desgAlum7');">
				<div class="col-md-8 text-center offset-2">
					<img class="img-fluid" src="img/cartells/cartell7.png">
				</div>
			</a>	
			<div class="col-10 text-center mx-2">			
				Rosa Gilibert
			</div>		
		</div>
		<div class="col-12 col-md-4 col-lg-3">
			<a class="noLink" href="javascript:mostrarDesglossament('desgAlum8');">
				<div class="col-md-8 text-center offset-2">
					<img class="img-fluid" src="img/cartells/cartell8.png">
				</div>
			</a>	
			<div class="col-10 text-center mx-2"> 
				Pol Viñas
			</div>		
		</div>
	</div>
		<!-- TODO:version div de prueba-->
		<div id="desgAlum1" class="mostraDiv">
			<div class="row">
				<!-- TODO: copy -->
				<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4 noOpacity">
					<img src="img/cartells/cartellAlumne1.png" class="img-fluid">
				</div>
				<!-- TODO: copy -->
				<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
					<div class="row">
						<!-- TODO: copy -->
						<div class="col-12 d-flex justify-content-end">
							<a href="javascript:tancarDesglossament('desgAlum1');"><img src="img/cartells/proposta2TancarReduida.png" class="img-fluid"></a>
						</div>
						<!-- TODO: copy -->
						<div class="col-12 col-lg-12 d-flex align-items-end">
							<img src="img/cartells/cartellFoto1.png" class="img-fluid ">&nbsp;&nbsp;&nbsp;Marina Aguiló
						</div>
						<div class="col-12 col-lg-12 mt-lg-4">
							<p>
								Els llibres et transporten a un món de fantasia i imaginació al mateix temps que et permeten viure mil històries. 
								El meu pòster de Sant Jordi representa una nena llegint.La nena es troba pujada a una escala tan llarga que arriba als núvols.Durant la lectura, un dels núvols es transforma en un drac. Els núvols estan fets amb plastilina i posteriorment fotografiats.
							</p>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		<!-- TODO:style="background-color: #c2ffc2" -->
		<div id="desgAlum2" class="mostraDiv">
			<div class="row">
				<!-- TODO: copy -->
				<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4 noOpacity">
					<img src="img/cartells/cartellAlumne2.png" class="img-fluid">
				</div>
				<!-- TODO: copy -->
				<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
					<div class="row">
						<!-- TODO: copy -->
						<div class="col-12 d-flex justify-content-end">
							<a href="javascript:tancarDesglossament('desgAlum2');"><img src="img/cartells/proposta2TancarReduida.png" class="img-fluid"></a>
						</div>
						<!-- TODO: copy -->
						<div class="col-12 col-lg-12 d-flex align-items-end">
							<img src="img/cartells/cartellFoto2.png" class="img-fluid ">&nbsp;&nbsp;&nbsp;Rebeca Burgos
						</div>
						<div class="col-12 col-lg-12 mt-lg-4">
							<p>
								El dragón pequeño, hecho de plastilina, intenta acercar a los niños a los libros y ver que los monstruos pueden ser monos.El resto del cartel está realizado con Photoshop e Illustrator, dando efecto de plastilina para unificarlo todo. 
							</p>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		<div id="desgAlum3" class="mostraDiv">
			<div class="row">
				<!-- TODO: copy -->
				<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4 noOpacity">
					<img src="img/cartells/cartellAlumne3.png" class="img-fluid">
				</div>
				<!-- TODO: copy -->
				<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
					<div class="row">
						<!-- TODO: copy -->
						<div class="col-12 d-flex justify-content-end">
							<a href="javascript:tancarDesglossament('desgAlum3');"><img src="img/cartells/proposta2TancarReduida.png" class="img-fluid"></a>
						</div>
						<!-- TODO: copy -->
						<div class="col-12 col-lg-12 d-flex align-items-end">
							<img src="img/cartells/cartellFoto3.png" class="img-fluid ">&nbsp;&nbsp;&nbsp;Mari Cazorla
						</div>
						<div class="col-12 col-lg-12 mt-lg-4">
							<p>
								Con este proyecto artístico quería mezclar una técnica digital junto con una técnica mucho más manual, representando la cola del dragón de Sant Jordi que se acaba transformando en una rosa. 
								Me interesaba hacer una transición de ambas técnicas jugando con los colores, texturas y sombras.
							</p>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		<div id="desgAlum4" class="mostraDiv">
			<div class="row">
				<!-- TODO: copy -->
				<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4 noOpacity">
					<img src="img/cartells/cartellAlumne4.png" class="img-fluid">
				</div>
				<!-- TODO: copy -->
				<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
					<div class="row">
						<!-- TODO: copy -->
						<div class="col-12 d-flex justify-content-end">
							<a href="javascript:tancarDesglossament('desgAlum4');"><img src="img/cartells/proposta2TancarReduida.png" class="img-fluid"></a>
						</div>
						<!-- TODO: copy -->
						<div class="col-12 col-lg-12 d-flex align-items-end">
							<img src="img/cartells/cartellFoto4.png" class="img-fluid ">&nbsp;&nbsp;&nbsp;Ana Del Campo
						</div>
						<div class="col-12 col-lg-12 mt-lg-4">
							<p>
								En mi póster quería recrear una rosa en su maceta. Para eso, utilizando plastilina, he creado la rosa pétalo a pétalo, intentado que parezca lo más realista posible. Luego, continué con las hojas buscando la textura perfecta con luces y cambié la maceta por un libro hecho en plastilina. Por último usando Illustrator substituí el tallo de la rosa por la frase "Sant Jordi 2018".
							</p>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		<div id="desgAlum5" class="mostraDiv">
			<div class="row">
				<!-- TODO: copy -->
				<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4 noOpacity">
					<img src="img/cartells/cartellAlumne5.png" class="img-fluid">
				</div>
				<!-- TODO: copy -->
				<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
					<div class="row">
						<!-- TODO: copy -->
						<div class="col-12 d-flex justify-content-end">
							<a href="javascript:tancarDesglossament('desgAlum5');"><img src="img/cartells/proposta2TancarReduida.png" class="img-fluid"></a>
						</div>
						<!-- TODO: copy -->
						<div class="col-12 col-lg-12 d-flex align-items-end">
							<img src="img/cartells/cartellFoto5.png" class="img-fluid ">&nbsp;&nbsp;&nbsp;Sara Garcimartín
						</div>
						<div class="col-12 col-lg-12 mt-lg-4">
							<p>
								Mi póster representa una cola de dragón que tiene como función ser un punto de libro. Mezclando técnicas manuales y digitales, he trabajado principalmente con tipografía. El libro fue creado con plastilina, illustrator y photoshop. Con este póster quiero expresar que, a veces, en los pequeños detalles como podría ser un punto de libro, se esconden grandes cosas. ¡Feliz Sant Jordi!
							</p>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		<div id="desgAlum6" class="mostraDiv">
			<div class="row">
				<!-- TODO: copy -->
				<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4 noOpacity">
					<img src="img/cartells/cartellAlumne6.png" class="img-fluid">
				</div>
				<!-- TODO: copy -->
				<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
					<div class="row">
						<!-- TODO: copy -->
						<div class="col-12 d-flex justify-content-end">
							<a href="javascript:tancarDesglossament('desgAlum6');"><img src="img/cartells/proposta2TancarReduida.png" class="img-fluid"></a>
						</div>
						<!-- TODO: copy -->
						<div class="col-12 col-lg-12 d-flex align-items-end">
							<img src="img/cartells/cartellFoto6.png" class="img-fluid ">&nbsp;&nbsp;&nbsp;Belén Garrido
						</div>
						<div class="col-12 col-lg-12 mt-lg-4">
							<p>
								Cualquier mujer puede ser una guerrera, una Santa Jordina. Da igual el color de piel que tengas, si eres más alta, más baja, rubia o morena.
							</p>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		<div id="desgAlum7" class="mostraDiv">
			<div class="row">
				<!-- TODO: copy -->
				<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4 noOpacity">
					<img src="img/cartells/cartellAlumne7.png" class="img-fluid">
				</div>
				<!-- TODO: copy -->
				<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
					<div class="row">
						<!-- TODO: copy -->
						<div class="col-12 d-flex justify-content-end">
							<a href="javascript:tancarDesglossament('desgAlum7');"><img src="img/cartells/proposta2TancarReduida.png" class="img-fluid"></a>
						</div>
						<!-- TODO: copy -->
						<div class="col-12 col-lg-12 d-flex align-items-end">
							<img src="img/cartells/cartellFoto7.png" class="img-fluid ">&nbsp;&nbsp;&nbsp;Rosa Gilibert
						</div>
						<div class="col-12 col-lg-12 mt-lg-4">
							<p>
								La meva intenció des d’un principi va ser sortir de la monotonia del que representa Sant Jordi i demostrar la estima que tinc a Barcelona. El mar està inspirat amb l’estil tant característic de Gaudí, el Trencadís. 
								La cua de drac i la lluna estan fetes amb plastilina. El mar, l’skyline de Barcelona i el cel estan fets amb Illustrator.
							</p>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		<div id="desgAlum8" class="mostraDiv">
			<div class="row">
				<!-- TODO: copy -->
				<div class="col-12 col-md-4 col-lg-4 offset-lg-1 mt-lg-4 noOpacity">
					<img src="img/cartells/cartellAlumne8.png" class="img-fluid">
				</div>
				<!-- TODO: copy -->
				<div class="col-12 col-lg-4 mt-lg-4 ml-lg-3">
					<div class="row">
						<!-- TODO: copy -->
						<div class="col-12 d-flex justify-content-end">
							<a href="javascript:tancarDesglossament('desgAlum8');"><img src="img/cartells/proposta2TancarReduida.png" class="img-fluid"></a>
						</div>
						<!-- TODO: copy -->
						<div class="col-12 col-lg-12 d-flex align-items-end">
							<img src="img/cartells/cartellFoto8.png" class="img-fluid ">&nbsp;&nbsp;&nbsp;Pol Viñas
						</div>
						<div class="col-12 col-lg-12 mt-lg-4">
							<p>
								Mi idea es trasladar la leyenda de Sant Jordi a la época actual, sustituyendo el caballo del héroe por un coche, rescatando a la princesa y a la última oveja del pueblo.
							</p>
						</div>
					</div>	
				</div>	
			</div>
		</div>
<?php include("inc/footer.php");?>
