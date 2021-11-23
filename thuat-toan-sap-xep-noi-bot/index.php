<?php


$list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
    for ($i = 0; $i < count($list); $i++){
        for ($j = 0; $j < count($list) - $i - 1; $j++){
            if ($list[$j] < $list[$j +1]){
                $item = $list[$j + 1];
                $list[$j + 1] = $list[$j];
                $list[$j] = $item;
            }
        }
    }

    for ($i = 0; $i < count($list); $i++){
        echo $list[$i]. ",";
    }




