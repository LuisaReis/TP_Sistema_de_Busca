<?php
@header('Content-Type: text/html; charset=utf-8');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $listaInvertidaIndex = array(array());
    
    function xmlRecover(){
        $xml = simplexml_load_file("Base/textDescDafitiPosthaus.xml");
        
        $produtos = array();
        
        foreach($xml->produto as $produto){
            
            list($cat1,$cat2) = split ("/", $produto->categoria, 2);
            listaInvertida($cat1, $produto->img);
            listaInvertida($cat2, $produto->img);

            if(substr_count($produto->titulo, ' ') == 1){
                list($titulo1,$titulo2) = split (" ", $produto->titulo, 2);
                listaInvertida($titulo1, $produto->img);
                listaInvertida($titulo2, $produto->img);
            }else if(substr_count($produto->titulo, ' ') == 2){
                list($titulo1,$titulo2,$titulo3) = split (" ", $produto->titulo, 3);
                listaInvertida($titulo1, $produto->img);
                listaInvertida($titulo2, $produto->img);
                listaInvertida($titulo3, $produto->img);
            }else if(substr_count($produto->titulo, ' ') == 3){
                list($titulo1,$titulo2,$titulo3,$titulo4) = split (" ", $produto->titulo, 4);
                listaInvertida($titulo1, $produto->img);
                listaInvertida($titulo2, $produto->img);
                listaInvertida($titulo3, $produto->img);
                listaInvertida($titulo4, $produto->img);                
            }else if(substr_count($produto->titulo, ' ') == 4){
                list($titulo1,$titulo2,$titulo3,$titulo4,$titulo5) = split (" ", $produto->titulo, 5);
                listaInvertida($titulo1, $produto->img);
                listaInvertida($titulo2, $produto->img);
                listaInvertida($titulo3, $produto->img);
                listaInvertida($titulo4, $produto->img);
                listaInvertida($titulo5, $produto->img);
            }else if(substr_count($produto->titulo, ' ') > 4){
               echo $produto->id;
               if(preg_match("e|de|com|na|do|/",$produto->titulo) === false){
                list($titulo1,$titulo2,$titulo3,$titulo4,$titulo5) = split("e|de|com|na|do|/", $produto->titulo, 5);
                listaInvertida($titulo1, $produto->img);
                listaInvertida($titulo2, $produto->img);
                listaInvertida($titulo3, $produto->img);
                listaInvertida($titulo4, $produto->img);
                listaInvertida($titulo5, $produto->img);
                
                }
            }
            
                list($des1,$des2,$des3,$des4) = split(",|com|e|.", $produto->descricao, 4);
                listaInvertida($des1, $produto->img);
                listaInvertida($des2, $produto->img);
                listaInvertida($des3, $produto->img);
                listaInvertida($des4, $produto->img);
                
                listaInvertida($produto->preco, $produto->img);
            
        }
    }
    
    function listaInvertida($palavra, $imagem){
            if (array_key_exists($palavra, $listaInvertidaIndex) == false) {
               $listaInvertidaIndex = array($palavra => (array($imagem => 1)));
            }else{
                $listaInvertidaIndex($palavra) = array($imagem => 1);
            }
}
    
    function getListaInvertida(){
        return $listaInvertidaIndex;
    }
    
?>