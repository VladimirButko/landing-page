<?php
    function d($ar){
        echo "<pre>";
        print_r($ar);
        echo "</pre>";
    }
    $db = mysqli_connect('localhost', 'root', '', 'svetlana_sokolova');
    mysqli_set_charset($db, 'utf8');
?>
