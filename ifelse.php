<?php
$a=4;
$b=5;
if($a>$b){
    echo "a is greater than b";
}
elseif($a<$b){
    echo "a is less than b <br>";
}

echo 'we can not use direct var'.$a.'to that we have to use. to concatinate two words<br>';
echo "But we can directly use $a or variable $b in double quotes";
echo 'But we can directly use $a or variable $b in double quotes';

echo "the data type of $a is";
var_dump($a);
$c='This is single quoted string .';
echo 'We cant perform action in single quots it prints as it is <br>';
echo 'the char $c ha'.str_word_count($c);
?>