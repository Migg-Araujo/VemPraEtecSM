<link rel="stylesheet" href="stylePhp.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<section>
<div class="quiz">
<?php
$pergunta1 = isset($_POST['pergunta1'])? 'Sim' : 'Não';
$pergunta2 = isset($_POST['pergunta2'])? 'Sim' : 'Não';
$pergunta3 = isset($_POST['pergunta3'])? 'Sim' : 'Não';
$pergunta4 = isset($_POST['pergunta4'])? 'Sim' : 'Não';

//Insira a lógica aqui, adicione if para verificação das perguntas e echo para apresentar as respostas

echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#00C67F; color :white;">Voltar</button></div></a>';

?>
</div>
</section>