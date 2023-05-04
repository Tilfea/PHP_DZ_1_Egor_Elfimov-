<?php
echo "Первое задание<br><br>";

$a=10;
$b=2;

echo "сумма равна " . $c=$a+$b . "<br> разность равна " . $c=$a-$b . "<br> произведение равно " . $a*$b . "<br> частное равно " . $a/$b . "<br>";

echo "<br>Второе задание<br><br>";

$x = 2;
$y = 6;
$z = 9;
echo $c = ($x+1)*4-2*($z-2*$x**2+$y**2);

echo "<br><br>Третье задание<br><br>";

$a =17;
$b = 10;
$c = $a-$b;
$d = 7;
$result = $c+$d;
echo "$result<br>";

echo "<br>Четвертое задание<br><br>";

$text1='Привет, ';
$text2='Мир!';
echo "$text1 $text2<br>";

echo "<br>Пятое задание<br><br>";

$name = 'Егор';
echo "Привет, $name!<br>";

echo "<br>Шестое задание<br><br>";

$num = '12345';
$total = 0;
for ($i=0; $i < strlen($num); $i++){
$total= $total + $num[$i];
};
echo "$total<br>";

echo "<br>Седьмое задание<br><br>";

echo "<br>Восьмое задание<br><br>";

echo "<br>Девятое задание<br><br>";


echo '$var = 1;<br>
$var += 12;<br>
$var -= 14;<br>
$var *= 5;<br>
$var /= 7;<br>
$var++;<br>
$var--;<br>';

echo "<br>Десятое задание<br><br>";

$family = "Елфимов";
$name1 = "Егор";
$firstName = "Вячеславович";
$age = 34;
// print_r(mb_substr($name1, 0, 1));
echo('Меня зовут ' . $family. ' ' . mb_substr($name1, 0, 1) . '.' . mb_substr($firstName, 0, 1) . '<br>');
echo "Мне $age лет";