<?php
include('conexao.php');

$erro = ''; // Variável para armazenar a mensagem de erro
$sucesso = ''; // Variável para armazenar a mensagem de sucesso

// Verifica se o formulário foi enviado
if(isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {

    // Verifica se os campos estão preenchidos
    if(strlen($_POST['nome']) == 0) {
        $erro = "Preencha seu nome";
    } else if(strlen($_POST['email']) == 0) {
        $erro = "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        $erro = "Preencha sua senha";
    } else {
        // Sanitiza os dados
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // Verifica se o email já está cadastrado
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code);

        if($sql_query->num_rows > 0) {
            $erro = "Este e-mail já está cadastrado!";
        } else {
            // Agora, NÃO estamos mais criptografando a senha, ela será salva diretamente
            // Insere o novo usuário no banco de dados
            $sql_code = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            if($mysqli->query($sql_code)) {
                $sucesso = "Cadastro realizado com sucesso!";
            } else {
                $erro = "Erro ao cadastrar. Tente novamente.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Conta</title>
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
            background-color: rgba(0, 0, 0, 0.7); /* black with transparency */
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #00FF00; /* Green color */
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
        }

        button:hover {
            background-color: #008000;
        }

        p {
            margin-top: 15px;
        }

        .error {
            color: #FF0000; /* Red color for error message */
            margin-top: 10px;
        }

        .success {
            color: #12fa5f; /* Green color for success message */
            margin-top: 10px;
        }

        .register {
            color: #12fa5f;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Crie sua conta</h1>
        <form action="" method="POST">
            <p>
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : ''; ?>">
            </p>
            <p>
                <label>E-mail</label>
                <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>

            <?php if($erro != ''): ?>
                <p class="error"><?php echo $erro; ?></p>
            <?php endif; ?>

            <?php if($sucesso != ''): ?>
                <p class="success"><?php echo $sucesso; ?></p>
            <?php endif; ?>

            <p>
                <button type="submit">Cadastrar</button>
            </p>
            <p>
                <a href="index.php" class="register">Já tem uma conta? Faça login</a>
            </p>
        </form>
    </div>
</body>
</html>
