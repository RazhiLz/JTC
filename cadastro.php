<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Dev Envolvente</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:900&family=Roboto:300,400,500,700,900&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdbootstrap4-pro@1.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdbootstrap4-pro@1.1.0/css/mdb.min.css">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="container-login">
        <div class="login-box">
            <div class="box-user">
                <h2 class="h1 my-5" style="font-weight: 800; font-family:sans-serif">Cadastro</h2>
                <!-- Formulário único para cadastro -->
                <form class="text-center" action="register.php" method="post">
                    <!-- Nome -->
                    <div class="md-form my-5">
                        <input type="text" name="nome" id="materialRegisterFormName" class="form-control" required>
                        <label for="materialRegisterFormName">Nome</label>
                    </div>

                    <!-- Email -->
                    <div class="md-form my-5">
                        <input type="email" name="email" id="materialRegisterFormEmail" class="form-control" aria-describedby="materialRegisterFormEmailHelpBlock" required>
                        <label for="materialRegisterFormEmail">Email</label>
                    </div>

                    <!-- Senha -->
                    <div class="md-form my-5">
                        <input type="password" name="senha" id="materialRegisterFormPassword" class="form-control" required>
                        <label for="materialRegisterFormPassword">Senha</label>
                    </div>

                    <!-- Botão de Cadastrar -->
                    <button class="btn btn-primary btn-rounded btn-block waves-effect z-depth-0" type="submit">Cadastrar</button>
                </form>
                <div>
                     <a href="account.php" > Já tem conta? Faça o login aqui!</a>
                </div>
            </div>
        </div>
        <div class="gradient-bg"></div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdbootstrap4-pro@1.1.0/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdbootstrap4-pro@1.1.0/js/popper.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdbootstrap4-pro@1.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdbootstrap4-pro@1.1.0/js/mdb.min.js"></script>
</body>
</html>
