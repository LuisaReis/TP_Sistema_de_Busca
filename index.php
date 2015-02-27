<?php
    include("xml_recover.php");
    include("user_query_txt.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Máquina de Busca</title>
    </head>
    <body>
        
        <b>Resultados Obtidos: <p>
        
        <?php
        
        xmlRecover();
        $listaInvertida = getListaInvertida();
        getUserQuery($listaInvertida);
        ?>        
        
    </body>
</html>
