<?php
session_start();

// Recupera o treino da sessão
$workout = isset($_SESSION['workout']) ? $_SESSION['workout'] : [];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitnessPro - Treino Final</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <!-- Barra de navegação aqui -->
    </nav>

    <!-- Seção de Treino Final -->
    <section class="workout-final">
        <h2>Seu Treino Finalizado</h2>

        <div class="workout-container">
            <?php if (empty($workout)): ?>
                <p>Você ainda não criou um treino. Adicione exercícios e crie seu treino!</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($workout as $exercise): ?>
                        <li>
                            <h3><?php echo htmlspecialchars($exercise['name']); ?></h3>
                            <video controls>
                                <source src="<?php echo $exercise['video']; ?>" type="video/mp4">
                                Seu navegador não suporta vídeos.
                            </video>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>
