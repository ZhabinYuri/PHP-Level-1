<?php
//Exercise 1
$a = mt_rand(-100000, 100000);
$b = mt_rand(-100000, 100000);

echo "$a <br>";
echo "$b <br>";

if ($a>=0 && $b>=0)
    echo "Разность чисел $a и $b составляет: " . ($a - $b);

elseif ($a<0 && $b<0)
    echo "Произведение чисел $a и $b составляет: " . $a * $b;
    
else
    echo "Сумма чисел $a и $b составляет: " . ($a + $b);

echo "<br><br><br>";
//Exercise 2

$a = rand(0,15);
echo $a . "<br>";

switch ($a){
    case 0:
        echo "<br>" . $a++;
    case 1:
        echo "<br>" . $a++;
    case 2:
        echo "<br>" . $a++;
    case 3:
        echo "<br>" . $a++;
    case 4:
        echo "<br>" . $a++;
    case 5:
        echo "<br>" . $a++;
    case 6:
        echo "<br>" . $a++;
    case 7:
        echo "<br>" . $a++;
    case 8:
        echo "<br>" . $a++;
    case 9:
        echo "<br>" . $a++;
    case 10:
        echo "<br>" . $a++;
    case 11:
        echo "<br>" . $a++;
    case 12:
        echo "<br>" . $a++;
    case 13:
        echo "<br>" . $a++;
    case 14:
        echo "<br>" . $a++;
    case 15:
        echo "<br>" . $a;         
}

echo "<br><br><br>";
//Exercise 3

function sum($arg1, $arg2){
    return $arg1 + $arg2;
}

function dif($arg1, $arg2){
    return $arg1 - $arg2;
}

function mult($arg1, $arg2){
    return $arg1 * $arg2;
}

function div($arg1, $arg2){
    if ($arg2 !=0){
       return $arg1 / $arg2; 
    }
    else {
        echo ("На ноль делить нельзя.");
    }
}
//Exerise 4

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case 'addition':
            echo sum($arg1, $arg2);
            break;
        case 'subtraction':
            echo dif($arg1, $arg2);
            break;
        case 'multiplication':
            echo mult($arg1, $arg2);
            break;
        case 'division':
            echo div($arg1, $arg2);
            break;
        default:
            echo 'Неправильное название оперции.';
            break;
    }
}

echo mathOperation(7, 0, division);

echo "<br><br><br>";
//Exercise 6

function power($val, $pow){
    if ($pow == 0){
        return 1;
    }
    else {
        return ($val * power($val, $pow-1)); // Когда $pow достигнет 1, сработает первый if
    }   
}
echo power(5, 3);

echo "<br><br><br>";
//Exercise 7

$hours = date('H');
$minutes = date('i');

if ($hours >= 5 && $hours <=20){
    $hoursEnding = "часов";
}
elseif ($hours == 1 || $hours ==21){
    $hoursEnding = "час";
}
else {
    $hoursEnding = "часа";
}
if (($minutes >= 05 && $minutes <= 20) || ($minutes >= 25 && $minutes <= 30 ) || ($minutes >= 35 && $minutes <= 40) || ($minutes >= 45 && $minutes <= 50) || ($minutes >= 55 && $minutes <=60)){
    $minutesEnding = "минут";
}
elseif ($minutes == 01 || $minutes == 21 || $minutes == 31 || $minutes == 41 || $minutes == 51){
    $minutesEnding = "минута";
}
else {
    $minutesEnding = "минуты";
}

echo $hours . ' ' . $hoursEnding . ' ' . $minutes . ' ' . $minutesEnding;

?>
