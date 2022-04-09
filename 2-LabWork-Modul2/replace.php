<?php
//REPLACE KATA
    //str_replace(find,replace,string,count) 
    $strings = array (
        'Saya adalah Abdullah',
        'Saya punya seekor kucing yang sangat lucu',
        'Setiap hari ku ajak dia bermain' 
        );        

    $target = array ('Abdullah', 'kucing', 'lucu', 'bermain');
    $replace = array('Abdurrahman', 'bebek', 'gemuk', 'berenang');
    $replaced = str_replace($target, $replace, $strings);

    
    foreach ($replaced as $key => $value) {
        echo $value."<br>";
    }
?>