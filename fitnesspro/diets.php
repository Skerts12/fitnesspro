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
    <section class="hero" style="background-image: url('images/diets--bg.jpg');">
        <div>
            <h1>Nossos Planos de Dieta</h1>
            <p>Alimente seu corpo com planos de refeições balanceados e nutritivos adaptados aos seus objetivos de fitness.</p>
            <a href="#diet-plans" class="btn">Explorar Dietas</a>
        </div>
    </section>

    <!-- Seção de Dietas -->
    <section class="section" id="diet-plans">
        <div class="container">
            <h2>Planos de Dieta</h2>

            <!-- Contêiner único para todos os cards -->
            <div class="cards">
                <a href="vegandiet.php" class="card-link">
                    <div class="card">
                        <img src="images/vegan.jpg" alt="Dieta Vegana" loading="lazy">
                        <h3>Dieta Vegetariana</h3>
                        <p>Uma dieta baseada em plantas ricas em nutrientes para apoiar a saúde e o fitness geral.</p>
                    </div>
                </a>

                <a href="ketodiet.php" class="card-link">
                    <div class="card">
                        <img src="images/keto.jpg" alt="Dieta Keto" loading="lazy">
                        <h3>Dieta Keto</h3>
                        <p>Dieta baixa em carboidratos e rica em gorduras projetada para ajudar a queimar gordura de forma eficiente.</p>
                    </div>
                </a>

                <a href="paleodiet.php" class="card-link">
                    <div class="card">
                        <img src="images/paleo.jpg" alt="Dieta Paleo" loading="lazy">
                        <h3>Dieta Paleo</h3>
                        <p>Foca em alimentos integrais e elimina itens processados para uma saúde ótima.</p>
                    </div>
                </a>
            </div> <!-- Fechamento correto do contêiner cards -->
        </div>
        <div style="text-align: center;"><a href="outradieta.php" class="btn">Não sigo um tipo de dieta específica</a></div>

    </section>


<!-- Seção Calculadora de Macros -->

<section class="section calculator">
    <br>
    <div class="container">
        <h2>Calculadora de Macros</h2>
        <p>Preencha os dados abaixo para calcular a quantidade recomendada de macronutrientes com base no seu estilo de vida.</p>
        
        <!-- Formulário para a calculadora -->
        <form id="calculator-form">
            <div class="form-group">
                <label for="weight">Peso (kg):</label>
                <input type="number" id="weight" required>
            </div>
            <div class="form-group">
                <label for="height">Altura (cm):</label>
                <input type="number" id="height" required>
            </div>
            <div class="form-group">
                <label for="age">Idade:</label>
                <input type="number" id="age" required>
            </div>
            <div class="form-group">
                <label for="gender">Sexo:</label>
                <select id="gender" required>
                    <option value="male">Masculino</option>
                    <option value="female">Feminino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="activity">Nível de Atividade Física:</label>
                <select id="activity" required>
                    <option value="sedentary">Sedentário</option>
                    <option value="light">Leve</option>
                    <option value="moderate">Moderado</option>
                    <option value="intense">Intenso</option>
                </select>
            </div>
            <br>
            <button type="submit">Calcular</button>
            <button type="button" id="clear-button">Limpar</button>
        </form>
<br>      
      <div class="h3">

        <h3>!! ATENÇÃO !!</h3>

      </div>  
      
    <div class="aten p">  
    <p>Com os resultados da calculadora irá saber os limites da sua dieta, mas não se preocupe, poderá comer o que quiser se caber nos seus limites !!</p>
    </div>
        <!-- Resultado da Calculadora -->
        <div id="macro-results" class="results" style="display:none;">
            <div class="h3">
            <h3>Resultados</h3>
            <br>

              <!--SETAS-->
        <span>&#8681;</span>
        <span>&#8681;</span>
        <span>&#8681;</span>
         <br>
            <br>
            </div>
            <div class="container">
            <p><strong>Calorias Diárias:</strong> <span id="tdee-result">0</span> kcal</p>
            <p><strong>Proteínas:</strong> <span id="protein-result">0</span> g</p>
            <p><strong>Carboidratos:</strong> <span id="carbs-result">0</span> g</p>
            <p><strong>Gorduras:</strong> <span id="fats-result">0</span> g</p>
        </div>
    </div>
</div>
</section>







    <!-- Rodapé -->
    <footer class="footer">
        <p>&copy; 2025 FitnessPro.</p>
    </footer>

    <!-- Script JavaScript -->
    <script src="script.js"></script>
</body>
</html>
