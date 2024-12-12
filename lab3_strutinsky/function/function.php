<?php
function create_table2($data, $border=1, $cellpadding=4, $cellspacing=4){
	echo "<table border=$border cellpadding=$cellpadding cellspacing=$cellspacing>\n";
	reset($data);
	$value=current($data);
	while($value)
	{
		echo "<tr><td>$value</td></tr>\n";
		$value = next($data);
	}
	echo '</table>';
}
function create_table($data, $border=1, $cellpadding=4, $cellspacing=4){
	echo "<table border=$border cellpadding=$cellpadding cellspacing=$cellspacing>\n";
	reset($data);
	$value=current($data);
	$value2=current($data);
	echo "<tr>";
	echo "<td> </td>";
	foreach ($data as $current) {
		echo "<td>".$current."</td>";
	}
	echo"</tr>\n";
	foreach ($data as $current) {
		echo "<tr>";
		echo "<td>".$current."</td>";
		foreach ($data as $current2) {
			echo "<td>".$current**$current2."</td>";
		}
		echo"</tr>\n";
		$current2 = 0;
	}
	echo '</table>';
}
function mas_printer($data, $array_order){
	if($array_order == false){
		reset($data);
		for($i = sizeof($data)-1;$i > 0;$i--){
			$data[$i] = mt_rand(0,100);
			echo "array[".$i."] = ".$data[$i].";<br>";
		}
	}else {
		for($i = 0;$i < sizeof($data)-1;$i++){
			$data[$i] = mt_rand(0,100);
			echo "array[".$i."] = ".$data[$i].";<br>";
		}
	}
}
function mas_printer_2($data, $border=1, $cellpadding=4, $cellspacing=4){
	$min_line_array = array();
	$last_col_array = array();
	$min_num = PHP_INT_MAX;
	echo "<table border=$border cellpadding=$cellpadding cellspacing=$cellspacing>\n";
	reset($data);
	echo "<tr>";
	echo "<td> </td>";
	$j = 0;
	for ($i=0; $i < sizeof($data); $i++) {
		echo "<td>Array[$i][$j]</td>";
	}
	echo"</tr>\n";
	for ($i=0; $i < sizeof($data); $i++) { 
		echo "<tr>";
		echo "<td>Array[$j][$i]</td>";
		for ($j=0; $j < sizeof($data); $j++) { 
			echo "<td>".$data[$i][$j]."</td>";
			if($min_num > $data[$i][$j]){
				$min_num = $data[$i][$j];
			}
		}
		$min_line_array[$i] = $min_num;
		$last_col_array[$i] = $data[$i][sizeof($data)-1];
		echo"</tr>\n";
		$j = 0;
		$min_num = PHP_INT_MAX;
	}
	echo '</table>';
	echo "Масив елементів в остоньому стовбцю.<br>";
	for ($i=0; $i < sizeof($last_col_array); $i++) { 
		echo "array[".$i."] = ".$last_col_array[$i]."; ";
	}
	echo "<br>Масив най менших елементів.<br>";
	for ($i=0; $i < sizeof($min_line_array); $i++) { 
		echo "array[".$i."] = ".$min_line_array[$i]."; ";
	}
	
}
function nut_num($data){
	$num_array = array();
	for ($i=0; $i < $data+1; $i++) { 
		$num_array[$i] = $i * $i;
		echo "array[$i] = ".$num_array[$i]."; ";
	}
}
function fun1(){
	echo "Викликати функцію func1<br>";
}
function fun2(){
	echo "Викликати функцію func2<br>";
}
function fun3(){
	echo "Викликати функцію func3<br>";
}
?>