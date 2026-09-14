<?php

date_default_timezone_set("America/Argentina/Buenos_aires");

$fecha_us=date("l d F Y");

$fecha_es=date("d-m-y");

$hora_12=date("h:i a");
$hora_24=date("H:i");

$fecha_completa=date("l d F Y H:i A");

echo $fecha_completa;
