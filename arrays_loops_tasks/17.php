<?php
/*
<p>17.Составьте массив месяцев. С помощью цикла foreach выведите все
месяцы, а текущий месяц выведите жирным. 
Текущий месяц должен храниться в переменной $month.</p>
*/
$month = 'September';
$arr = array('January', 'February', 'March', 'Apri', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	foreach($arr as $key=>$value){
		if($month == $value){
			echo "<strong>" . $value . "</strong><br>";
		} else {
			echo  $value . "<br>";
		}
		
		}