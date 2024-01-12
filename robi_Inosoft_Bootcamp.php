<?php

function luasLingkaran($radius)
{
    $pi = 3.14;
    return number_format($pi * pow($radius, 2), 2);
}

function kelilingLingkaran($radius)
{
    $pi = 3.14;
    return number_format(2 * $pi * $radius, 2);
}

function luasPersegi($panjang, $lebar)
{
    return number_format($panjang * $lebar, 2);
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        // Kelipatan 3 dan 5
        echo luasPersegi($i / 3, $i / 5) . "\n";
    } elseif ($i % 3 === 0) {
        // Kelipatan 3
        echo luasLingkaran($i / 3) . "\n";
    } elseif ($i % 5 === 0) {
        // Kelipatan 5
        echo kelilingLingkaran($i / 5) . "\n";
    } else {
        // Angka biasa
        echo number_format($i, 2) . "\n";
    }
}
