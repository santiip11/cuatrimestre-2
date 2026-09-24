<?php

$clave="hola mundo123";

echo hash("md5",$clave)."<br>";

foreach(hash_algos() as $algoritmos){
    echo $algoritmos. " - ".hash($algoritmos,$clave)."<br>";
}