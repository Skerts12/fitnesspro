<?php
include('conexao.php');

$erro = ''; // Variável para armazenar a mensagem de erro

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        $erro = "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        $erro = "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: home.php");

        } else {
            $erro = "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/login-background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #00FF00;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1rem;
            text-align: left;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #00FF00;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #00FF00;
            color: #333;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 4px;
            position: relative;
        }

        button:hover {
            background-color: #008000;
        }

        /* Animação de ginásio */
        .loading-bar {
            width: 0;
            height: 5px;
            background-color: #FF0000;
            position: absolute;
            bottom: -8px;
            left: 0;
            transition: width 2s ease-in-out;
        }

        .loading {
            pointer-events: none;
            opacity: 0.6;
        }

        p {
            margin-top: 15px;
        }

        .error {
            color: #FF0000;
            margin-top: 10px;
        }

        .register {
            color: #12fa5f;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Acesse sua conta</h1>
        <form id="login-form" action="" method="POST" onsubmit="showLoadingAnimation()">
            <p>
                <label>E-mail</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <?php if($erro != ''): ?>
                <p class="error"><?php echo $erro; ?></p>
            <?php endif; ?>
            <p>
                <button type="submit" id="login-button">Entrar</button>
                <div class="loading-bar" id="loading-bar"></div>
            </p>
            <a style="color: #12fa5f;" href="register.php" class="btn">Criar conta</a>
        </form>
    </div>

    <script>
        function showLoadingAnimation() {
            var button = document.getElementById("login-button");
            var loadingBar = document.getElementById("loading-bar");

            // Adicionar a classe de carregamento ao botão
            button.classList.add("loading");

            // Iniciar a animação da barra de progresso
            setTimeout(function() {
                loadingBar.style.width = "100%";
            }, 100);

            // Opcionalmente, você pode ocultar a barra de carregamento depois que a animação acabar
            setTimeout(function() {
                loadingBar.style.width = "0%";
            }, 2500);
        }
    </script>
</body>
</html>
