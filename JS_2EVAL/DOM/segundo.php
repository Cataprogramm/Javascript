<!DOCTYPE html>
<head>
    <title>Tabla en PHP</title>
    <meta name="author" content="Catalin">
    <meta name="description" content="Array de datos almacendao en un tabla">
</head>
<body>


<?php
    $datos=[
        [
            'Fecha' => '2020-6-5',
            'Descripcion' => 'Ingreso en efectivo',
            'Importe' => '100',
            'Sueldo' => '150',
        ],
        [
            'Fecha' => '2020-6-5',
            'Descripcion' => 'Ingreso en efectivo',
            'Importe' => '100',
            'Sueldo' => '150',
        ],
        [
            'Fecha' => '2020-6-5',
            'Descripcion' => 'Ingreso en efectivo',
            'Importe' => '100',
            'Sueldo' => '150',
        ],
        [
            'Fecha' => '2020-6-5',
            'Descripcion' => 'Ingreso en efectivo',
            'Importe' => '100',
            'Sueldo' => '150',
        ],
    ];

    $mi_tabla="<table border='1'>";
    foreach($datos as $r){
        $mi_tabla .= '<tr>';
        foreach($r as $v){
            $mi_tabla.= '<td>' .$v. '</td>';
        }
        $mi_tabla .= '<tr>';
    }
    $mi_tabla .= '<table>';
    echo $mi_tabla;


?>

</body>
</html>