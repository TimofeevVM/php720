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

    /**
     *Проверить количество вхождения цифры в число
     *
     * @param int $number
     *
     * @return int
     */
    function countDigitInNumber($number,$digit){
        $count = 0;
        $number = strval($number);

        for ($i=0; $i < strlen($number); $i++){
            if ($number[$i] == $digit){
                $count++;
            }
        }
        return $count;
    }

    /**
     * Найти сумму чисел, которые делятся на 5
     *
     * @return int
     *
     */
    function sumFmod5(){
        $start = 20;
        $end = 45;
        $divider = 5;

        $sum = 0;

        for ($i = $start; $i <= $end; $i++){
            if (fmod($i,$divider)==0){
                $sum += $i;
            }
        }
        return $sum;
    }

    /**
     * Найти максимальное и минимальное значение массива
     *
     * Используются функции PHP
     *
     * @return array
     */
    function replaceMaxAndMinNumber(){
        $arr = [];
        for ($i = 0; $i<10; $i++){
            $arr[] = rand(0,20);
        }
        $orgArr = $arr; // для вывода
        $maxKey = array_keys($arr,max($arr))[0];
        $minKey = array_keys($arr,min($arr))[0];

        list($arr[$maxKey],$arr[$minKey]) = [$arr[$minKey],$arr[$maxKey]];

        return ['orgArr'=>$orgArr,'arr'=>$arr];
    }

    /**
     * Найти максимальное и минимальное значение массива
     *
     * Без функций PHP
     *
     * @return array
     */
    function replaceMaxAndMinNumber1(){
        $arr = [];
        $lenArr = 10;

        for ($i = 0; $i<$lenArr; $i++){
            $arr[] = rand(0,20);
        }
        $orgArr = $arr; // для вывода
        $maxKey = 0;
        $minKey = 0;

        for ($i = 0; $i<$lenArr; $i++){
            if ($arr[$minKey] < $arr[$i]){
                $minKey = $i;
            }

            if ($arr[$maxKey] > $arr[$i]){
                $maxKey = $i;
            }
        }

        $buf = $arr[$maxKey];
        $arr[$maxKey] = $arr[$minKey];
        $arr[$minKey] = $buf;

        return ['orgArr'=>$orgArr,'arr'=>$arr];
    }

    /**
     * Работа с индексами, элементами массива
     * @return array
     */
    function workWithIndex(){
        $arr = [];
        $lenArr = 10;

        for ($i = 0; $i<$lenArr; $i++){
            $arr[] = rand(1,100);
        }

        $resArr=[];
        $op = 1;

        for ($i = 0; $i<$lenArr; $i++){
            if ($arr[$i]>0){
                if (fmod($i,2) == 0){
                    $op *= $arr[$i];
                } else {
                    $resArr[] = $arr[$i];
                }
            }
        }

        return ['op'=>$op,'orgArr'=>$arr,'arr'=>$resArr];
    }

    /**
     * Создание сокращенного варианта ФИО
     *
     * @param string $fullName
     *
     * @return string
     */
    function reductionFullName($fullName){
        $arrName = explode(' ',$fullName);
        return $arrName[0].' '.$arrName[1][0].'. '.$arrName[2][0];
    }

    /**
     * Определения положения стрелки часов
     *
     * @param $deg
     *
     * @return float|int|null
     */
    function howHour($deg){
        if ($deg < 0 || $deg > 360) return null;
        $pct = round(12/360,2);

        $hour = $pct*$deg;
        return round($hour)+1;
    }



