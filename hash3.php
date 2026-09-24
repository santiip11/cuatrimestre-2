<?php

$clave="hola mundo123";

$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost"=>15]);

echo password_verify($clave,);