<?php

trait Utility {

    function checkString($string){
        if (strlen(trim($string)) === 0 || !is_string($string)) {
            throw new Exception("Non è stato inserito un testo");
        } else {
            return $string;
        }
    }

}

?>