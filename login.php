<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4 mt-5">
            <div class="card" style="padding:10px; margin: 10px;border-radius: 20px; background-color: rgba(0, 0, 0, .15);backdrop-filter: blur(8px);color: #fff">
                <div class="card-body">
                    <h4 class="card-title">Realize seu login</h4>
                    <form action="verificar.php" method="POST">
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="senha" placeholder="Senha" class="form-control" required>
                        </div>
                        <div class="mt-4 mb-2">
                            <button type="submit" class="btn btn-dark">Acesso</button>
                        </div>
                        <div class="mb-1">
                            <a class="btn btn-link" href="?page=esqueci_senha">Esqueceu a senha?</a>
                            <a class="px-3 btn btn-link" href="?page=cadastrar_novo">Criar nova conta!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>