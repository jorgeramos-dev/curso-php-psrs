<?php

/**
 * Não faça isso. Crie arquivos exclusivos para responsavilidade exclusivas.
 * Cada arquivo .php deve fazer uma coisa diferente, e não varias responsabilidades como no exeplo abaixo:
 */


 // side effect: change ini settings
 ini_set('error_reporting', E_ALL);

 // side effect: loads a file
 include "file.php";

 // side effect: generate outputs
 echo "<html>\n";

 // declaration 
 function foo()
 {
    
 }