<div class="container">
	<div class="row">
		<div class="col-lg-4 offset-lg-4 mt-5">
			<div class="card" style="padding:10px; margin: 10px;border-radius: 20px; background-color: rgba(0, 0, 0, .15);backdrop-filter: blur(8px);color: #fff">
				<div class="card-body">
					<h4 class="card-title">Cadastrar novo usuário</h4>
					<form action="?page=salvar" method="POST">
						<input type="hidden" name="acao" value="cadastrar_novo">
						<div class="mb-3">
							<input type="text" name="nome" placeholder="Nome" class="form-control" required>
						</div>
						<div class="mb-3">
							<input type="email" name="email" placeholder="E-mail" class="form-control" required>
						</div>
						<div class="mb-3">
							<input type="password" name="senha" placeholder="Senha" class="form-control" required>
						</div>
						<html>
							<head>
								<script src="https://www.google.com/recaptcha/api.js" async defer></script>
							</head>
							<body>
								<form action="?" method="POST">
								<div class="g-recaptcha" data-sitekey="6LfeWxYiAAAAAL7nee_MOw6PK73Fi0_knhtF4d-S"></div>
								<br/>
								</form>
							</body>
						</html>
						<div class="mb-3">
							<button type="submit" class="btn btn-dark mx-5">Enviar</button>
							<button class="btn btn-dark mx-5" onclick="history.back()">Voltar</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>