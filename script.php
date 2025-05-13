<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $resultado = $peso/ ($altura **2);
    $resultado = number_format($resultado, 2);
 
    echo "<strong>Seu IMC é de: $resultado </strong><br><br>";
}
    if ($resultado < 18) {
    echo "Classificação: Abaixo do Peso!<br><br>";
    } elseif ($resultado < 25) {
    echo "Classificação: Peso Normal!<br><br>";
    } elseif ($resultado < 30) {
    echo "Classificação: Sobrepeso!<br><br>";
    } elseif ($resultado >=30) {
    echo "Classificação: Obesidade!<br><br>";
    } else {
    echo "Peso e altura devem ser maiores que zero.";
    }
?>

<button onclick="window.history.back();">Voltar</button>
