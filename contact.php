<?php session_start(); ?>
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
		travelLab.Contact.init();
	})
	</script>
	<!-- google api -->
	

</head>
<body id="contact">
	<div id="site-wrapper">
		
		<?php include 'includes/header.php'; ?>
		
		<div class="content">
			<section class="main-content shadow">
				<div class="inner">
					<h1>Contacto</h1>
					<div class="col-layout space-between">
						<div>
							
							<?php
							if(isset($_GET['errors'])){
								echo '<p>'.$_SESSION['errors'].'</p>';
							}
							if(isset($_SESSION['postdata'])){
								$post = $_SESSION['postdata'];
							}
							?>
							<form action="php/contact-form.php" class="contact-form bg-box" method="POST">

								<div class="col-layout">
									<label for="name">Nombre</label>
									<input type="text" id="name" name="name" <?php if(isset($post)) {echo 'value="' . $post['name'] . '"'; }?> >
								</div>
								
								<div class="col-layout">
									<label for="lastname">Apellido</label>
									<input type="text" id="lastname" name="lastname" <?php if(isset($post)) {echo 'value="' . $post['lastname'] . '"'; }?>>
								</div>
								
								
								<div class="col-layout">
									<label for="company">Nombre de la Agencia</label>
									<input type="text" id="company" name="company" <?php if(isset($post)) {echo 'value="' . $post['company'] . '"'; }?>>
								</div>
								

								<div class="col-layout">
									<label for="city">Ciudad</label>
									<input type="text" id="city" name="city" <?php if(isset($post)) {echo 'value="' . $post['city'] . '"'; }?>>
								</div>
								

								<div class="col-layout">
									<label for="country">País</label>
									<input type="text" id="country" name="country" <?php if(isset($post)) {echo 'value="' . $post['country'] . '"'; }?>>
								</div>
								

								<div class="col-layout">
									<label for="email">e-mail</label>
									<input type="text" id="email" name="email" <?php if(isset($post)) {echo 'value="' . $post['email'] . '"'; }?>>
								</div>
								
								
								<div class="col-layout">
									<label for="phone">Telefono</label>
									<input type="text" id="phone" name="phone" <?php if(isset($post)) {echo 'value="' . $post['phone'] . '"'; }?>>
								</div>
								

								<div class="col-layout">
									<label for="product">Producto de interés</label>
									<div class="custom-select">
										<select name="product" id="product">
											<option value="Tailor-Made">Tailor-Made</option>
											<option value="Temáticos">Temáticos</option>
											<option value="Regiones">Regiones</option>
											<option value="Cataluña">Cataluña</option>
										</select>
									</div>
								</div>
								<?php if(isset($post)) { ?>
								<script type="text/javascript">
									var selected = <?php echo '"'.$post['product'].'"'; ?>;
									$('#product').val(selected);
								</script>
								<?php } ?>

								<div class="col-layout">
									<label for="message">Mensaje</label>
									<textarea name="message" id="message" cols="30" rows="10"><?php if(isset($post)) {echo $post['message'] ; }?></textarea>
								</div>
								
								<p>* Campos obligatorios</p>
								<input type="submit" value="Enviar" class="send-button yellow-btn">
							</form>
						</div>

						<div>
							<h2>Datos de contacto</h2>
							<dl class="contact-info-data clearfix">
								<dt><img src="img/phone_b.png" alt="Telefono"></dt>
								<dd>+43 1 388 38 83</dd>
								<dt><img src="img/location_b.png" alt="Dirección"></dt>
								<dd>Schuttelstrasse 101/17 A-1020 Wien, Austria</dd>
								<dt><img src="img/email_b.png" alt="e-mail"></dt>
								<dd><a class="contact-email" href="mailto:produccion@travellabsolutions.com">produccion@travellabsolutions.com</a></dd>
							</dl>
							<div id="map">
								
							</div>
						</div>
					</div>
				</div>
			</section>	
		</div>
		
		<?php include 'includes/footer.php'; ?>

	</div>

</body>
</html>