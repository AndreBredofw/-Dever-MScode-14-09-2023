<?php 
$nome = ["Andre", "mAiCon", "alfrEdO", "dIOGO"];
function maiuscula($array) {

    $arrayNew = [];
    foreach ($array as  $name) {
        $maiuscula = ucwords(strtolower($name));
        array_push($arrayNew, $maiuscula);
    }
    return $arrayNew;
}
foreach (maiuscula($nome) as $value) {
     echo $value;
     echo "<br>";
};

?>