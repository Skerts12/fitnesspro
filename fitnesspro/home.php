<?php
include ('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitnessPro</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    

<nav>
   

   <nav>
    <!-- Barra de Navegação -->
    <nav class="navbar">
        <a href="home.php" class="logo">
           <img src="images/logo-icon.png" alt="Ícone de Logo" class="icon-back" width="60">
           
        </a>
        <span class="menu-toggle">&#9776;</span>
        <ul>
            <li><a href="workouts.php">Treinos</a></li>
            <li><a href="diets.php">Dietas</a></li>
        </ul>

        <!-- Menu Dropdown do Perfil -->
        <div class="profile-dropdown">
            <img src="images/profile-icon.png" alt="Perfil" title="<?php echo $_SESSION['nome']; ?>">
            <div class="profile-dropdown-content">
                <a style="color: lightyellow;" href="logout.php?logout=true">Mudar de Conta</a><br>
                <a style="color: lightyellow;" href="logout.php?logout=true">Sair</a>
            </div>
        </div>
    </nav>

    <!-- Barra de Progresso -->
    <div class="progress-bar">
        <div class="progress-fill"></div>
    </div>

    <!-- Seção Hero -->
    <section class="hero" style="background-image: url('images/home-bg.jpg');">
        <div>
            <h1>Bem vindo ao FitnessPro, <?php echo $_SESSION['nome']; ?>.</h1>
            <p>Seu destino definitivo para treinos personalizados e planos de dieta.</p>
            <a href="workouts.php" class="btn">Começar a treinar</a>
            <a href="diets.php" class="btn">Ver dietas</a>
        </div>
    </section>

    <!-- Seção Sobre -->
    <section class="section" id="about">
        <div class="container">        
            <h2>Sobre Nós</h2>          
            <p>No FitnessPro, estamos dedicados a te ajudar a alcançar os teus objetivos de fitness através de rotinas de treino personalizadas e planos de dieta adaptados aos teus objetivos.</p>
        </div>
    </section>

    <!-- Seção Galeria de Resultados -->
    <section class="section gallery">
        <div class="container">
            <h2>Resultados que podem ser atingidos</h2>
            <p>Se levar a sua nova dieta letra a letra e treinare intensamente pode esperar este tipo de resultados aqui estão os antes e depois de alguem que usou esta informação basica para mudar o seu corpo:</p>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/resultad1.jpg" alt="Cliente feliz com os resultados" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="images/resultad2.jpg" alt="Cliente satisfeito com o programa" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="images/resultad3.jpg" alt="Transformação com o programa" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="images/resultad4.jpg" alt="Sucesso com o programa" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Script JS -->
    <script src="script.js"></script>

    <!--Script para a barra de progresso-->
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
                <!--Fim do script da barra de progreço-->




   <!-- Seção de Contato -->
<section class="contato">
    <div class="container">
        <h2>Entre em Contato</h2>
        <hr><br>
        <p>Preencha o formulário abaixo e entraremos em contato com você.</p>

        <form class="contato-form">
            <div class="input-group">
                
                
              <br>
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nome" required>
                </div>
            


             <div class="input-group">

                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" required>

             </div>


             <div class="input-group">

                <i class="fas fa-phone-alt"></i>
                <input type="number" placeholder="Telefone" required>

             </div>

             <div class="contactocontainer">
                <br>
                <textarea id="myTextarea" placeholder="Escreva aqui a sua mensagem..." onfocus="this.select();"></textarea>
                <br>
                <br>
             </div>
          



            <script>
                // Função para selecionar o conteúdo automaticamente quando a textarea e clicada
                const textarea = document.getElementById('myTextarea');
                
                // mensagem padrão para mostrar ao usuário
                textarea.value = 'Escreva aqui a sua mensagem.';
                
                // A função onFocus seleciona o conteudo, tambem limpar quando a textarea for clicada
                textarea.addEventListener('focus', function() {
                    if (textarea.value === 'Escreva aqui a sua mensagem.') {
                        textarea.value = ''; // Limpar a mensagem 
                    }
                });
            </script>
       
            <a href="Obrigado.html" class="btn">Enviar</a>

        </form>
    </div>
</section>



         <!-- Rodapé -->
    <footer class="footer">
        <p>&copy; 2024 FitnessPro.</p>
    </footer>





</form>
   </div>
    </section>
</body>
</html>       