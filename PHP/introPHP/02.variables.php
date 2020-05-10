<?php

$numero  = 5;
echo "esto es u7n avariable numero: $numero<br>";
var_dump($numero);


# salto de linea 
echo "<br></br>";

#variable texto
$palabra = "palabra";
echo "esto es una variable texto: $palabra<br>";
var_dump($palabra);

# variable Boleana falso y verdadero 
$boleana = true;
echo "esto es una variable boleana: $boleana<br>";
var_dump($boleana);
echo "<br></br>";

# variable arreglo 
$colores = array("rojo","rosado","morado");
echo "esto es una variable arreglo: $colores[0]<br>";
var_dump($colores);
echo "<br></br>";

# variable arreglo con propiedades 
#(especificar un nombre a cada indice )

$verduras = array("verdura" =>"lechuga", =>"verdura2"=>"cebolla");
echo "esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br></br>";

# variable objeto
$frutas =(object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "esto es una variable objeto: $frutas=>fruta1<br>";
var_dump($frutas);

 
?>