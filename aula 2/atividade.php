<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Triângulo</title>
    <link rel="stylesheet" href="atividade.css">
</head>
<body>
    <h1>Calculadora de Área de Triângulo</h1>
        
    <form method="post">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" required>
    </form>

    <form method="post">
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" required>   
    </form>    
        
        <input type="submit" value="Calcular">

    <title>Resultado</title>

    <?php
    if($_server['request_method'] == 'post'){

    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $area = ($base * $altura) / 2;

    if ($area > 100) {
        echo "A área do triângulo é $area e é maior que 100.";
    } else {
        echo "A área do triângulo é $area e é menor ou igual a 100.";
    }
}
    ?>
</body>
</html>