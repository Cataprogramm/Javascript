<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Catalin Mazarache">
    <title>Rango de edad</title>

</head>

<body>
<?php
    echo "Funciona";
    echo "<br>";
    echo "Num de variables: " . count($_GET) . "<br><br>";
    foreach($_GET as $x => $x_valor){
        echo "Variable: " . $x . " , Valor= " . $x_valor;
        echo "<br>";
    }

?>

</body>
</html> 
