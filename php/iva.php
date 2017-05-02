<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calcular IVA</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">  
</head>
<body>
    <form method="POST" action="iva.php" class="calc">
        <div><label>Introduce un número:</label><input type="text" name="num3"></div>
        <div><label>Selecciona un tipo de IVA:</label><select name="options">
            <option value="0">4%</option>
            <option value="1">10%</option>
            <option value="2">21%</option>
        </select></div>
        <div><input type="submit" name="calculate" value="Calcular IVA"></div>
    <?php
    include("operation.php");
    if(isset($_REQUEST['calculate'])){
        $num3=$_REQUEST['num3'];
        $option=$_REQUEST['options'];
        switch($option){
            case 0:echo "Resultado sin IVA: " . $num3;break;
            case 1:echo "Resultado sin IVA: " . $num3;break;
            case 2:echo "Resultado sin IVA: " . $num3;break;
        }
        echo "<br>";
        switch($option){
            case 0:echo "Resultado con IVA: " . iva::sreduced($num3);break;
            case 1:echo "Resultado con IVA: " . iva::reduced($num3);break;
            case 2:echo "Resultado con IVA: " . iva::general($num3);break;
        }
        echo "<br>";
        switch($option){
            case 0:echo "Cantidad de IVA aplicado: " . iva::sreducedout($num3);break;
            case 1:echo "Cantidad de IVA aplicado: " . iva::reducedout($num3);break;
            case 2:echo "Cantidad de IVA aplicado: " . iva::generalout($num3);break;
        }
        echo "<br>";
    }
    ?>
    <br>
    <div><input type="button" onclick=" location.href='../index.php' " value="Volver atrás" name="button" /> </div>
    </form>
</body>
</html>