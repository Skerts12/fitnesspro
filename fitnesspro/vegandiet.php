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

<section class="hero" style="background-image: url('images/vegan.jpg');">
    <div>
        <h1>Dieta vegetariana</h1>
        
        <p>Uma dieta baseada em plantas ricas em nutrientes para apoiar a saúde e o fitness gerla</p>

        <p>Se não segue uma dieta específica então escolha os seus alimentos a sua escolha!</p>
        <a href="outradieta.html" class="btn">Clique aqui para ver os alimentos ideais!</a>
        <br>

    </div>
</section>

<body>

    <h1 style="text-align: center;">Beneficios da dieta vegetariana</h1>
    <br>

       <h3 style="text-align: center;">Saúde cardiovascular</h3>
            <p>A dieta vegetariana tende a ser rica em alimentos como frutas, legumes, grãos integrais, nozes e sementes, que são fontes de fibras e antioxidantes. Isso pode ajudar a reduzir o risco de doenças cardíacas, já que ela tende a ser mais baixa em gordura saturada e colesterol.</p>
       
            <br>
            <div class="images">
            <img  src="./images/cardiovascular.png" style="border-radius: 20;" alt="saude cardiovascular" width="300" height="200">
            <br>
            
           
      
          <h3 style="text-align: center;">Controle do peso:</h3>
            <p>Muitas pessoas que seguem uma dieta vegetariana relatam ter um índice de massa corporal (IMC) mais baixo. Isso pode ser devido ao consumo de alimentos mais ricos em fibras e com menos calorias, além de uma menor ingestão de alimentos processados.

            <br>


       
         <h3 style="text-align: center;">Redução do risco de diabetes tipo 2:</h3>
             <p>A ingestão de alimentos ricos em fibras e com baixo índice glicêmico, típicos de uma dieta vegetariana, pode ajudar a controlar os níveis de açúcar no sangue, reduzindo o risco de desenvolver diabetes tipo 2.</p>

             <br>  
             
             
    
          <h3 style="text-align: center;">Saúde digestiva:</h3>
             <p>A abundância de fibras em uma dieta vegetariana melhora a digestão e contribui para o bom funcionamento do intestino, prevenindo problemas como constipação e até mesmo doenças do cólon.</p>


                    
        
<style>

.images{

    border-radius: 40;
}
</style>



   
</body>



</head>





</html>