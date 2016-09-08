<?php
/*<p>19. Составьте массив дней недели. 
С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. 
Текущий день должен храниться в переменной $day.</p>*/

$arr = array('Monday', 'Tuesday', 'Wednesday' ,'Thursday' ,'Friday' ,'Saturday', 'Sunday');
$day = 'Wednesday';
foreach($arr as $key) {
	if($day == $key){
		echo "<i>". $key . "</i><br>"; 
	} else {
		echo $key . "<br>";
	}
}
 