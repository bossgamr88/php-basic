<?php 
	function pass($val)
	{
		$val = $val + 10;
		return $val;
	}

	$value = 100;
	echo "สมมุติตัวเเปร \$value มีค่าเท่ากับ $value <br>";
	echo "ค่าของตัวเเปร \$value ก่อนที่ส่งผ่านค่าไปยัง ฟังก์ชั่นมีค่าเท่ากับ $value <br>";
		pass($value);
	echo "ค่าของตัวเเปร \$value หลังจากคืนค่ากลับจากฟังก์ชั่น มีค่าเท่ากับ $value <br>";
 ?>

 