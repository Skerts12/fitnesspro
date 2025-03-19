<?php
include ('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitnessPro - Início</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    

<nav>
   

    <!-- Barra de Navegação -->
    <nav class="navbar">
        <a href="home.php" class="logo">

   <!-- Ícone de casa como botão -->
   <img src="images/logo-icon.png" alt="Ícone de Logo" class="icon-back">
<span>FitnessPro</span>

        </a>
        <span class="menu-toggle">&#9776;</span> <!-- Ícone do Menu Hamburger -->
        <ul>
            <li><a href="home.php">Página inicial</a></li>
            <li><a href="workouts.php">Treinos</a></li>
            <li><a href="diets.php">Dietas</a></li>


        </ul>

 <!-- Menu Dropdown do Perfil -->
 <div class="profile-dropdown">
            <img src="images/profile-icon.png" alt="Perfil" title="<?php echo $_SESSION['nome']; ?>">
            <div class="profile-dropdown-content">
                <a style="color: lightyellow;" href="logout.php?logout=true">Mudar de Conta</a><br>
                <a style="color: lightyellow;"  href="logout.php?logout=true">Sair</a>
            </div>
        </div>

    </nav>

    <!-- Barra de Progresso -->
<div class="progress-bar">
    <div class="progress-fill"></div>
</div>
    

    <!-- Hero Section -->
    <section class="hero" style="background-image: url('images/customize-bg.png');">
        <div>
            <h1>Customize Seu Treino</h1>
            <p>Escolha os exercícios que deseja incluir no seu plano.</p>
            <a href="treinos.php" class="btn" style="align-self: center;">Visualizar Exercicios</a>
        </div>

    </section>






        <!-- Corpo Superior -->
        <section class="exercise-section">
            <h2>Como funciona?</h2>
            <p>Aqui você irá vizualizar diferentes tipos de treinos para diferentes musculos incluindo não só para a parte superior do corpo mas como tambem para a parte inferior.
                Após visualizar os exercicios irá poder criar a sua própria rotina de treino para começar a entrar o melhor estado fisico e mental da sua vida.
            </p>
            <br>
            
           
        </section>
    </main>



  
    <!-- Rodapé -->
    <footer class="footer">
        <p>&copy; 2024 FitnessPro.</p>
    </footer>

    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: white;
        }

        .navbar {
            background: #1d1e1f;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            text-decoration: none;
            color: #12fa5f;
            font-size: 1.2em;
        }

        .hero {
            text-align: center;
            color: white;
            padding: 50px;
            background-size: cover;
            background-position: center;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        h2 {
            color: #12fa5f;
            margin-bottom: 10px;
        }

        /* Seção de Customização */
        .customize-section {
            padding: 40px;
        }

        .exercise-section {
            margin-bottom: 40px;
        }

        .exercise-options {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .exercise {
            background: #2a2a2b;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            width: 45%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 1.1em;
            color: #fafafa;
        }

        input[type="checkbox"] {
            transform: scale(1.2);
        }

        /* Botão Salvar */
        .btn-save {
            display: block;
            margin: 20px auto;
            padding: 15px 30px;
            background: #12fa5f;
            color: white;
            font-size: 1.2em;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .btn-save:hover {
            transform: scale(1.05);
            background: #0ef074;
        }

        /* Rodapé */
        .footer {
            background: #1d1e1f;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</body>
</html>
