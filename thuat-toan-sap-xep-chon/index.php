<?php

function selectionSort($list){
    for ($i = 0; $i < count($list) - 1; $i++){
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++){
            if ($list[$j] < $list[$min]){
                $min = $j;
            }
        }
        $list = swapPositions($list, $i, $min);
    }
    return $list;
}

function swapPositions($data, $left, $right){
    $item = $data[$left];
    $data[$left] = $data[$right];
    $data[$right] = $item;

    return $data;
}

$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "<br>";
echo implode(",",$arr);
echo "<br>";
echo implode(",", selectionSort($arr));