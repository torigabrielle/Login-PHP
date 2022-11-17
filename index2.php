<?php
	if (!isset($_SESSION)) session_start();
    
	if (!isset($_SESSION['nome'])) {      
	    session_destroy();
	    header("Location: index.php"); exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="color:#fff;background-color: #171F26;background-image: url('img/background.jpeg');background-position: center center;background-size: cover;background-attachment: fixed;height:auto;width: 100%">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index2.php">SisLogin</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="?page=listar">Listar Usuários</a>
	        </li> 
	        <li class="nav-item">
	          <a class="nav-link" href="?page=cadastrar">Cadastrar Usuário</a>
	        </li>
			<li class="nav-item">
	          <a class="nav-link" href="?page=formulario">Envio de Email</a>
	        </li>
	       </ul>
	   </div>
        <div class="float-end">
        	<strong class="px-3">Olá <?php echo $_SESSION['nome']; ?></strong>
        	<a href="logout.php" class="btn btn-secondary">Sair</a>
        </div>	      
	    
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col mt-5 text-center">
				<?php
					//conexão com banco de dados
					include("config.php");

					//include das páginas
					switch (@$_REQUEST['page']) {
						case 'cadastrar':
							include('cadastrar.php');
							break;
						case 'editar':
							include('editar.php');
							break;
						case 'listar':
							include('listar.php');
							break;
						case 'salvar':
							include('salvar.php');
							break;
						case 'formulario':
							include('formulario.php');
							break;						
						default:
							print "<h1>Bem vindo ao clube!</h1>";
					}
				?>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>