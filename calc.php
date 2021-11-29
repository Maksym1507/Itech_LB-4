<h1>Калькулятор</h1>
<form action ="" method="post">
<input type="textbox" name="firstValue" placeholder="первое число" required>

<select name ="operation" required>
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<option value="%">%</option>
</select>

<input type="textbox" name="secondValue" placeholder="второе число" required>

<input type="submit" name="submit" value="Вычислить">
</form>
<?php
	if(isset($_POST['submit']))
	{
		$a = $_POST['firstValue'];
		$b = $_POST['secondValue'];
		$operation = $_POST['operation'];
		if(!is_numeric($a) || !is_numeric($b)){
			$error = "Значения должны быть числами";
	    }
		else{
			if($operation=='+')
				$result= $a + $b;
			else if($operation=='-')
					$result= $a - $b;
			else if($operation=='*')
					$result= $a * $b;
			else if($operation=='/'){
				if($b=='0')
					$error = "На 0 делить нельзя!";
				else $result= $a / $b;
			}
			else if($operation=='%')
				if($b=='0')
					$result="NaN";
				else
					$result=$a%$b;
		}
		if(isset($error)){
			echo "Ошибка: $error";
		}
		else {
			echo "Ответ: $result";
		}
	} 
?>
