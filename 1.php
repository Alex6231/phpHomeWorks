<?php
// 1
function square($num) {
    return $num**2;
}

// 2
function sum($num1, $num2) {
    return $num1 + $num2;
}

// 3
function idk($num1, $num2, $num3) {
    return ($num1-$num2)/$num3;
}

// 4
function day($num) {
    $days = [1=>"Понедельник", 2=>"Вторник", 3=>"Среда", 4=>"Четверг", 5=>"Пятница", 6=>"Суббота", 7=>"Воскресенье"];
    return $days[$num];
}