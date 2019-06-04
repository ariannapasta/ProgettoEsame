<?php
    require_once "connect.php";

    function giorno($data){

        $explode=explode('/', $data);
        $data_ts=mktime(0,0,0,$explode[1], $explode[0], $explode[2]);
        $num_giorno=(int)date("N", $data_ts); //1 Lunedì e 7 Domenica
        echo $num_giorno;
        $giorno=array('', 'lunedì', 'martedì', 'mercoledì', 'giovedì', 'venerdì', 'sabato', 'domenica');
        return $giorno[$num_giorno]; 
    }

?>