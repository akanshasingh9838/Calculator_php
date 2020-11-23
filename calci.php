<?php
 $opr=$_POST['opr'];
 $temp=(float)$_POST['temp'];
 $result=(float)$_POST['result'];
switch($opr){
	case '+':
		$result = $result + $temp;
		echo($result);
		break;

	case '-':
		$result = $result - $temp;
		echo($result);
		break;

	case '*':
		$result = $result * $temp;
		echo($result);
		break;

	case '/':
		$result = $result / $temp;
		echo($result);
		break;

	case '%':
		$result = $result % $temp;
		echo($result);
		break;
}

?>