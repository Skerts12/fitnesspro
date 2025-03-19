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



    <section class="hero" style="background-image: url('images/hipertrofia-bg.jpg');">
        <div>
            <h1>Hipertrofia</h1>
            <p>Seu destino definitivo para treinos personalizados e planos de dieta.</p>
            <a href="costumtreinos.php" class="btn">Personalizar o meu treino</a>
        </div>
    </section>
</head>

<body>
    <!-- Seção principal -->
    <section class="content-section">
        <!-- Texto à esquerda -->
        <div class="text-container">
            <h2>Sobre a Hipertrofia</h2>
            <p>
                A hipertrofia muscular é o aumento no volume/tamanho do músculo. Esse aumento pode acontecer
                em vários níveis, desde o microscópico até o macroscópico. Em outras palavras, a hipertrofia
                pode ser detectada tanto ao nível das fibras musculares quanto no músculo como um todo.
            </p>
            <p>
                As alterações que acontecem no tamanho do músculo ocorrem por meio de mudanças no conteúdo
                das fibras musculares, muitas vezes relacionadas à prática de exercícios específicos e dieta.
            </p>

            <!-- Novo texto sobre Dieta Ideal -->
            <div class="additional-text">
                <h2>Dieta Ideal</h2>
                <p> 
                    A alimentação é um dos pilares fundamentais para a hipertrofia muscular. Consumir proteínas 
                    de qualidade, como carnes magras, ovos e leguminosas, fornece os aminoácidos necessários para 
                    a construção muscular. Carboidratos de baixo índice glicêmico, como batata-doce e aveia, ajudam 
                    a manter o fornecimento constante de energia durante os treinos. 
                </p>
                <p>
                    Além disso, a hidratação e o consumo adequado de gorduras saudáveis, como as encontradas no 
                    abacate e nas castanhas, são essenciais para a recuperação e crescimento muscular. O equilíbrio 
                    nutricional, aliado a uma rotina de treinos consistente, é a chave para atingir seus objetivos 
                    com eficiência.
                </p>
            </div>

            <!-- Novo texto sobre Planejamento de Treino -->
            <div class="additional-text">
                <h2>Planeamento de Treino</h2>
                <p>
                    Um planejamento eficiente de treinos é crucial para maximizar os resultados na academia. Ele 
                    deve ser adaptado ao seu nível de experiência, considerando desde o volume e intensidade dos 
                    exercícios até a escolha dos grupos musculares a serem trabalhados em cada dia. 
                </p>
                <p>
                    A periodização, que é a variação programada de carga e volume ao longo do tempo, é uma estratégia 
                    eficaz para evitar platôs e promover a progressão contínua. O acompanhamento de um profissional 
                    qualificado é recomendado para ajustar o plano às suas necessidades específicas e garantir que 
                    todos os músculos sejam trabalhados de maneira equilibrada.
                </p>
                <p>
                    Combine descanso adequado com consistência no treino, e você estará no caminho certo para alcançar 
                    a hipertrofia muscular de maneira saudável e duradoura.
                </p>
            </div>
        </div>

        <!-- Cards à direita -->
        <div class="card-container">
            <div class="card">
                <img src="images/card1.PNG" alt="Treino de força">
                <h3>Treino de Força</h3>
                <p>Aprenda a executar exercícios que maximizam o ganho de massa muscular.</p>
            </div>
            <div class="card">
                <img src="images/card2.PNG" alt="Dieta para Hipertrofia">
                <h3>Dieta Ideal</h3>
                <p>Manter uma boa e agradável dieta é a chave para o sucesso.</p>
            </div>
            <div class="card">
                <img src="images/card3.PNG" alt="Planejamento">
                <h3>Planejamento</h3>
                <p>Organize sua rotina de treinos e dieta com eficiência.</p>
            </div>
        </div>
    </section>

   

    <!-- Script para o menu responsivo -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.navbar ul');

            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        });

        window.addEventListener("scroll", () => {
            const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPosition = window.scrollY;
            const progressPercentage = (scrollPosition / scrollHeight) * 100;
            document.querySelector(".progress-fill").style.width = progressPercentage + "%";
        });
    </script>
</body>

<style>
    /* Mesmos estilos anteriores */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #121212;
        color: white;
    }

    .content-section {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        padding: 50px;
        gap: 30px;
    }

    .text-container {
        flex: 1.5;
        max-width: 60%;
        padding-right: 20px;
    }

    .text-container h2 {
        font-size: 2em;
        color: #12fa5f;
        margin-bottom: 10px;
    }

    .text-container p {
        font-size: 1.1em;
        line-height: 1.8;
        color: #fafafa;
        margin-bottom: 20px;
    }

    .additional-text h2 {
        margin-top: 30px;
        color: #12fa5f;
    }

    .additional-text p {
        margin-bottom: 15px;
        color: #eeeeee;
    }

    .card-container {
        flex: 1;
        max-width: 35%;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .card {
        background: #222222;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        padding: 20px;
        transition: transform 0.3s ease;
    }

    .card img {
        width: 100%;
        height: auto;
        border-bottom: 2px solid #bdc3c7;
    }

    .card h3 {
        font-size: 1.5em;
        color: #0ef074;
        margin: 15px 0;
    }

    .card p {
        font-size: 1em;
        color: #ffffff;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .footer {
        background-color: #1d1e1f;
        color: white;
        text-align: center;
        padding: 20px 0;
    }
</style>


</section>

<br>

 <!-- Rodapé -->
 <footer class="footer">
    <p>&copy; 2024 FitnessPro.</p>
</footer>

</html>
