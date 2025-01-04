<?php
$num = rand(1, 100);
$flag = 0;
if($num <= 1){
    echo "Not a prime number";
}
else{
    for($i = 2; $i <= $num; $i++){
        if($num % $i == 0){
            $flag++;
            if($flag > 1){
                break;
            }
        }
    }
    if($flag > 1){
        echo $num . " is a prime number";
    }
    else{
        echo $num . " is not a prime number";
    }
}
