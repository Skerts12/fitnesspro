<?php
session_start();

// Recebe os dados via POST (em formato JSON)
$data = json_decode(file_get_contents('php://input'), true);

// Verifica se os dados foram recebidos corretamente
if ($data) {
    // Salva os dados na sessão
    $_SESSION['workout'] = $data;
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}
?>
