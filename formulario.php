<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Envio de Email</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4 mt-5">
				<div class="card" style="padding:10px; margin: 10px;border-radius: 20px; background-color: rgba(0, 0, 0, .15);backdrop-filter: blur(8px);color: #fff"">
					<div class="card-body">
						<h4 class="card-title">Fale Conosco</h4>
						<form action="email.php" method="POST">
							<div class="mb-3">
								<input type="email" name="email" class="form-control" placeholder="Seu e-mail" required>
							</div>
							<div class="mb-3">
								<input type="text" name="assunto" placeholder="Assunto do e-mail" class="form-control" required>
							</div>
                            <div class="mb-3">
								<input type="text" name="msg" placeholder="Mensagem do e-mail" class="form-control" required>
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-dark">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>