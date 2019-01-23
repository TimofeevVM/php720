<?php
    require_once 'functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP720 tasks</title>

    <style type="text/css">
        pre{
            background-color: rgba(0,0,0,.05);
            padding:10px;
            margin:10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>PHP720 tasks</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 1</h2>
                <p>Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
                    По желанию можете сделать проверку на корректность введения данных пользователем.</p>
                <h4>Result:</h4>
                <code>sumDigitalsOfNumber(123);</code>
                <pre><?var_dump(sumDigitalsOfNumber(123)) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 2</h2>
                <p>Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза</p>
                <h4>Result:</h4>
                <code>countDigitInNumber('34534534543111',1);</code>
                <pre><?var_dump(countDigitInNumber('34534534543111', 1)) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 3</h2>
                <p>Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел. Рекомендую использовать функцию fmod для определения "делится число" или "не делится".</p>
                <h4>Result:</h4>
                <code>sumFmod5();</code>
                <pre><?var_dump(sumFmod5()) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 4</h2>
                <p>Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand), найти максимальное и минимальное значение массива и поменять их местами.</p>
                <h4>Result:</h4>
                <code>replaceMaxAndMinNumber();</code>
                <pre><?var_dump(replaceMaxAndMinNumber()) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 5</h2>
                <p>Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.</p>
                <h4>Result:</h4>
                <code>workWithIndex();</code>
                <pre><?var_dump(workWithIndex()) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 6</h2>
                <p>Вашим заданием будет создание сокращенного варианта ФИО.
                    Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.</p>
                <h4>Result:</h4>
                <code>reductionFullName("Иванов Иван Петрович");</code>
                <pre><?var_dump(reductionFullName("Иванов Иван Петрович")) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 7</h2>
                <p>Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.</p>
                <h4>Result:</h4>
                <code>howHour(180);</code>
                <pre><?var_dump(howHour(180)) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 8</h2>
                <p>Работа светофора запрограммирована таким образом: с начала каждого часа, в течении трех минут горит зеленый сигнал, следующие две минуты горит красный, дальше в течении трех минут - зеленый и т. д. Вам нужно разработать программу, которая по введенному числу определяла какого цвета сейчас горит сигнал.</p>
                <h4>Result:</h4>
                <code>trafficLight(2);</code>
                <pre><?var_dump(trafficLight(2)) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 9</h2>
                <p>Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год). Число может быть в диапазоне от 1 до 9999.</p>
                <h4>Result:</h4>
                <code>isLeapYear(2020);</code>
                <pre><?var_dump(isLeapYear(2020)) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 10</h2>
                <p>Игральным картам присвоены следующие порядковые номера в зависимости от их достоинства: "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14. Порядковые номера остальных карт соответствуют их названиям("семерка", "восмерка" и т. д.). Вам нужно разработать программу, которая выводила достоинство карты по заданному номеру, который будет вводит пользователь.</p>
                <h4>Result:</h4>
                <code>getCard(14);</code>
                <pre><?var_dump(getCard(14)) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 11</h2>
                <p>Составить программу, которая бы по заданному числу выводила его название по китайском календаре. Заданное число не может быть меньше 1924. </p>
                <h4>Result:</h4>
                <code>chineseCalendar(2019);</code>
                <pre><?var_dump(chineseCalendar(2019)) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Task 12</h2>
                <p>Дано натуральное число n. Вычислить: 1<sup>1</sup> + 2<sup>2</sup> + .. + n<sup>n</sup>. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.</p>
                <h4>Result:</h4>
                <code>square(3);</code>
                <pre><?var_dump(square(3)) ?></pre>
                <hr>
            </div>
        </div>
    </div>
</section>


</body>
</html>
