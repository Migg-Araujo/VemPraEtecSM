<link rel="stylesheet" href="stylePhp.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<section>
<div class="quiz">
<?php

$pergunta1 = $_POST['pergunta1'];
$pergunta2 = $_POST['pergunta2'];
$pergunta3 = $_POST['pergunta3'];
$pergunta4 = $_POST['pergunta4'];
$pergunta5 = $_POST['pergunta5'];
$resposta = '';

($pergunta1) ? $resposta = $resposta . '1' : $resposta = $resposta . '0';

($pergunta2) ? $resposta = $resposta . '1' : $resposta = $resposta . '0';

($pergunta3) ? $resposta = $resposta . '1' : $resposta = $resposta . '0';

($pergunta4) ? $resposta = $resposta . '1' : $resposta = $resposta . '0';

($pergunta5) ? $resposta = $resposta . '1' : $resposta = $resposta . '0';

    //LEAO  
if (bindec($resposta) == 28) {
    echo '<div class="card"><p class="title"><img src="./assets/img/leao.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#FE7A00; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //VACA
} elseif (bindec($resposta) == 26) {
    echo '<div class="card"><p class="title"><img src="./assets/img/vaca.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#52565A; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
   
    //PAPAGAIO
} elseif (bindec($resposta) == 22) {
    echo '<div class="card"><p class="title"><img src="./assets/img/paraguaio.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#00C67F; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //MACACO
} elseif (bindec($resposta) == 18) {
    echo '<div class="card"><p class="title"><img src="./assets/img/macaco.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#BF8256; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //MORCEGO
} elseif (bindec($resposta) == 23) {
    echo '<div class="card"><p class="title"><img src="./assets/img/morcego.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#4D5071; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //BALEIA\
} elseif (bindec($resposta) == 20) {
    echo '<div class="card"><p class="title"><img src="./assets/img/baleia.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#29638E; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //AVESTRUZ
} elseif (bindec($resposta) == 6) {
    echo '<div class="card"><p class="title"><img src="./assets/img/avestruz.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#415068; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //PINGUIM
} elseif (bindec($resposta) == 4) {
    echo '<div class="card"><p class="title"><img src="./assets/img/pinguim.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#34495E; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //PATO
} elseif (bindec($resposta) == 7) {
    echo '<div class="card"><p class="title"><img src="./assets/img/pato.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#80D261; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //AGUIA
} elseif (bindec($resposta) == 5) {
    echo '<div class="card"><p class="title"><img src="./assets/img/aguia.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#66342E; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //TARTARUGA
} elseif (bindec($resposta) == 14) {
    echo '<div class="card"><p class="title"><img src="./assets/img/tartaruga.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#85C782; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
    
    //JACARÉ
} elseif (bindec($resposta) == 12) {
    echo '<div class="card"><p class="title"><img src="./assets/img/jacare.png" /></p></div>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#00C67F; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
} else {
    echo '<p>Seu animal não está na Lista!</p>';
    echo ' <a href="./index.html"><div class="animalBotao"><button class="btn" style="background-color:#00C67F; color :white;"><i class="fas fa-paw"></i> Voltar</button></div></a>';
  
}
?>


</div>
</section>