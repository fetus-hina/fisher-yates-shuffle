<?php
namespace jp3cki\fisherYatesShuffle;

function shuffle(array &$ary)
{
    $ary = array_values($ary);
    $count = count($ary);
    for ($i = $count - 1; $i >= 0; --$i) {
        $r = random_int(0, $i);
        list($ary[$i], $ary[$r]) = [$ary[$r], $ary[$i]];
    }
    return true;
}
