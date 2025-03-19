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





<section class="hero" style="background-image: url('images/outradieta-bg.jpg');">
    <div>
        <h1>Não segue nenhuma dieta específica?</h1>
        
        <p style="color: #eff5f1;">Se não segue nenhuma dieta específica então aqui estão os melhores alimento e habitos para criar uma dieta 
            perfeita para os seus objetivos.
        </p>
        <br>
        <p style="color: #f4fcf6; ">Já sabe qual o seu objetivo mas ainda não sabe o seu gasto calorico diario?</p>
        <div style="text-align: center;"><a href="diets.html" class="btn">Clique aqui para descobrir o seu gasto calorico na pagina de dietas</a></div>  
    </div>
</section>


<body>
<br>
<div style="text-align: center;"><h3>Aqui irá descobrir os melhores alimentos para si e para o seu corpo.</h3></div>
<br>
<div style="text-align: center;"><h1>Carnes e os tipos de carnes</h1></div>


<div class="img">
    <img src="images/carne-branca.jpg" alt="Centered Image">
    </div>



 
</body>



</head>




<style>
    .img{
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */

    }

    h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        h2 {
            color: #12fa5f;
            margin-bottom: 10px;
        }
</style>




</html>