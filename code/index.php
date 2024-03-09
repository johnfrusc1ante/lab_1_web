<?php
$very_bad_unclear_name = "s proshedshim ";
$order = &$vary_bad_unclear_name;
$order = $order."8 marta";
echo "\nyou have 1 unread message: $very_bad_unclear_name\n";

$a = 4;
echo $a;
$b = 3.14;
echo "\n";
echo $b;
echo "\n";
echo 9+3;
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month-$this_month;

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;

$my_num = 69;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

$a = 10;
$b = 3;
echo $a%$b;

if ($a%$b == 0)
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
$as_arr = ["floor" => $floor, "ceil" => $ceil];

$num_arr = [4, -2, 5, 19, -130, 0, 10];
echo min($num_arr);
echo max($num_arr);

echo rand(1, 100);
$arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
for($i = 0; $i < 10; $i += 1){
    $arr[$i] = rand(1, 100);
}

$a = 16;
$b = 17;
echo abs($a-$b);
$arr = [1, 2, -1, -2, 3, -3];
foreach($arr as &$value){
    $value = abs($value);
}

$num = rand(1, 100);
$arr = [];
for ($i=1; $i <= $num; $i++) {
    if ($num % $i == 0)
        $divisor_arr[] = $i;
}
echo "Делители числа $num: ", implode(", ", $divisor_arr);

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$num = 0;
for ($i=0; $i <= sizeof($arr) && $sum <= 10; $i += 1) {
    $sum += $arr[$i];
    $num += 1;
}
echo "Необходимо сложить $num первых элементов чтобы получилась сумма больше 10.";

function printStringReturnNumber($str)
{
    echo $str;
    $num = 69;
    return $num;
}
$my_num = printStringReturnNumber("Hasbula");
echo $my_num;

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
    while ($num > 9) {
        $digits_sum = 0;
        $str_num = (string)($num);

        for ($i = 0; $i < strlen($str_num); $i++)
            $digits_sum += intval($str_num[$i]);

        $num = $digits_sum;
    }

    return $num;
}
echo "Сумма цифр массива: ", countDigitsSum($num);

$arr = [];
function arrayFillWithXxx($arr, $num)
{
    for ($i=1; $i <= $num; $i += 1)
        $arr[$i-1] = str_repeat("x", $i);

    return $arr;
}
echo "Массив, заполненый 'x', 'xx', 'xxx', ...: ", implode(", ", arrayFillWithXxx($arr, 5));

function arrayFill($str, $num)
{
    $arr = [];
    for ($i=1; $i <= $num; $i += 1)
        $arr[$i-1] = $str;

    return $arr;
}
echo "Массив, заполненный заданными значениями: ", implode(", ", arrayFill("hehe", 5));

$arr_two_d = [[158, 13, 2], [1, 7], [89]];
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
echo "Сумма двумерного массива: ", sumArray($arr_two_d);

function createTwoDimensionalArray($rows, $columns)
{
    for ($i = 0; $i < $rows; $i += 1) {
        $arr[$i] = [];
        for ($j = 0; $j < $columns; $j += 1)
            $arr[$i][$j] = ($i * $columns) + ($j + 1);
    }
    return $arr;
}
$new_arr = createTwoDimensionalArray(3, 3);
echo "Созданный двумерный массив: ";
for ($i = 0; $i < sizeof($new_arr); $i++) {
    for ($j = 0; $j < sizeof($new_arr[$i]); $j++)
        echo $new_arr[$i][$j] . " ";
    echo "\n";
}

$multi_arr = [2, 5, 3, 9];
$result = ($multi_arr[0] * $multi_arr[1]) + ($multi_arr[2] * $multi_arr[3]);
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


function checkSum($num, $num1)
{
    if (($num + $num1) > 10)
        return "true";
    else
        return "false";
}
echo "Результат при сложении 1 и 11: ", checkSum(1, 11);
echo "Результат при сложении 2 и 3: ", checkSum(2, 3);

function checkEqual($num, $num1)
{
    if ($num == $num1)
        return "true";
    else
        return "false";
}
echo "Результат при сравнении 5 и 5: ", checkEqual(5, 5);
echo "Результат при сравнении 2 и 3: ", checkEqual(2, 3);

$test = 1;
if ($test == 0)
    echo "верно";

$age = rand(1, 150);
function checkAge($age)
{
    if (($age > 10) && ($age < 99)) {
        $sum = ($age % 10) + (int)($age / 10);
        echo "Сумма цифр $age: ", $sum;
        echo "Сумма цифр $age двузначна.";
    }
    elseif ($age > 99)
        echo "Число $age вне диапозона от 10 до 99.";
    else
        echo "Сумма цифр $age однозначна.";
}
checkAge($age);

$another_arr = [1, 2, 3];
function checkArrayElements($arr)
{
    $sum = 0;
    if (sizeof($arr) == 3) {
        for ($i = 0; $i < sizeof($arr); $i++)
            $sum += $arr[$i];

        echo "Сумма трёх элементов массива: ", $sum;
    }
    else
        echo "В массиве не три элемента ровно.";
}
checkArrayElements($another_arr);


$rows = 20;
echo "Пирамидка:";
for ($i = 1; $i <= $rows; $i +=1)
    echo str_repeat("x", $i);


$arr = [14, 251, 215, 903];
$average = array_sum($arr) / sizeof($arr);
echo "Среднее арифмитическое массива: $average";

$sum = (100 * (1 + 100)) / 2;
echo "Сумма чисел от 1 до 100: ", $sum;

$arr_1 = [225, 9, 1];
$arr_2 = array_map('sqrt', $arr_1);
echo "Массив квадратных корней: ", implode(", ", $arr_2);

$chars = range("a", "z");
$nums = range(1, 26);
$arr = array_combine($chars, $nums);

$nums = "1234567890";
$arr = str_split($nums, 2);
$sum = array_sum($arr);
echo "Сумма пар чисел: ", $sum;