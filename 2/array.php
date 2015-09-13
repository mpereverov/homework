<?php

$arr = range ( -10, 10);
shuffle ($arr);
$min = $arr[0];

echo "Исходный массив: ";
foreach ( $arr as $key => $num ) {
	echo "[$num] ";

	if ( $num < $min ) {
		$min = $num;
		$minKey = $key;
	}
}

echo "<br>";
echo "Минимальный элемент массива: <span style = \"color: red\">" . $min . "[" . $minKey . "]</span><br>";

echo "Измененный массив: ";
foreach ( $arr as $key => $num ){
	if ( $key < $minKey ){
		$num = $num * $min;
		$num =  "<span style = \"color: red\">" . $num . "</span>";
	}

	echo "[$num] ";
}

?>
