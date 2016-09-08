<?php
/*<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p>*/
$arr = array('Monday', 'Tuesday', 'Wednesday' ,'Thursday' ,'Friday' ,'Saturday', 'Sunday');
foreach($arr as $day=>$value) {
	if($day>=5){
		echo "<strong>" . $value . "</strong><br>"; 
	} else {
		echo $value . "<br>";
	}
}