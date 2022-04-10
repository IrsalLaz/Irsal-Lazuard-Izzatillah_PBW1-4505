<?php
//ENKRIPSI
    $pass = 'My Password';
    $user = 'username';

    echo sprintf("Kode enkripsi dari %s menggunakan MD5 adalah %s ", $user, md5($pass.$user));
    echo "<br>";
    echo sprintf("Kode enkripsi dari %s menggunakan sha1 adalah %s ", $user, sha1($pass.$user));
    echo "<br>";
    echo sprintf("Kode enkripsi dari %s menggunakan gost adalah %s ", $user, hash('gost', $pass.$user));
?>
