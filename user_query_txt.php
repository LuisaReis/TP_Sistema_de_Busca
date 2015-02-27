<?php
include("xml_recover.php");
    $lista;
function getUserQuery($listaInvertida){
        $lista = $listaInvertida;
        $arq1 = "Base/consultasDafiti/1.txt";
        $arq2 = "Base/consultasDafiti/2.txt";
        $arq3 = "Base/consultasDafiti/3.txt";
        $arq4 = "Base/consultasDafiti/4.txt";
        $arq5 = "Base/consultasDafiti/5.txt";
        $arq6 = "Base/consultasDafiti/6.txt";
        $arq7 = "Base/consultasDafiti/7.txt";
        $arq8 = "Base/consultasDafiti/8.txt";
        $arq9 = "Base/consultasDafiti/9.txt";
        $arq10 = "Base/consultasDafiti/10.txt";
        $arq11 = "Base/consultasDafiti/11.txt";
        $arq12 = "Base/consultasDafiti/12.txt";
        $arq13 = "Base/consultasDafiti/13.txt";
        $arq14 = "Base/consultasDafiti/14.txt";
        $arq15 = "Base/consultasDafiti/15.txt";
        $arq16 = "Base/consultasDafiti/16.txt";
        $arq17 = "Base/consultasDafiti/17.txt";
        $arq18 = "Base/consultasDafiti/18.txt";
        $arq19 = "Base/consultasDafiti/19.txt";
        $arq20 = "Base/consultasDafiti/20.txt";
        $arq21 = "Base/consultasDafiti/21.txt";
        $arq22 = "Base/consultasDafiti/22.txt";
        $arq23 = "Base/consultasDafiti/23.txt";
        $arq24 = "Base/consultasDafiti/24.txt";
        $arq25 = "Base/consultasDafiti/25.txt";
        $arq26 = "Base/consultasDafiti/26.txt";
        $arq27 = "Base/consultasDafiti/27.txt";
        $arq28 = "Base/consultasDafiti/28.txt";
        $arq29 = "Base/consultasDafiti/29.txt";
        $arq30 = "Base/consultasDafiti/30.txt";
        $arq31 = "Base/consultasDafiti/31.txt";
        $arq32 = "Base/consultasDafiti/32.txt";
        $arq33 = "Base/consultasDafiti/33.txt";
        $arq34 = "Base/consultasDafiti/34.txt";
        $arq35 = "Base/consultasDafiti/35.txt";
        $arq36 = "Base/consultasDafiti/36.txt";
        $arq37 = "Base/consultasDafiti/37.txt";
        $arq38 = "Base/consultasDafiti/38.txt";
        $arq39 = "Base/consultasDafiti/39.txt";
        $arq40 = "Base/consultasDafiti/40.txt";
        $arq41 = "Base/consultasDafiti/41.txt";
        $arq42 = "Base/consultasDafiti/42.txt";
        $arq43 = "Base/consultasDafiti/43.txt";
        $arq44 = "Base/consultasDafiti/44.txt";
        $arq45 = "Base/consultasDafiti/45.txt";
        $arq46 = "Base/consultasDafiti/46.txt";
        $arq47 = "Base/consultasDafiti/47.txt";
        $arq48 = "Base/consultasDafiti/48.txt";
        $arq49 = "Base/consultasDafiti/49.txt";
        $arq50 = "Base/consultasDafiti/50.txt";
 
        $array = array($arq1, $arq2, $arq3, $arq4, $arq5, $arq6, $arq7, $arq8, $arq9, $arq10, $arq11, $arq12, $arq13, $arq14, $arq15, $arq16, $arq17, $arq18, $arq19, $arq20, $arq21, $arq22, $arq23, $arq24, $arq25, $arq26, $arq27, $arq28, $arq29, $arq30, $arq31, $arq32, $arq33, $arq34, $arq35, $arq36, $arq37, $arq38, $arq39, $arq40, $arq41, $arq42, $arq43, $arq44, $arq45, $arq46, $arq47, $arq48, $arq49, $arq50);
        foreach($array as $name_file){
       	  $file = fopen($name_file,"r");
          
          $user_query = fgets($file) . "<br/>";
          
          if(substr_count($user_query, ' ') == 1){
                list($titulo1,$titulo2) = split (" ", $user_query, 2);
                modelovetorial($titulo1);
                
                echo $titulo2;
            }else if(substr_count($user_query, ' ') == 2){
                list($titulo1,$titulo2,$titulo3) = split (" ", $user_query, 3);
                modelovetorial($titulo1);
                modelovetorial($titulo2);
                modelovetorial($titulo3);
            }else if(substr_count($user_query, ' ') == 3){
                list($titulo1,$titulo2,$titulo3,$titulo4) = split (" ", $user_query, 4);
                modelovetorial($titulo1);
                modelovetorial($titulo2);
                modelovetorial($titulo3);
                modelovetorial($titulo4);
            }else if(substr_count($user_query, ' ') == 4){
                list($titulo1,$titulo2,$titulo3,$titulo4,$titulo5) = split (" ", $user_query, 5);
                modelovetorial($titulo1);
                modelovetorial($titulo2);
                modelovetorial($titulo3);
                modelovetorial($titulo4);
                modelovetorial($titulo5);
        }else{
            echo fgets($file) . "<br/>";
        }
        }
        
        function modelovetorial($query){
            if (array_key_exists($query, $lista) == true){
                echo ("User Query:".$query);
                echo ("Produtos Retornados:".lista($query));
            }
        }
        
}
?>