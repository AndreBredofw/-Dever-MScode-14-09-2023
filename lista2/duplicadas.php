<?php 

$lista = [1, 2, 2, 3, 5, 5];
function duplicadas($array)  {
   return array_unique($array);
}



foreach (duplicadas($lista) as $values) {
    echo $values;
   
};

?>