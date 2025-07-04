<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/style.css">
    <title>FormaExata</title>
</head>
<body>
    <header>
        <img src="assets/img/logo.png" alt="logo" class="logo">
        <h1>FormaExata</h1>
    </header>
    <img src="assets/img/wallpaper.png" alt="wallpaper" class="wallpaper">
    <div class="containerIMC">
    <h1 class="titulo">Calculadora IMC</h1>
    <form class="formulario" action="" method="POST">
        <input type="text" name="altura" placeholder="Informe sua Altura (M)" required>
        <input type="text" name="peso" placeholder="informe seu Peso (KG)" required>
        <button type="submit" name="calcular">Calcular</button>
        <button onclick="limparTela()">Limpar Dados</button>
    </form>
    <br>
<div class="containerphp">
<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    if(is_numeric($peso) && $peso > 0 && is_numeric($altura) && $altura > 0){
        $imc = number_format($peso / ($altura**2),2,'.', ',');
   
        if ($imc < 18.5) {
            $classificacao = "Abaixo do Peso.";
        } elseif ($imc < 24.9) {
            $classificacao = "Peso Normal.";
        } elseif ($imc < 29.9) {
            $classificacao = "Excesso de Peso.";
        } elseif ($imc < 34.9) {
            $classificacao = "Obesidade classe I.";
        } elseif ($imc < 39.9) {
            $classificacao = "Obesidade classe II.";
        } else {
            $classificacao = "Obesidade classe III.";
        }
        echo "<h2>Seu IMC é $imc - Classificação: $classificacao</h2>";
    }else{
        echo"<strong>Informação Inválida!</strong>";
    }
}
?>
<br>
</div>
</div>
<!--<footer><p>&copy; 2025 Todos os direitos reservados | Desenvolvido por Davi Vieira de Souza</p></footer>-->
<script src="assets/script.js"></script>
</body>
</html>