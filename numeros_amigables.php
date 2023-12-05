<?php

$n1 = 220;
$n2 = 284;


$divisores1 = [];
$divisores2 = [];
// 1184, 1210
$amigos = "";
for( $s1=1000; $s1 <= (1500);$s1++ ){
    for( $s2=$s1; $s2 <= (1500);$s2++ ){
        
        $divisores1[] = $s1/2;
        for( $i=1; $i < ($s1/2);$i++ ){
            if( $s1 % $i == 0 ){
                $divisores1[] = $i;
            }
        }
        
        for( $i=1; $i <= ($s2/2);$i++ ){
            if( $s2 % $i == 0 ){
                $divisores2[] = $i;
            }
        }
        
        if ( $s1 == array_sum($divisores2) && $s2 == array_sum($divisores1) ){
            $amigos = "{$s1} y {$s2} Son numeros amigables";
        } else {
            // echo "No son numeros amigables";
        }


        $divisores1 = [];
        $divisores2 = [];


    }
}

echo $amigos;












?>