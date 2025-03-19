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

<section class="hero">
    <div>
        <h1>Yoga</h1>
        
        <p>A melhor forma de melhorar a sua mobilidade como nunca</p>
    
        
    </div>
</section>
<body>





   
</body>



</head>





</html>