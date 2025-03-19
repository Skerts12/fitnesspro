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
</nav>

<!-- Barra de Progresso -->
<div class="progress-bar">
    <div class="progress-fill"></div>
</div>

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

<!-- Imagem de Fundo -->
<section class="hero" style="background-image: url('images/treinoscus-bg.jpg');">
    <div class="hero-content">
        <h1>Exercicios</h1>
    </div>
</section>

<!-- Secção de Exercícios -->
<section class="exercise-section">

    <!-- Seção de Peito -->
    <h2 class="section-title">Exercicios para o Peito</h2>
    <p>Parte frontal do tronco, inclui os músculos peitorais e o esterno.</p>
    <div class="exercise-container">
        <div class="exercise-card">
            <h3>Supino </h3>
            <video controls>
                <source src="videos/supino.mp4" type="video/mp4">
                Seu navegador não suporta vídeos.
            </video>
            <p>O supino é um exercício essencial para desenvolver os músculos do peito.</p>
            <button class="add-btn" onclick="addExercise('Supino', 'videos/supino.mp4')">Adicionar</button>
        </div>


        <div class="exercise-card">
            <h3>Chest Flies</h3>
            <video controls>
                <source src="videos/chest-flies.mp4" type="video/mp4">
                Seu navegador não suporta vídeos.
            </video>
            <p>As chest flies ajudam a fortalecer o peito.</p>
            <button class="add-btn" onclick="addExercise('Chest Flies', 'videos/chest-flies.mp4')">Adicionar</button>
        </div>


        <div class="exercise-card">
            <h3>Chest Press</h3>
            <video controls>
                <source src="videos/chest-press.mp4" type="video/mp4">
                Seu navegador não suporta vídeos.
            </video>
            <p>O chest press ajuda a fortalecer o peito e os ombros.</p>
            <button class="add-btn" onclick="addExercise('Chest Press', 'videos/chest-press.mp4')">Adicionar</button>
        </div>
    </div>


    <!-- Seção de Braço -->
    <h2 class="section-title">Exercicios para o Braço</h2>
    <p>Membros superiores entre o ombro e o cotovelo, com músculos como o bíceps e o tríceps.</p>
    <div class="exercise-container">
        <div class="exercise-card">
            <h3>Rosca Direta</h3>
            <video controls>
                <source src="videos/rosca-direta.mp4" type="video/mp4">
                Seu navegador não suporta vídeos.
            </video>
            <p>A rosca direta é um exercício clássico para o bíceps.</p>
            <button class="add-btn" onclick="addExercise('Rosca Direta', 'videos/rosca-direta.mp4')">Adicionar</button>
        </div>




        <div class="exercise-card">
            <h3>Tríceps Pulley</h3>
            <video controls>
                <source src="videos/triceps-pulley.mp4" type="video/mp4">
                Seu navegador não suporta vídeos.
            </video>
            <p>O tríceps pulley é ótimo para trabalhar os tríceps.</p>
            <button class="add-btn" onclick="addExercise('Tríceps Pulley', 'videos/triceps-pulley.mp4')">Adicionar</button>
        </div>



        <div class="exercise-card">
            <h3>Tríceps Pulley</h3>
            <video controls>
                <source src="videos/triceps-pulley.mp4" type="video/mp4">
                Seu navegador não suporta vídeos.
            </video>
            <p>O tríceps pulley é ótimo para trabalhar os tríceps.</p>
            <button class="add-btn" onclick="addExercise('Tríceps Pulley', 'videos/triceps-pulley.mp4')">Adicionar</button>
        </div>


    </div>

    <!-- Outros exercícios podem ser adicionados da mesma maneira -->
</section>

<div id="exercise-popup" class="popup">
    <h3>Lista de Exercícios</h3>
    <ul id="exercise-list"></ul>
    <button class="clear-btn" onclick="clearList()">Limpar Lista</button>
    <button class="create-btn" onclick="createWorkout()">Criar Treino</button>
    <button class="close-popup" onclick="closePopup()">X</button> <!-- Ícone para fechar -->
</div>

<!-- Seção de Grelha de Treino -->
<section id="workout-grid" class="workout-grid">
    <h3>Seu Treino</h3>
    <div class="grid-container">
        <!-- Exercícios selecionados serão exibidos aqui -->
    </div>
</section>



<script>

