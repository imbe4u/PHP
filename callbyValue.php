<?php
//call by value
function call($a)
{
    $a++;
   // return $a;
}

$a=5;
call($a);
echo "call by value ";
echo $a ,"<br>";  


//call by refrence
function ref(&$a){
    $a++;
    //return $a;
}
$a=5;
ref($a);
echo "call by refrence ";
echo $a;

?>