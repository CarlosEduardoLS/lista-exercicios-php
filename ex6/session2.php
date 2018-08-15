<?php

session_start();
// As variáveis foram configuradas na sessão anterior (session1.php)
echo "A cor favorita é " . $_SESSION["corfav"] . ".<br>";
echo "O animal favorito é " . $_SESSION["animalfav"] . ".";

//O script inicializa a sessão e mostra os dados que foram inseridos na sessão 1, sendo verde para corfav e cachorro para animalfav.
//Caso o script sessao1 não esteja aberto, a página apresenta erro pois ele não encontra nada dentro das variáveis para poder mostrar.

?>
