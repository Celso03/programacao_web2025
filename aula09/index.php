<?php
require_once 'pastas.php';

    $pastas =

array("bsn" =>

array("3a Fase" =>

array("desenvWeb",
"bancoDados 1", "engSoft 1"),

"4a Fase" =>

array("Intro Web",
"bancoDados 2", "engSoft 2")));

function listarPastas($pasta){
    if(is_array($pasta)){
        foreach($pasta as $elemento => $valor){
            if(is_array($valor)){
            echo $elemento ."<br>";
            listarPastas($valor);
            }else{ 
                echo str_repeat("-",$nivel) . $elemento."<br>";
            }
        }
    }else {
        echo $pasta
    }
}

?>