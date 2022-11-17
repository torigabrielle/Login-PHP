<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4 mt-5">
            <div class="card" style="padding:10px; margin: 10px;border-radius: 20px; background-color: rgba(0, 0, 0, .15);backdrop-filter: blur(8px);color: #fff">
                <div class="card-body">
                    <h4 class="card-title">Recuperação de senha</h4>
                    <form action="recup_senha.php" method="POST">
                        <div class="mb-3">
                            <label >Insira um e-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-dark mx-5">Enviar</button>
							<button class="btn btn-dark mx-5" onclick="">Voltar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>