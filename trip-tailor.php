<!DOCTYPE html>
<html>
<head>
	<title>Travel Lab Solutions- Home</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include 'includes/assets.php'; ?>

	<script type="text/javascript">
	//run scripts
	$(document).ready(function(){
		travelLab.Trip.init();
	})
	</script>

</head>
<body id="trip" class="tailor">
	<div id="site-wrapper">
		
		<?php include 'includes/header.php'; ?>
		
		<div class="content">
			<section class="main-content">
				<div class="slider-container">
					<ul class="full-width-slider">
						<li class="trip bg-1">
							<div class="inner">
								<div>
									<div class="info">
										<h1 class="title">Desarrollamos el producto tailor-made que su agencia necesita</h1>
									</div>
									<!--
									<div class="itinerary">
										<div>
											<ol>
												<li>Lisboa / </li>
												<li>Oporto / </li>
												<li>Santiago de Compostella / </li>
												<li>León / </li>
												<li>Santillada del Mar / </li>
												<li>San Sebastián / </li>
												<li>Burgos</li>
											</ol>
										</div>
										<div>
											<span>18 Noches</span>
										</div>
									</div>
									<div class="details-container">
										<ol class="details">
											<li>10 de Junio - Inicio</li>
											<li>28 de Junio - Finalización</li>
										</ol>
									</div>
									-->
								</div>	
							</div>	
						</li>

						<li class="trip bg-2">
							<div class="inner">
								<div>
									<div class="info">
										<span class="date">Junio-Septiembre 2017</span>
										<h1 class="title">Barcelona y Portugal</h1>
										<p class="description">Un viaje por la sensualidad y exuberancia de las ciudades lusitanas y la piadosa y solemne urbanidad de la España castellana</p>
									</div>
									<div class="itinerary">
										<div>
											<ol>
												<li>Lisboa / </li>
												<li>Oporto / </li>
												<li>Santiago de Compostella / </li>
												<li>León / </li>
												<li>Santillada del Mar / </li>
												<li>San Sebastián / </li>
												<li>Burgos</li>
											</ol>
										</div>
										<div>
											<span>18 Noches</span>
										</div>
									</div>
									<div class="details-container">
										<ol class="details">
											<li>10 de Junio - Inicio</li>
											<li>28 de Junio - Finalización</li>
										</ol>
									</div>
								</div>
							</div>	
						</li>
					</ul>
				</div>
				
			</section>

			<section class="secondary-content">
				<div class="inner">
					<h1>Tailor-made</h1>
					<div class="col-layout space-between main-text">
						<div>
							<p>En Travel Lab no solo diseñamos y producimos viajes, creamos experiencias únicas. Nuestra empresa cuenta especialmente con la estructura adecuada para el desarrollo del producto Tailor-Made que su agencia necesita.</p>
							<p>Ofrecemos todos los elementos que componen el viaje para armarlo de acuerdo a sus intereses.Trabajamos con una red de proveedores que se extiende por todo el continente europeo, permitiéndonos garantizar la calidad de los siguientes servicios:</p>

								<ul>
									<li>Pasajes aéreos</li>
									<li>Reservas de hoteles</li>
									<li>Autobuses</li>
									<li>Guías locales especializados</li>
									<li>Pasajes en transporte maritivo y/o fluvial</li>
									<li>Reservas en museos y monumentos</li>
									<li>Audioguías</li>
									<li>Restaurantes y espectáculos</li>
								</ul>
							<p>Además, nos destacamos por contar con el factor esencial que amalgama los demás componentes: el conocimiento del terreno. Nuestro selecto equipo de guías y ex-guías en español con muchísimos años de experiencia, constituyen el mejor plantel que pueda encontrarse en Europa. Por esto podemos generar propuestas diferentes y especiales, concebidas para el disfrute y el aprovechamiento óptimo del tiempo asegurando la satisfacción del viajero.</p>
						</div>
						<div>
							<img src="img/tailor.jpg" alt="">
						</div>
					</div>
					<!-- <div class="col-layout more-trips">
						<div class="col-layout">
							<div>
								<h2>Históricos</h2>
								<ul>
									<li><a href="#">Aeropuerto de Lisbo / Lisboa</a></li>
									<li><a href="#">Lisboa / Oporto</a></li>
									<li><a href="#">Oporto / Santiago de Compostela</a></li>
									<li><a href="#">Santiago de Compostela / León</a></li>
									<li><a href="#">León / Santillana del Mar</a></li>
									<li><a href="#">Santillana del Mar / Bilbao</a></li>
									<li><a href="#">Bilbao / San Sebastián</a></li>
									<li><a href="#">San Sebastián / Burgos</a></li>
									<li><a href="#">Burgos / Madrid</a></li>
								</ul>
							</div>
							<div>
								<h2>Gastronómicos y Vinos</h2>
								<ul>
									<li><a href="#">Aeropuerto de Lisbo / Lisboa</a></li>
									<li><a href="#">Lisboa / Oporto</a></li>
									<li><a href="#">Oporto / Santiago de Compostela</a></li>
									<li><a href="#">Santiago de Compostela / León</a></li>
									<li><a href="#">León / Santillana del Mar</a></li>
									<li><a href="#">Santillana del Mar / Bilbao</a></li>
									<li><a href="#">Bilbao / San Sebastián</a></li>
									<li><a href="#">San Sebastián / Burgos</a></li>
									<li><a href="#">Burgos / Madrid</a></li>
								</ul>
							</div>
						</div>
						<div class="col-layout">
							<!--
							<div>
								<h2>Históricos</h2>
								<ul>
									<li><a href="#">Aeropuerto de Lisbo / Lisboa</a></li>
									<li><a href="#">Lisboa / Oporto</a></li>
									<li><a href="#">Oporto / Santiago de Compostela</a></li>
									<li><a href="#">Santiago de Compostela / León</a></li>
									<li><a href="#">León / Santillana del Mar</a></li>
									<li><a href="#">Santillana del Mar / Bilbao</a></li>
									<li><a href="#">Bilbao / San Sebastián</a></li>
									<li><a href="#">San Sebastián / Burgos</a></li>
									<li><a href="#">Burgos / Madrid</a></li>
								</ul>
							</div>
							<div>
								<h2>Gastronómicos y Vinos</h2>
								<ul>
									<li><a href="#">Aeropuerto de Lisbo / Lisboa</a></li>
									<li><a href="#">Lisboa / Oporto</a></li>
									<li><a href="#">Oporto / Santiago de Compostela</a></li>
									<li><a href="#">Santiago de Compostela / León</a></li>
									<li><a href="#">León / Santillana del Mar</a></li>
									<li><a href="#">Santillana del Mar / Bilbao</a></li>
									<li><a href="#">Bilbao / San Sebastián</a></li>
									<li><a href="#">San Sebastián / Burgos</a></li>
									<li><a href="#">Burgos / Madrid</a></li>
								</ul>
							</div>
							- ->
						</div>
					</div> -->
				</div>
			</section>
		</div>
		
		<?php include 'includes/footer.php'; ?>

	</div>

</body>
</html>