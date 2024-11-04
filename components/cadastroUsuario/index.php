<link rel="stylesheet" href="./conponents/cadastroUsuario/style.css">
<form action="../modules/cadastroUsuario.php" method="post">
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center vh-100">
        <!-- img Logo -->
        <div class="col-lg-6">
          <div class="text-center">
            <img src="../img/icons/StreetComFundoPreto.png" alt="Logo" class="img-fluid">
          </div>
        </div>
        <!-- Tela login -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h2 class="text-center card-title mb-3 mt-2">
                CADASTRO
              </h2>
              
              <form class="container">
                <div class="row mb-2">
                  <div class="col-6">
                    <!-- Nome user -->
                    <label for="name" class="form-label">Nome</label>
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person-fill"></i>
                      </span>
                      <input name="nome" class="form-control" type="text" placeholder="Nome" aria-label="Nome" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="name" class="form-label">Sobrenome</label>
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person-fill"></i>
                      </span>
                      <input name="sobrenome" class="form-control" type="text" placeholder="Sobrenome" aria-label="Sobrenome" required>
                    </div>
                  </div>
                </div>
                <!-- Email -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                      <i class="bi bi-envelope-fill"></i>
                    </span>
                    <input name="email" class="form-control" type="search" placeholder="Email" aria-label="Email" required>
                  </div>
                </div>
                <!-- forms Password -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Password</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                      <i class="bi bi-shield-fill"></i>
                    </span>
                    <input name="senha"class="form-control" type="password" placeholder="Password" aria-label="Password" required>
                  </div>
                </div>
                <!-- Confirm Password
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                      <i class="bi bi-shield-fill"></i>
                    </span>
                    <input name="senha2" class="form-control" type="password" placeholder="Password" aria-label="Password" required>
                  </div>
                </div> -->
                <!-- Buttton -->
                <div class="text-right">
                  <input name="submit" type="submit" class="btn btn-primary d-grid col-5 mx-auto button-center mt-2" value="Cadastrar">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>