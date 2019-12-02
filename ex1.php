<?php 
//para pegar 1 item do array $_SERVER
echo $_SERVER["REQUEST_URI"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

//para formatar
echo "<pre>";
//mostra onde esta 
print_r($_SERVER);

