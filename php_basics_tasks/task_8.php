<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<body>
<?php
 $age='-2';
    if ($age>=18 && $age<=59)
    echo 'Вам еще работать и работать! ';
    elseif ($age>=60)
    echo 'Вам пора на пенсию!';
    elseif ($age<=17)
    echo 'Вам еще рано работать!';
    elseif ($age<0);
    echo 'Неизвестный возраст!'

?>
</body>
</head>
</html>