<?php
echo "Задание 1: ";
$arr = ['a', 'b', 'c', 'd', 'e'];
$array_map = array_map('strtoupper', $arr);
print_r($array_map);
echo "<br>";

echo "Задание 2: ";
$a = [1,2,3,4,5];
print_r($a[count($a) - 1]);
echo "<br>";

echo "Задание 3: ";
$array_search = array_search(3, $a);
echo "ключ - " . $array_search . "<br>";

echo "Задание 4: ";
$array1 = [1,2,3];
$array2 = ['a', 'b', 'c'];
$array_merge = array_merge($array1, $array2);
print_r($array_merge);
echo "<br>";

echo "Задание 5: ";
$array = [1,2,3,4,5];
$result = array_slice($array, 1, 3);
print_r($result);
echo "<br>";

echo "Задание 6: ";
$massiv = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($massiv);
$values = array_values($massiv);
print_r($keys);
print_r($values);
echo "<br>";

echo "Задание 7: ";
$mass1 = [1,2,3];
$mass2 = ['a', 'b', 'c'];
$array_combine = array_combine($mass2, $mass1);
print_r($array_combine);
echo "<br>";

echo "Задание 8: ";
$mass = ['a', '-', 'b', '-', 'c', '-', 'd'];
$array_search1 = array_search('-', $mass);
print_r($array_search1);
echo "<br>";

echo "Задание 9: 1)arsort - ";
$massive = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
$massive1 = $massive;
arsort($massive1);
print_r($massive1);
echo " 2)ksort - ";
$massive2 = $massive;
ksort($massive2);
print_r($massive2);
echo " 3)asort - ";
$massive3 = $massive;
asort($massive3);
print_r($massive3);
echo " 4)sort - ";
$massive4 = $massive;
sort($massive4);
print_r($massive4);
echo " 5)rsort - ";
$massive5 = $massive;
rsort($massive5);
print_r($massive5);
echo " 6)krsort - ";
$massive6 = $massive;
krsort($massive6);
print_r($massive6);
echo "<br>";

echo "Задание 10: ";
$string = '1234567890';
$masiv = str_split($string);
$array_sum = array_sum($masiv);
print_r($array_sum);
echo "<br>";

echo "Задание 11: ";
$array_fill = array_fill(0, 10, 'x');
print_r($array_fill);
echo "<br>";

echo "Задание 12: ";
$massive_first = [1,2,3,4,5];
$massive_second = [3,4,5,6,7];
$array_intersect = array_intersect($massive_first, $massive_second);
print_r($array_intersect);
