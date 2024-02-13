<?php
$a = 11;

if($a > 0){
    echo "$a adalah nilai positif";

    if($a > 10){
        echo " & lebih besar dari 10";
    }else{
        echo " & tidak lebih besar dari 10 ";
    }
    
}elseif($a == 0){
    echo "cacah";
}else{
    echo"$a adalah negatif";
}

?>