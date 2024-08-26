<?php
    $a=5;
    $fact=1;
    // for($i=5;$i>=1;$i--){
    //     $fact=$fact*$i;
    // }
    while($a>=1){
        $fact*=$a;
        $a--;
    }
    echo $fact;
?>