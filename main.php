<?php
echo "BUENAS TARDES \n";
$prova1 = 2;
$$prova1 = 4;
$prova2 = 1;
$prova3 = FALSE;

echo "VALOR DE PRUEBA 1:".$prova1."\n";
echo "VALOR DE PRUEBA 1:".$$prova1;
echo $prova3."\n";
  
if ($prova1 + $prova2 == 4){
  echo "BIEN";
}
  
else{
  echo "MAL";
  $prova3 = TRUE;
    
  if ($prova3 == TRUE){
    echo " jeje ";
  }
}

echo $prova1;
#echo $prova3;

?>

