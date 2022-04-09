<?php
    primeCheck(1,11);
    function primeCheck($m, $n){
        if ($n >= $m) {
            echo "Batasan Salah!";
        }else{
            $jumlah = 0;

            for ($n; $n < $m ; $n++) { 
                $count = 0;

                for ($i=1; $i < $m; $i++) { 
                    if ($n % $i == 0) {
                        $count++;
                    }
                   
                }if ($count == 2) {
                    echo "$n, ";
                    $jumlah++;
                }
            }
            echo "Ada ".$jumlah." bilangan Prima";
        }
    }
?>