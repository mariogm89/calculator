<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"> 
</head>
<body>
    <form method="POST" action="calc.php" class="calc">
        <div><label>Introduce un número: </label><input type="text" name="num1"></div>
        <div><label>Introduce otro número: </label><input type="text" name="num2"></div>
        <div><label>Selecciona un operando</label><select name="options">
            <option value="0">Sumar</option>
            <option value="1">Restar</option>
            <option value="2">Multiplicar</option>
            <option value="3">Dividir</option>
        </select></div>
        <div><input type="submit" name="calculate" value="Calcular"></div>
    <?php
    include("operation.php");
    if(isset($_REQUEST['calculate'])){
        $num1=$_REQUEST['num1'];
        $num2=$_REQUEST['num2'];
        $option=$_REQUEST['options'];
        switch($option){
            case 0:echo "Resultado: " . calc::add($num1,$num2);break;
            case 1:echo "Resultado: " . calc::subtract($num1,$num2);break;
            case 2:echo "Resultado: " . calc::multiply($num1,$num2);break;
            case 3:echo "Resultado: " . calc::divide($num1,$num2);break;
        }
    }
    ?>
    <br>
    <div><input type="button" onclick=" location.href='../index.php' " value="Volver atrás" name="button" /> </div>
    </form>
</body>
</html>