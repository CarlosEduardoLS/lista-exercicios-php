<?php

$name = $_POST["nome"];

$fp = fopen("arquivo.txt", "w");

$escreve = fwrite($fp, $name);

fclose($fp);

?>