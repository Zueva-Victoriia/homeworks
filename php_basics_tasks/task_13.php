<?php

//. #<p>13.  Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.</p>

$s = 100; // длина участка, который проехал автомобиль, км;
$t = 5; // время движения в часах;
$v_km_h = $s / $t; // скорость движения км в час;

echo "Скорость автомобиля на заданном участке - ", $v_km_h, " км/час;";

$v_m_c = (1000*$s) / (3600*$t);

echo "  Скорость автомобиля на заданном участке в м/с - ", $v_m_c, " м/с;";

