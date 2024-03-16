<?php
//task 1
$veryBadUnclearName = "s proshedshim ";
$order = $veryBadUnclearName;
$order = $order."8 marta";
echo "\nyou have 1 unread message: $veryBadUnclearName\n";

//task 2
$a = 4;
echo $a;
$b = 3.14;
echo "\n";
echo $b;
echo "\n";
echo 9+3;
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo $lastMonth - $thisMonth;

//task 11
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo $daysPerLanguage;

//task 12
echo 8 ** 2;

//task 13
$myNum = 69;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer;

//task 14
$a = 10;
$b = 3;
echo $a % $b;

if (0 === $a % $b)
    echo "делится";
else
    echo "делится с остатком";

$st = pow(2, 10);
echo $st;
echo sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach($arr as &$value){
    $sum += pow($value, 2);
}
echo sqrt($sum);

echo round(sqrt(379), 0);
echo round(sqrt(379), 1);
echo round(sqrt(379), 2);
$floor = floor(sqrt(587));
$ceil = ceil(sqrt(587));
$asArr = ["floor" => $floor, "ceil" => $ceil];

$numArr = [4, -2, 5, 19, -130, 0, 10];
echo min($numArr);
echo max($numArr);

echo rand(1, 100);
$arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
for($i = 0; $i < 10; $i += 1){
    $arr[$i] = rand(1, 100);
}

$a = 16;
$b = 17;
echo abs($a - $b);
$arr = [1, 2, -1, -2, 3, -3];
foreach($arr as &$value){
    $value = abs($value);
}

$num = rand(1, 100);
$arr = [];
for ($i = 1; $i <= $num; $i += 1) {
    if (0 === $num % $i)
        $divisorArr[] = $i;
}
echo "Делители числа $num: ", implode(", ", $divisorArr);

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$num = 0;
for ($i = 0; $i <= sizeof($arr) && $sum <= 10; $i += 1) {
    $sum += $arr[$i];
    $num += 1;
}
echo "Необходимо сложить $num первых элементов чтобы получилась сумма больше 10.";

//task 15
function printStringReturnNumber($str)
{
    echo $str;
    $num = 69;
    return $num;
}
$myNum = printStringReturnNumber("Hasbula");
echo $myNum;

//task 16
function increaseEnthusiasm($str)
{
    $str .= "!";
    return $str;
}
echo "Результат работы increaseEnthusiasm(): ", increaseEnthusiasm("AAA");

function repeatThreeTimes($str)
{
    $str .= " " . $str . " " . $str;
    return $str;
}
echo "Результат работы repeatThreeTimes(): ", repeatThreeTimes("Где деньги, Вова?");

echo "Результат работы increaseEnthusiasm(repeatThreeTimes()): ",
increaseEnthusiasm(repeatThreeTimes("Вова у меня расписка есть"));

function cut($str, $num = 10)
{
    return substr($str, $num);
}
echo "Результат работы cut() при вводе строки '111115' и числа 5: ", cut("1111122225", 5);

$arr = [1, 4, 5, 1984, 2024];
function printArr($arr, $i = 0)
{
    if ($i < sizeof($arr)) {
        echo $arr[$i], " ";
        printArr($arr, $i + 1);
    }
}
echo "Вывод массива с помощью рекурсии: ", printArr($arr);

$num = rand(999, 9999);
function countDigitsSum($num)
{
    while (9 < $num) {
        $digitsSum = 0;
        $strNum = (string)($num);

        for ($i = 0; $i < strlen($strNum); $i += 1)
            $digitsSum += intval($strNum[$i]);

        $num = $digitsSum;
    }

    return $num;
}
echo "Сумма цифр массива: ", countDigitsSum($num);

//task 17
$arr = [];
function arrayFillWithXxx($arr, $num)
{
    for ($i = 1; $i <= $num; $i += 1)
        $arr[$i - 1] = str_repeat("x", $i);

    return $arr;
}
echo "Массив, заполненый 'x', 'xx', 'xxx', ...: ", implode(", ", arrayFillWithXxx($arr, 5));

function arrayFill($str, $num)
{
    $arr = [];
    for ($i = 1; $i <= $num; $i += 1)
        $arr[$i - 1] = $str;

    return $arr;
}
echo "Массив, заполненный заданными значениями: ", implode(", ", arrayFill("hehe", 5));

