<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página principal</title>
    <link rel="stylesheet" type="text/css" href="css/main-style.css">
</head>
<body>
    <form method="POST" action="../main.php" class="main-button">
        <div><label>Elija una opción:</label></div>
        <input type="submit" formaction="php/calc.php" value="Ir a calculadora PHP">
        <input type="submit" formaction="php/iva.php" value="Calcular el IVA">
        <input type="submit" formaction="js/calcjs.html" value="Ir a calculadora JS">
    </form>
</body>
</html>