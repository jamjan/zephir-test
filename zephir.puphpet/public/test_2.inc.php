<?php

function php_pad($padding=1000)
{
    $s = str_pad('a', $padding, '.b') . '.c';
    $a = array_pad([], $padding, 'wrong');
    $a['c'] = 'right';
    $val = current(array_intersect_key($a, array_flip(explode('.', $s))));

    return $val;
}