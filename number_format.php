<?php

$cantidad_1=12732.5;
$cantidad_2=1931.81;

//number_format(cantidad,decimales,sep_decimal,sep millar);

$cantidad_1=number_format($cantidad_1,2,",",".");

echo $cantidad_1;

