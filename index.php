<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="color:#000;background-color: #171F26;background-image: url('img/background.jpeg');background-position: center center;background-size: cover;background-attachment: fixed;height:auto;width: 100%">
	<div class="row">
			<div class="col mt-5  text-center">
				<?php
					//conexão com banco de dados
					include("config.php");

					//include das páginas
					switch (@$_REQUEST['page']) {
						case 'cadastrar_novo':
							include('cadastrar_novo.php');
							break;
						case 'esqueci_senha':
							include('esqueci_senha.php');
							break;		
						case 'salvar':
							include('salvar.php');
							break;				
						default:
							include('login.php');
					}
				?>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>