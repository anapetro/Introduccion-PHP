<?php

# condiciones 
  $a = 5;
  $b= 10;

  if($a > $b){ 
      echo "a es mayor que b";
  }

  else if ($a ==$b){
    echo "a es igual que b";
  }

  else {
    echo "a es menor que b";
}

echo "<br><br>";

# suiches 
$dia ="sabado";
switch($dia){
    case "sabado":
    echo "voy a estudiar php";
break;

case "viernes":
echo "voy a la fiesta ";
break;

case "domingo":
echo "voy a descansar";
break;
 
default: echo "voy a la universidad"; 
}


#ciclo while

$n =1;

while($n <= 5){
    echo $n;
    $n++;   
}
 echo "<br> <br>";

 # ciclo do while

 $p=1;
 do{
     echo $p;
     $p++;
 }
while($p <= 5);

echo "<br> <br>";

#ciclo for

for ( $i =0; $i <= 5; $i++){
    echo $i;
}



?>