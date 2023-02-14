<?php

    echo strlen("Hello World!");
    echo "</br>";
    echo strlength("Hello World!");

    function strlength($str) {
        $count = 0;
        $str = str_split($str);
        foreach($str as $letter) {
            $count+=1;
        }
        return $count;
    }