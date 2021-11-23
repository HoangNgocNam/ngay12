<?php
include_once "Country.php";
function selectionSort($arr){
    for ($i = 0 ; $i < count($arr) - 1; $i++){
        $max =$i;
        for ($j = $i + 1; $j < count($arr); $j++){
            if ($arr[$j]->getTotalGoldMedals() < $arr[$max]->getTotalGoldMedals()){
                $max = $j;
            }
        }
        $tg = $arr[$i];
        $arr[$i] = $arr[$max];
        $arr[$max] = $tg;
    }
    return $arr;
}
$nation = new SplStack();
$nation->push(new Country("Viet Nam",100));
$nation->push(new Country("trung quoc",75));
$nation->push(new Country("han quoc",88));
$nation->push(new Country("nhat ban",90));
$nation->push(new Country("lao",79));
$nation->push(new Country("campuchia",65));
$nation->push(new Country("thai lan",85));

echo "<pre>";
print_r(selectionSort($nation));

