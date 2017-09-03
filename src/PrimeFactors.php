<?php

class PrimeFactors
{

    /**
     * @param $number
     * @return array
     */
    public function generate($number) {

        $primes = [];


//        while ($number > 1) //num=9 , can = 2
//        {
//            while ($number % $candidate == 0) //can=3
//            {
//
//                $primes[] = $candidate; //primes = [3] => primes = [3, 3]
//
//                $number /= $candidate; // num = 3
//
//            }
//
//            $candidate++; // can = 3
//        }


        //refactoring
        for ($candidate = 2; $number > 1; $candidate++)
        {
            for (; $number % $candidate == 0; $number /= $candidate)
            {

                $primes[] = $candidate;

            }
        }


        return $primes;
    }
}
