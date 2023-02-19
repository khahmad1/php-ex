<?php
    function digitSum($int){
        $sum=0;
        $i=strval($int);
        for($j=0; $j<strlen($i); $j++){
            $digit=$int%10;
            $sum=$sum+$digit;
            $int=$int-$digit;
            $int=$int/10;
        }
        echo "$sum";
    }
    digitSum(116);