<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma com entrada de dados</title>
</head>
<body>
    <h1>Projeto soma ninja!</h1><br>

    <form name="form1" action="paginaphp.php" method="get" enctype="multipart/form-data">
        VALOR 1:

        <label>
            <span><i class="icon icon-user-1"></i></span>
            <input type="text" name="txtv1"><br><br><hr>
        </label>
        
        VALOR 2:

        <label>
            <span><i class="icon icon-phone"></i></span>
            <input type="text" name="txtv2"><br><br><hr>
        </label>
        <center><input type="submit" name="BTNCALCULAR" value="Calcular"></center>
      
    
    </form><hr>

    <?php

    //variável
    $num1 = $_GET['txtv1'];
    $num2 = $_GET['txtv2'];

    //efetuar a soma
    $total1 = $num1 - $num2;
    $total2 = $num1 + $num2;
    $total3 = $num1 * $num2;
    $total4 = $num1 / $num2;

    //mostrar resultado
    echo "<i>O resultado da subtração é: </i><b>$total1</b><br><hr>";
    echo "<i>O resultado da adição é: </i><b>$total2</b><br><hr>";
    echo "<i>O resultado da multiplicação é: </i><b>$total3</b><br><hr>";
    echo "<i>O resultado da divisão é: </i><b>$total4</b><br><hr>";

    ?>
</body>
</html>