<?php
echo "Первое задание<br><br>";

$a=10;
$b=2;

echo "сумма равна " . $c=$a+$b . "<br> разность равна " . $c=$a-$b . "<br> произведение равно " . $a*$b . "<br> частное равно " . $a/$b . "<br>";
echo '<hr />';
echo "<br>Второе задание<br><br>";

$x = 2;
$y = 6;
$z = 9;
echo $c = ($x+1)*4-2*($z-2*$x**2+$y**2);
echo '<hr />';
echo "<br><br>Третье задание<br><br>";

$a =17;
$b = 10;
$c = $a-$b;
$d = 7;
$result = $c+$d;
echo "$result<br>";
echo '<hr />';
echo "<br>Четвертое задание<br><br>";

$text1='Привет, ';
$text2='Мир!';
echo "$text1 $text2<br>";
echo '<hr />';
echo "<br>Пятое задание<br><br>";

$name = 'Егор';
echo "Привет, $name!<br>";
echo '<hr />';
echo "<br>Шестое задание<br><br>";

$num = '12345';
$total = 0;
for ($i=0; $i < strlen($num); $i++){
$total= $total + $num[$i];
};
echo "$total<br>";
echo '<hr />';
echo "<br>Седьмое задание<br><br>";

$hour = 2000;

$total;
for ($i = $hour; $i < date("Y"); $i++){
    if ($i % 4 == 0){
        $total += 31536000;
    } else {$total += 30758400;}
}
$nowMonth = date("m");
for ($i = 1; $i<$nowMonth; $i++){
    if ($i % 2 !=0){
        $total += 2678400;
    } else {$total += 2592000;}
}
$nowDay = date("d");
$total += (86400 * $nowDay);
echo 'С 2000 года прошло ' . $total . 'c с учетом високосных лет';

echo '<hr />';
echo "<br>Восьмое задание<br><br>";

$time = date("H:i:s");
$hour = date("H");
$minute = date("i");
$second = date("s");
echo $time . ' - вывод через общую функцию date()<br>';
echo $hour . ':' . $minute . ':' . $second . ' - вывод каждой переменной отдельно<br>'; 

echo '<hr />';
echo "<br>Девятое задание<br><br>";

echo '$var = 1;<br>
$var += 12;<br>
$var -= 14;<br>
$var *= 5;<br>
$var /= 7;<br>
$var++;<br>
$var--;<br>';
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo $var;
echo '<hr />';
echo "<br>Десятое задание<br><br>";

define('family', "Елфимов");
define('name1','Егор');
define('firstName','Вячеславович');
define('age','35');
if (defined ('family')){
    echo('Меня зовут ' . family. ' ' . mb_substr(name1, 0, 1) . '.' . mb_substr(firstName, 0, 1) . '<br>');
    echo 'Мне ' . age .  ' лет';    
}