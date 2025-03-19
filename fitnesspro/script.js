// script.js
console.log("script.js carregado corretamente");

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.navbar ul');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
});


window.addEventListener("scroll", () => {
    // Altura total da página (documento)
    const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
    
    // Posição atual de rolagem do usuário
    const scrollPosition = window.scrollY;
    
    // Calcula a porcentagem da barra de progresso
    const progressPercentage = (scrollPosition / scrollHeight) * 100;
    
    // Atualiza a largura do preenchimento da barra de progresso
    document.querySelector(".progress-fill").style.width = progressPercentage + "%";
});

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.navbar ul');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
});

document.getElementById('calculator-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio do formulário e recarregamento da página

    // Obter valores do formulário
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);
    const age = parseInt(document.getElementById('age').value);
    const gender = document.getElementById('gender').value;
    const activity = document.getElementById('activity').value;

    // Calcular o BMR
    let bmr;
    if (gender === 'male') {
        bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
    } else {
        bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
    }

    // Ajustar o TDEE com base no nível de atividade
    let tdee;
    switch (activity) {
        case 'sedentary':
            tdee = bmr * 1.2;
            break;
        case 'light':
            tdee = bmr * 1.375;
            break;
        case 'moderate':
            tdee = bmr * 1.55;
            break;
        case 'intense':
            tdee = bmr * 1.725;
            break;
    }

    // Calcular os macros (valores aproximados)
    const protein = weight * 2; // 2g de proteína por kg de peso
    const carbs = weight * 4; // 4g de carboidrato por kg de peso
    const fats = weight * 1; // 1g de gordura por kg de peso

    // Exibir os resultados
    document.getElementById('tdee-result').textContent = Math.round(tdee);
    document.getElementById('protein-result').textContent = Math.round(protein);
    document.getElementById('carbs-result').textContent = Math.round(carbs);
    document.getElementById('fats-result').textContent = Math.round(fats);

    // Mostrar a seção de resultados
    document.getElementById('macro-results').style.display = 'block';
});

// Função para limpar o formulário e resultados
document.getElementById('clear-button').addEventListener('click', function() {
    // Limpar os campos do formulário
    document.getElementById('calculator-form').reset();

    // Limpar os resultados
    document.getElementById('macro-results').style.display = 'none';

    // Limpar as informações no campo de resultados
    document.getElementById('tdee-result').textContent = '0';
    document.getElementById('protein-result').textContent = '0';
    document.getElementById('carbs-result').textContent = '0';
    document.getElementById('fats-result').textContent = '0';
});
