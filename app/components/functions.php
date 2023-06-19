<?php
    function clearString($string){
        $a = array("onpet","dono","pet","usuario","conta","email","password","data","concat","bcc","root","+","-","&","/","$","hash","user","id","mysql","insert","select","create","alter","delete","from","*","1=1",'""',"''","drop","DROP","table","TABLE");
        return str_replace($a, '',$string);
    }
?>