<?php

function checkGenapGanjil($semester, $matakuliah)
{
    if ($semester % 2 == 0) {
        $hasil = 'GENAP';
    } else {
        $hasil = 'GANJIL';
    }

    if ($hasil == $matakuliah) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
