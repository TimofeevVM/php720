<?php
    /**
     * Created by PhpStorm.
     * User: Timofeev
     * Date: 23.01.2019
     * Time: 12:30
     */

    /**
     * Найти сумму цифр числа
     *
     * @param string $number
     *
     * @return int|null
     */
    function sumDigitalsOfNumber($number){
        if (!is_numeric($number)){
            return null;
        }

        $sum = 0;
        for ($i=0; $i < strlen($number); $i++){
            $sum += $number[$i];
        }

        return $sum;
    }


