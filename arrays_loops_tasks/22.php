<?php
/*<p>22. Нарисуйте пирамиду, как показано на рисунке, 
воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>*/

for($i=1; $i<=9; $i++) {
	for($j=1; $j<=$i*2; $j++) {
		echo 'x';
	}
		echo "<br>";
	}
	
	