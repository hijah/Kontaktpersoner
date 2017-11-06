<?php

$ListeKontakt = array();

function AddKontaktperon($newkontaktperson){
    array_push($ListeKontakt,$newkontaktperson);
}




function display($list)
{
    echo 'I display<br>';
    foreach ($list as $item){
        echo $item->name;
        echo '<br>';
    }
}

?>
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 06-11-2017
 * Time: 13:16
 */