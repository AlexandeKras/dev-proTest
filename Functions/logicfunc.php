<?php
/**
 * 1.1
 * The evil clown wants emoticons to have no more than one parenthesis in a row.
 * Write with PHP a function to help him with this.
 */
function clown(){
    $str = '=)) =) =))))) =(( =(';
    $str = preg_replace('/(\)){2,}/', '$1', $str);
    $str = preg_replace('/(\(){2,}/', '$1', $str);
    echo $str;
}
echo clown();
/**
 * 1.2
 * The ticket number consists of 6 numbers. The ticket is lucky if the sum of the first three numbers
 * equals the sum of the next three numbers. Examples of such ticket numbers: 933591, 030300.
 * Write with PHP a function that returns all lucky numbers.
 */
function happyCoupon(){
    $count= 0;
    for($i=1;$i<=999999;$i++){
        $str = (string)$i;
        if(strlen($str)<6){
            for($j=strlen($str);$j<6;$j++){
                $str='0'.$str;
            }
        }
        If($str[0]+$str[1]+$str[2] == $str[3]+$str[4]+$str[5]){
            $count++; echo 'Билет номер: '.$str.'<br>';
        }
    }
    echo 'Количество счастливых билетов: '.$count;
}
echo happyCoupon();