<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calculadora PHP</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Primeiro número: <input type="text" name="num1"><br><br>
    Segundo número: <input type="text" name="num2"><br><br>
    Escolha a operação:
    <select name="operacao">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br><br>
    <input type="submit" name="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'soma':
            $resultado = $num1 + $num2;
            break;
        case 'subtracao':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacao':
            $resultado = $num1 * $num2;
            break;
        case 'divisao':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Divisão por zero não é permitida";
            }
            break;
        default:
            $resultado = "Operação inválida";
            break;
    }

    echo "<br><strong>Resultado da ", $operacao ," é:</strong> " . $resultado;
}
?>
</body>
</html>