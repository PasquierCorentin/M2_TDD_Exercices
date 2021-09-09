<?php declare(strict_types=1);

class BalancedStrings
{
    public static function isBalanced(string $str)
    {
        $string = str_split($str);
        $open_count = 0;

        for ($i = 0; $i < sizeof($string); $i++){
            if ($string[$i] === '('){
                $open_count += 1;
            }

            if ($string[$i] === ')'){
                if ($open_count < 1){
                    return false;
                } else {
                    $open_count -= 1;
                }
                
            }

        }

        return true;
    }
}