document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('exercise-popup');
    const exerciseList = document.getElementById('exercise-list');
    const createWorkoutBtn = document.querySelector('.create-btn');
    const workoutContainer = document.getElementById('workout-grid').querySelector('.grid-container');
    let selectedExercises = [];

    // Função para adicionar exercício
    window.addExercise = function (name, video) {
        const exercise = { name, video };

        if (!selectedExercises.some(e => e.name === name)) {
            selectedExercises.push(exercise);
            renderExerciseList();
            showPopup();
        }
    };

    // Mostrar o popup
    function showPopup() {
        popup.style.transform = 'translateX(0)';
    }

    // Fechar o popup
    window.closePopup = function () {
        popup.style.transform = 'translateX(100%)';
    };

    // Renderizar lista de exercícios selecionados
    function renderExerciseList() {
        exerciseList.innerHTML = '';
        selectedExercises.forEach((exercise, index) => {
            const li = document.createElement('li');
            li.innerHTML = `
                ${exercise.name}
                <button onclick="removeExercise(${index})" style="color: red;">&times;</button>
            `;
            exerciseList.appendChild(li);
        });
    }

    // Remover exercício da lista
    window.removeExercise = function (index) {
        selectedExercises.splice(index, 1);
        renderExerciseList();
    };

    // Limpar lista de exercícios
    window.clearList = function () {
        selectedExercises = [];
        renderExerciseList();
    };

    // Função para criar o treino e enviar para a sessão PHP
    window.createWorkout = function () {
        if (selectedExercises.length > 0) {
            // Exibir o botão "Visualizar Treino"
            const visualizeButton = document.createElement('button');
            visualizeButton.innerText = 'Visualizar Treino';
            visualizeButton.classList.add('visualize-btn');
            visualizeButton.addEventListener('click', function () {
                // Salvar o treino na sessão via PHP
                fetch('save_workout.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(selectedExercises)
                })
                .then(response => response.json())
                .then(data => {
                    window.location.href = 'treinofinal.php';
                })
                .catch(error => console.error('Erro ao salvar treino:', error));
            });
            // Adicionar o botão à interface
            createWorkoutBtn.parentNode.appendChild(visualizeButton);
        } else {
            alert('Por favor, adicione pelo menos um exercício.');
        }
    };
});

</script>


<style>

/* Estilos gerais */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #fff;
    background-color: #121212;
}

.hero {
    height: 250px;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero h1 {
    font-size: 3em;
    color: #ffffff;
}

/* Grelha de Treino */
.workout-grid {
    margin-top: 50px;
    padding: 20px;
    background: #1e1e1e;
    border-radius: 8px;
    display: none;
}

.workout-grid h3 {
    color: #0ef074;
    margin-bottom: 20px;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.grid-item {
    background: #2a2a2b;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

.grid-item h4 {
    color: #12fa5f;
    margin-bottom: 10px;
}

.grid-item video {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.grid-item button {
    background: #0ef074;
    color: #000;
    padding: 8px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.grid-item button:hover {
    background: #09c25b;
}
    /* Estilo geral */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: #fff;
        background-color: #121212;
    }

    .hero {
        height: 250px;
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero h1 {
        font-size: 3em;
        color: #ffffff;
    }

    /* Seção de exercícios */
    .exercise-section {
        padding: 20px;
    }

    .section-title {
        font-size: 2em;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .exercise-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .exercise-card {
        background: #2a2a2b;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
        width: 30%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        margin: 10px 0;
    }

    .exercise-card h3 {
        font-size: 1.5em;
        color: #12fa5f;
        margin-bottom: 10px;
    }

    .exercise-card video {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .exercise-card p {
        font-size: 1em;
        color: #fafafa;
        margin-bottom: 15px;
    }

    .add-btn {
        background: #0ef074;
        color: #000;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .add-btn:hover {
        background: #09c25b;
    }

    /* Pop-up lateral */
    .popup {
        position: fixed;
        top: 0;
        right: 0;
        background: #2a2a2b;
        width: 300px;
        height: 100%;
        box-shadow: -4px 0 6px rgba(0, 0, 0, 0.2);
        padding: 20px;
        overflow-y: auto;
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
    }

    .popup h3 {
        color: #0ef074;
        margin-bottom: 15px;
    }

    #exercise-list {
        list-style: none;
        padding: 0;
    }

    #exercise-list li {
        background: #383838;
        color: #fff;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .clear-btn,
    .create-btn {
        width: 100%;
        background: #0ef074;
        color: #000;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }

    .clear-btn:hover,
    .create-btn:hover {
        background: #09c25b;
    }

    .close-popup {
        position: absolute;
        top: 10px;
        right: 10px;
        background: transparent;
        color: #fff;
        border: none;
        font-size: 1.5em;
        cursor: pointer;
    }
</style>
</body>

<footer class="footer">
    <p>&copy; 2024 FitnessPro.</p>
</footer>

</html>
