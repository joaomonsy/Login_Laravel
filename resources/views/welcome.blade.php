<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js']) 
    <title>Login</title>
</head>
<body>
    <div class="body-container">
    <div class="container" id="container">
        <div>
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Criar conta</h1>
                <input type="text" placeholder="Nome" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Senha" />
                <div class="btn-grad" >Cadastrar</div>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Entrar</h1>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Senha" />
                <a href="#">Esqueceu sua senha?</a>
                <div class="btn-grad" >Entrar</div>
            </form>
        </div>
        </div>

        <div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem vindo de volta!</h1>
                    <p>
                        Comece de onde você parou
                    </p>
                    <div class="btn-grad" id="signIn">Entrar</div>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Olá!</h1>
                    <p>Comece a usar o site</p>
                    <div class="btn-grad" id="signUp">Cadastrar</div>
                </div>
            </div>
        </div>
        </div>
    </div>

    </div>
    <script type="text/javascript" src="resources\js\app.js"></script>
</body>
</html>
