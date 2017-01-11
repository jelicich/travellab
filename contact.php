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

</head>
<body id="contact">
	<div id="site-wrapper">
		
		<?php include 'includes/header.php'; ?>
		
		<div class="content">
			<section class="main-content shadow">
				<div class="inner">
					<h1>Contacto</h1>
					<?php
					if(isset($_GET['errors'])){
						echo '<p>'.$_SESSION['errors'].'</p>';
					}
					?>
					<form action="php/contact-form.php" method="POST">
						<label for="name">Nombre</label>
						<input type="text" id="name" name="name"><br>
						<label for="email">e-mail</label>
						<input type="text" id="email" name="email"><br>
						<label for="phone">Telefono</label>
						<input type="text" id="phone" name="phone"><br>
						<label for="message">Mensaje</label>
						<textarea name="message" id="message" cols="30" rows="10"></textarea><br>
						<input type="submit" value="Enviar">
					</form>
				</div>
			</section>	
		</div>
		
		<?php include 'includes/footer.php'; ?>

	</div>

</body>
</html>