<?php

$numero = $_GET["numero"];

$atual = date("d/m/Y");

$data = date("d-m-Y");

echo "Dia atual: ".$atual."<br>";

echo "Número digitado: ".$numero."<br>";

echo  "Dia calculado: ".date('d/m/Y', strtotime(($numero."days"), strtotime($data)))."<br>"; 

echo  "Dia da semana: ".date('D', strtotime(($numero."days"), strtotime($data))); 

?>