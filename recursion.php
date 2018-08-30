<?php //php 7.0.8

 // The power of number by recursion
function power($n, $p){
       
        if ($p == 0){
           return 1; 
        }
        return $n * power($n,$p-1);
    }
    
// Factorial number by recursion
function factorial($n){
       
        if ($n == 0){
           return 1; 
        }
        return $n*factorial($n-1);
    }




  echo power(5,2)."\n";
  echo factorial(5)."\n";
    
?>
