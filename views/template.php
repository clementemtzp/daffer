<!DOCTYPE html>
<html>
<head>
	<title>Daffer Consultores</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="views/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>	
	<?php 
		$enlaces=new Mvc();
		$enlaces->enlacesController();
	 ?>
	<footer>
		<div class="container">
			<div class="col-md-4">
				<p>&copy<?=date('Y')?> Dafer Consultores SC</p>
			</div>
			<div class="col-md-4">
				<p class="text-center">01 (951) 205 1451</p>
				<p class="text-center">contacto@daferconsultores.com</p>
				<p class="text-center">Ave Hidalgo, 1706 int. 1, Centro, Oaxaca de Juárez, Oaxaca, Méx.</p>
			</div>
			<div class="col-md-4">
				<p class="text-right">
					<a href="https://www.facebook.com/Dafer-Consultores-616320678432628/" target="_blank"><i class="fa fa-facebook fa-3x rs"></i></a>
					<a href="https://twitter.com/DaferFiscal" target="_blank"><i class="fa fa-twitter fa-3x rs"></i></a>
				</p>
			</div>

		</div>
		<p class="text-center"><i class="fa fa-code"></i> by <a href="http://emtycorp.com.mx/software" target="_blank">Emty Software</a></p>
	</footer>
	<script type="text/javascript" src="views/js/jquery.js"></script>
	<script type="text/javascript" src="views/js/bootstrap.min.js"></script>
</body>
</html>