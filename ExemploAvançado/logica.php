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

if(bindec($resposta) == 28){
    echo '<p>Seu animal é um Leão!</p>';

}elseif(bindec($resposta) == 26){
    echo '<p>Seu animal é um Cavalo!</p>';

}elseif(bindec($resposta) == 22){
    echo '<p>Seu animal é um Homem!</p>';

}elseif(bindec($resposta) == 18){
    echo '<p>Seu animal é um Macaco!</p>';

}elseif(bindec($resposta) == 23){
    echo '<p>Seu animal é um Morcego!</p>';

}elseif(bindec($resposta) == 20){
    echo '<p>Seu animal é um Baleia!</p>';

}elseif(bindec($resposta) == 6){
    echo '<p>Seu animal é um Avestruz!</p>';

}elseif(bindec($resposta) == 4){
    echo '<p>Seu animal é um Pinguim!</p>';

}elseif(bindec($resposta) == 7){
    echo '<p>Seu animal é um Pato!</p>';

}elseif(bindec($resposta) == 5){
    echo '<p>Seu animal é um Águia!</p>';

}elseif(bindec($resposta) == 14){
    echo '<p>Seu animal é um Tartaruga!</p>';

}elseif(bindec($resposta) == 12){
    echo '<p>Seu animal é um Crocodilo!</p>';

}else{
    echo '<p>Seu animal não está na Lista!</p>';
}
echo '<script>console.log("Teste")</script>';
?>

<a href="./index.html">Voltar</a>