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

    <!-- Seção Hero -->
    <section class="hero" style="background-image: url('images/workouts-bg.jpg');">
        <div>
            <h1>Nossos Treinos</h1>
            <p>Descubra uma variedade de treinos projetados para ajudá-lo a construir força, resistência e flexibilidade.</p>
            
            <a href="#workout-plans" class="btn">Explorar Treinos</a>
        
            
        </div>
        
    </section>

    <!-- Seção de Treinos -->
    <section class="section" id="workout-plans">
        <div class="container">
            <h2>Planos de Treino</h2>

            <div class="cards">
            <a href="cardio.php" class="card-link">
                <div class="card">
                    <img src="images/cardio.jpg" alt="Treino Cardio" loading="lazy">
                    <h3>Cardio Explosivo</h3>
                    <p>Melhore sua saúde cardiovascular com exercícios cardio de alta intensidade no nosso website.</p>
                </div>


                <a href="hipertrofia.php" class="card-link">
                <div class="card">
                    <img src="images/strength.jpg" alt="Treino de Força" loading="lazy">
                    <h3>Treino para hipertrofia</h3>
                    <p>Aumente a força e construa massa muscular com o nosso website.</p>
                </div>


                <a href="yoga.php" class="card-link">
                <div class="card">
                    <img src="images/yoga.jpg" alt="Sessões de Yoga" loading="lazy">
                    <h3>Yoga & Flexibilidade</h3>
                    <p>Melhore sua flexibilidade e equilíbrio através de sessões de yoga fornecidas pelo nosso website.</p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Rodapé -->
    <footer class="footer">
        <p>&copy; 2024 FitnessPro.</p>
    </footer>

    <!-- Script JS -->
    <script src="script.js"></script>
</body>
</html>