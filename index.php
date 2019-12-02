<?php
    include "conexao.php";
?>
<html lang="pt-br">
<head>
	<title>HqLandia</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Site da HqLandia, Melhor sie de hqs">

    <base href="http://<?=$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];?>">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="images/icone.png">



</head>
<body>


<?php
    $pagina = "home";

    if (isset ($_GET["pagina"])){
        $pagina = $_GET["pagina"];

        $parametro = explode("/",$pagina);

        $pagina = $parametro[0];
        
    }
    $pagina = $pagina.".php";

    if ( file_exists($pagina) ) 
    {
        include $pagina;
    }
    else
    {
        include "erro.php";
       
    }

?>

<script src="bootstra/js/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstra/js/popper.min.js"></script>
</body>
</html>



