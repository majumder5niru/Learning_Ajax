<?php
	header('Content-Type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
	echo '<response>';
	$food = $_GET['food'];
	//return $food;
	$foodArray = array('apple','orange','hilsha','beef','mango','rice','juice','loaf','banana');
	if(in_array($food,$foodArray)){
		echo "We do have ".$food."!!";
	}elseif($food==""){
		echo "Enter some food please!";
	}else{
		echo "Sorry!! we dont sell ".$food;
	}
	echo '</response>';
?>