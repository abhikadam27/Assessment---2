<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
	
	echo "Num1=".$num1;
	echo "<br/>"."Num2=".$num2;
	$add=$num1+$num2;
	echo"<br/>"."Addition=".$add;
	$sub = $num1-$num2;
	echo "<br/>"."Substraction=".$sub;
	$mul = $num1*$num2;
	echo "<br/>"."Multiplication=".$mul;
	$div = $num1/$num2;
	echo "<br/>"."Division=".$div;
?>