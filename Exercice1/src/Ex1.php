<?php declare(strict_types=1);

class Exo1
{
    public static function isLeapYear(int $year) : bool
    {
        // if ($year % 4 === 0){ // % = modulo = reste dans div euclidienne
        //     if ($year % 100 === 0){
        //         return false;
        //     } else {
        //         if ($year % 400 === 0){
        //             return false;
        //         } else {
        //             return true;
        //         }
        //     }
        // } else {
        //     return false;
        // }
        
        if ($year % 400 === 0){
            return true;
        }

        if ($year % 100 === 0){
            return false;
        }

        if ($year % 4 === 0){
            return true;
        }

        return false;
    }
}

