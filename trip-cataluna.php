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
					<h1>Cataluña</h1>
					<div class="col-layout space-between main-text">
						<div>
							<p>Las mejores experiencias de viaje en Cataluña de la mano de quienes mejor la conocen.</p> 
							<p>Barcelona como centro operativo de nuestra empresa, nos ha permitido desarrollar una importante trayectoria a través de la cual generamos excepcionales ofertas de servicios para el diseño de experiencias de viaje en la región de Cataluña, como lo son:</p>
							<ul>
								<li>Pasajes aéreos</li>
								<li>Reservas de hoteles</li>
								<li>Autobuses</li>
								<li>Tour líder</li>
								<li>Guías locales especializados</li>
								<li>Pasajes en transporte maritivo y/o fluvial</li>
								<li>Reservas en museos y monumentos</li>
								<li>Restaurantes y espectáculos</li>
							</ul>
							<p>Pertenecer a la región de Cataluña nos ha llevado a especializarnos en el diseño de experiencias exclusivas en una de las más completas y atractivas regiones turísticas de España. Los paisajes montañosos, las playas de belleza inigualable y de reconocimiento internacional, las actividades náuticas, la amplia oferta cultural y la más deliciosa oferta gastronómica posicionan a Cataluña como uno de los destinos turísticos más cotizados de Europa. </p>
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