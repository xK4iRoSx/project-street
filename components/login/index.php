<link rel="stylesheet" href="../components/login/style.css">
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="../modules/autenticaLogin.php" method="post">
                <div class="input-group">
                    <label for="username">Usuário</label>
                    <input type="email" id="username" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="senha" required>
                </div>
               <input class="button" type="submit" name="submit" value="Entrar">
            </form>
        </div>
    </div>

