<?php declare(strict_types=1);

class PrimeFactors
{
    // public static function isPrime (int $n) :bool
    // {
    //    for ($i = 2; $i < $n; $i++){
    //        if ($n % $i === 0){
    //            return false;
    //        }
    //    }
    //    return true;
    // }

    public static function generatePrimeFactors(int $n) : array
    {
        $PrimeFactorsList = [];

        for ($potentialDivider = 2; $potentialDivider <= $n; $potentialDivider++){
            while ($n % $potentialDivider === 0){
                $PrimeFactorsList[] = $potentialDivider;
                $n /= $potentialDivider;
            }
        }
        
        return $PrimeFactorsList;
    }
}