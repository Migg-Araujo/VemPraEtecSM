<?php
$pergunta1 = $_POST['pergunta1'];
$pergunta2 = $_POST['pergunta2'];
$pergunta3 = $_POST['pergunta3'];
$pergunta4 = $_POST['pergunta4'];
$pergunta5 = $_POST['pergunta5'];

if($pergunta1 == 'Sim' && $pergunta2 == 'Sim' && $pergunta3 == 'Sim' && $pergunta4 == 'Não' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Leão!</p>';

}elseif($pergunta1 == 'Sim' && $pergunta2 == 'Sim' && $pergunta3 == 'Não' && $pergunta4 == 'Sim' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Cavalo!</p>';

}elseif($pergunta1 == 'Sim' && $pergunta2 == 'Não' && $pergunta3 == 'Sim' && $pergunta4 == 'Sim' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Homem!</p>';

}elseif($pergunta1 == 'Sim' && $pergunta2 == 'Não' && $pergunta3 == 'Não' && $pergunta4 == 'Sim' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Macaco!</p>';

}elseif($pergunta1 == 'Sim' && $pergunta2 == 'Não' && $pergunta3 == 'Sim' && $pergunta4 == 'Sim' && $pergunta5 == 'Sim'){
    echo '<p>Seu animal é um Morcego!</p>';

}elseif($pergunta1 == 'Sim' && $pergunta2 == 'Não' && $pergunta3 == 'Sim' && $pergunta4 == 'Não' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Baleia!</p>';

}elseif($pergunta1 == 'Não' && $pergunta2 == 'Não' && $pergunta3 == 'Sim' && $pergunta4 == 'Sim' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Avestruz!</p>';

}elseif($pergunta1 == 'Não' && $pergunta2 == 'Não' && $pergunta3 == 'Sim' && $pergunta4 == 'Não' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Pinguim!</p>';

}elseif($pergunta1 == 'Não' && $pergunta2 == 'Não' && $pergunta3 == 'Sim' && $pergunta4 == 'Sim' && $pergunta5 == 'Sim'){
    echo '<p>Seu animal é um Pato!</p>';

}elseif($pergunta1 == 'Não' && $pergunta2 == 'Não' && $pergunta3 == 'Sim' && $pergunta4 == 'Não' && $pergunta5 == 'Sim'){
    echo '<p>Seu animal é um Águia!</p>';

}elseif($pergunta1 == 'Não' && $pergunta2 == 'Sim' && $pergunta3 == 'Sim' && $pergunta4 == 'Sim' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Tartaruga!</p>';

}elseif($pergunta1 == 'Não' && $pergunta2 == 'Sim' && $pergunta3 == 'Sim' && $pergunta4 == 'Não' && $pergunta5 == 'Não'){
    echo '<p>Seu animal é um Crocodilo!</p>';

}else{
    echo '<p>Seu animal não está na Lista!</p>';
}
?>

<a href="./index.html">Voltar</a>