$arrTwoD = [[158, 13, 2], [1, 7], [89]];
function sumArray($arr)
{
    $sum = 0;
    foreach ($arr as $value) {
        if (is_array($value))
            $sum += sumArray($value);
        else
            $sum += $value;

    }
    return $sum;
}
echo "Сумма двумерного массива: ", sumArray($arrTwoD);

function createTwoDimensionalArray($rows, $columns)
{
    for ($i = 0; $i < $rows; $i += 1) {
        $arr[$i] = [];
        for ($j = 0; $j < $columns; $j += 1)
            $arr[$i][$j] = ($i * $columns) + ($j + 1);
    }
    return $arr;
}
$newArr = createTwoDimensionalArray(3, 3);
echo "Созданный двумерный массив: ";
for ($i = 0; $i < sizeof($newArr); $i += 1) {
    for ($j = 0; $j < sizeof($newArr[$i]); $j += 1)
        echo $newArr[$i][$j] . " ";
    echo "\n";
}

$multiArr = [2, 5, 3, 9];
$result = ($multiArr[0] * $multiArr[1]) + ($multiArr[2] * $multiArr[3]);
echo "Результат операций с массивом [2, 5, 3, 9]: ", $result;

$user = ['name' => 'Bogdan', 'surname' => 'Vavilov', 'patronymic' => 'Sergeevich'];
echo "Имя, фамилия, отчество: ", $user['name'].' '.$user['surname'].' '.$user['patronymic'];

$date = ['year' => '2024', 'month' => '03', 'day' => '08'];
echo "Дата: ", $date['year'].'-'.$date['month'].'-'.$date['day'];

$arr1 = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов массива ['a', 'b', 'c', 'd', 'e']: ", sizeof($arr1);

$arr2 = ['a', 'b', 'c', 'd', 'e'];
echo "Последний элемент массива ['a', 'b', 'c', 'd', 'e']: ", $arr1[4];
echo "Предпоследний элемент массива ['a', 'b', 'c', 'd', 'e']: ", $arr1[3];


//task 18
function checkSum($num, $num1)
{
    if (10 < ($num + $num1))
        return "true";
    else
        return "false";
}
echo "Результат при сложении 1 и 11: ", checkSum(1, 11);
echo "Результат при сложении 2 и 3: ", checkSum(2, 3);

function checkEqual($num, $num1)
{
    if ($num === $num1)
        return "true";
    else
        return "false";
}
echo "Результат при сравнении 5 и 5: ", checkEqual(5, 5);
echo "Результат при сравнении 2 и 3: ", checkEqual(2, 3);

$test = 1;
if (0 === $test)
    echo "верно";

$age = rand(1, 150);
function checkAge($age)
{
    if ((10 < $age) && (99 > $age)) {
        $sum = ($age % 10) + (int)($age / 10);
        echo "Сумма цифр $age: ", $sum;
        echo "Сумма цифр $age двузначна.";
    }
    elseif (99 < $age)
        echo "Число $age вне диапозона от 10 до 99.";
    else
        echo "Сумма цифр $age однозначна.";
}
checkAge($age);

$anotherArr = [1, 2, 3];
function checkArrayElements($arr)
{
    $sum = 0;
    if (3 === sizeof($arr)) {
        for ($i = 0; $i < sizeof($arr); $i += 1)
            $sum += $arr[$i];

        echo "Сумма трёх элементов массива: ", $sum;
    }
    else
        echo "В массиве не три элемента ровно.";
}
checkArrayElements($anotherArr);

//task 19
$rows = 20;
echo "Пирамидка:";
for ($i = 1; $i <= $rows; $i += 1)
    echo str_repeat("x", $i);

//task 20
$arr = [14, 251, 215, 903];
$average = array_sum($arr) / sizeof($arr);
echo "Среднее арифмитическое массива: $average";

$sum = (100 * (1 + 100)) / 2;
echo "Сумма чисел от 1 до 100: ", $sum;

$arr1 = [225, 9, 1];
$arr2 = array_map('sqrt', $arr1);
echo "Массив квадратных корней: ", implode(", ", $arr2);

$chars = range("a", "z");
$nums = range(1, 26);
$arr = array_combine($chars, $nums);

$nums = "1234567890";
$arr = str_split($nums, 2);
$sum = array_sum($arr);
echo "Сумма пар чисел: ", $sum;