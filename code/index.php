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
$arr = array(4, 2, 5, 19, 13, 0, 10);
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
$as_arr = array("floor" => $floor, "ceil" => $ceil);

$num_arr = array(4, -2, 5, 19, -130, 0, 10);
echo min($num_arr);
echo max($num_arr);

echo rand(1, 100);
$arr = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
for($i = 0; $i < 10; $i += 1){
    $arr[$i] = rand(1, 100);
}

$a = 16;
$b = 17;
echo abs($a-$b);
$arr = array(1, 2, -1, -2, 3, -3);
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

