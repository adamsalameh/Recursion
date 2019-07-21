<?php //php 7.0.8

//  F_0 = 0; F_1 = 1;
//  F_n = F_(n-1) + F_(n-2)  n > 1

function fibonacci($c,$n1,$n2)
{
    if ($c > 0) {
        $n3 = $n1 + $n2;
        $n1 = $n2;
        $n2 = $n3;
        echo $n3." ";
        return fibonacci($c-1,$n1,$n2);
    }
}

$count = readline();
$n1 = 0;
$n2 = 1;
echo $n1." " .$n2." ";
fibonacci($count-2,$n1,$n2);
