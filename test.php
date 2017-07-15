<?php
	include './wxModel.php';
	$mod = new wxModel();
	$str = $mod->getWeather('广州');
	// $str = file_get_contents($mod->getWeather('广州'));
	// var_dump($str);
	// echo $str->;exit;
	echo '<pre>';
	$arr = json_decode($str,true);
	var_dump($arr);
	// print_r($arr);
	
	// var_dump($arr['result']);
	// foreach ($arr as $key => $value) {
	// 	echo $value->resultcode;
	// }
	// $arr->result