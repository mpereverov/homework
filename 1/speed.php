<?php

$s_RU = "сек";
$m_RU = "мин";
$h_RU = "ч";

$s_msr = $_GET ['s_measure'];
$s = $_GET ['s'];
$t_h = $_GET ['t_h'];
$t_m = $_GET ['t_m'];
$t_s = $_GET ['t_s'];

	if ( !preg_match( "/^[0-9]+$/", $s ) ) {
	echo "Введите только цифры от 0 до 9";
	}
else

{
	function speed_count ( $s, $t_h, $t_m, $t_s ) {
		global $s;
		global $t;
		global $t_msr;
		global $s_RU;
		global $m_RU;
		global $h_RU;
		
		  $t = $t_h * 3600 + $t_m * 60 + $t_s;
		
		if ( !empty($t_s) ) {
			$t_msr = "$s_RU";
			$t = $t_h * 3600 + $t_m * 60 + $t_s;
		}
		
		if ( !empty($t_m) ) {
			$t_msr = "$m_RU";
			$t = $t_h * 60 + $t_m + $t_s / 60;
		}
		
		if ( !empty($t_h) ) {
			$t_msr = "$h_RU";
			$t = $t_h + $t_m / 60 + $t_s / 3600;
		}
		
		$V = $s / $t;
		
		return $V;
	}
	
	$speed = speed_count ( $s, $t_h, $t_m, $t_s );
	
	echo "Пройденное расстояние: " . $_GET ['s'] . $s_msr . "<br>";
	echo "Время в пути: " . round($t, 4) . $t_msr . "<br>";
	echo "Скорость автомобиля: " . round ($speed, 4) . $s_msr . "/" . $t_msr ;
}
?>

