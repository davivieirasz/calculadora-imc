<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>
</head>
<body>
    <h1>Calculadora IMC</h1>
    <form action="" method="POST">
        <input type="text" name="altura" placeholder="Informe sua Altura (M)" required>
        <input type="text" name="peso" placeholder="informe seu Peso (KG)" required>
        <button type="reset" name="limpaMensagem">Limpar Dados</button>
        <button type="submit" name="calcular">Calcular</button>
    </form>
    <br>
<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    if(is_numeric($peso) && $peso > 0 && is_numeric($altura) && $altura > 0){
        $imc = number_format($peso / ($altura**2),2,'.', ',');
   
        if ($imc < 18.5) {
            $classificacao = "Abaixo do Peso!";
        } elseif ($imc < 24.9) {
            $classificacao = "Peso Normal!";
        } elseif ($imc < 29.9) {
            $classificacao = "Excesso de Peso!";
        } elseif ($imc < 34.9) {
            $classificacao = "Obesidade classe I";
        } elseif ($imc < 39.9) {
            $classificacao = "Obesidade classe II";
        } else {
            $classificacao = "Obesidade classe III";
        }
        echo "Seu IMC é $imc - Classificação: $classificacao";
    }else{
        echo"Informação Inválida";
    }
}
?>
    <br>
    <br>
    <br>
    <br>
</body>
</html>
