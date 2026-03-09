<?php
// variabel scope / lingkup variabel

$x = 10; // variabel diluar fungsi, disebut dengan variabel global
function tampilX()
{
    $x = 20; // variabel didalam fungsi, disebut dengan variabel lokal
    global $x; // untuk mengakses variabel diluar fungsi, dengan menggunakan keyword global
    echo $x;
}
tampilX();
