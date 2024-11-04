<link rel="stylesheet" href="../components/loginUsuario/style.css">
<div class="container d-flex justify-content-center align-items-center mb-5 mt-4">
    <div class="row">
      <!-- img Painel -->
      <div class="card" style="width: 30rem ;">
        <img src="../img/icons/3.png" class="card-img-top mt-2" alt="logo">
        <div class="card-body">
          <h5 class="card-title text-center">LOGIN </h5>
          <!-- forms cadastro -->
          <form class="container" action="../modules/autenticaLoginUsuario.php" method="post">
            <div class="row">
              <!-- forms Email -->
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-envelope-fill"></i>
                  </span>
                  <input name="email" class="form-control" type="email" placeholder="Email" aria-label="Email" required>
                </div>
              </div>
              <!-- forms Password -->
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-shield-fill"></i>
                  </span>
                  <input name="senha" class="form-control" type="password" placeholder="Password" aria-label="Password" required>
                </div>
              </div>
              <!-- CheckBox -->
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Lembrar Acesso</label>
                </div>
                <div class="reset">
                  <a href="#">Esqueci a Senha</a>
                </div>
              </div>
              <!-- forms Button -->
              <button name="submit" type="submit" class="btn btn-primary d-grid col-5 mx-auto button-center">Entrar</button>
              <div class="reset">
                <a href="./index.php?pagina=cadastro">não tenho cadastro</a>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>