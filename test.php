<?php
    $a=[1,2.2,'a',true];
    $b=['a'=>1,'b'=>2,'c'=>3];
    $b['d']=4;

    unset($b['d']);

    foreach($b as $key=>$value){
        echo $key;
        echo $value;
    }
    
?>