<!-- 
	มีการส่งค่า 2 จำนวน
	ค่าเเรก เป็น string
	ค่าสอง เป็น number

	show มี argument $message , $size 
-->

<?php 
	function show($message,$size)
	{
		echo "<H".">";
		echo "$message <br>";
		echo "</H".size.">";
	}
	show("Hello How are you?",1); //<h1></h1>
	show("Good Bye",4); // <h4></h4>
 ?>