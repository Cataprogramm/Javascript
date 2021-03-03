<?php
/*
$provincia=$_GET["provincia"];
echo "La provincia es " . $provincia . "<br>";
$edad=$_GET["edad"];
echo "La edad es " . $edad . "<br>";
*/


$mis_provincias=["Madrid","Vigo","Bilbao","Valencia","Sevilla"];
echo json_encode($mis_provincias);


$resultado=json_decode($_GET['provincia'],false);





/*
for(var $i=0;$i<count($mis_provincias);$i++){
    if($_GET["provincia"] == $mis_provincias[$i]){
        echo $mis_provincias[$i];
    }
}
if($edad<12){
    echo "Niño";
    else if($edad>12 || $edad <18){
        echo "Adolescente";
    }
        else if($edad > 18 || $edad <26){
            echo "Juventud";
        }
            else if($edad > 27 || $edad<59){
                echo "Adultez";
            }
            else if($edad > 60){
                echo "Es una persona mayor";
            }
                else{
                  echo "No has introducido una edad válida";
                }
}


*/
?>