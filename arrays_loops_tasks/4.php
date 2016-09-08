<?php
header('Content-Type: text/html; charset=UTF-8');

/*Работа с ключами
<p>4. Дан массив $arr. 
С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
*/
	$arr = array(
	'green'=>'зеленый',
	'red'=>'красный',
	'blue'=>'голубой'
	);
foreach($arr as $key=>$value) {
		echo 'This is the key = ' . $key . '<br>';
	};
	foreach($arr as $key=>$value) {
		echo 'Это его значение = ' . $value . '<br>';
	};
	
	
	