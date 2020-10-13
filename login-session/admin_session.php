<?php 
	session_start();
	if(($_SESSION['username']) == "root" && 
		($_SESSION['password'] == "1234"))
	{
		echo "ยินดีต้อนรับเข้าสู่ Admin <br>";
		echo '<a href="insert.php">เพิ่มข้อมูล</a><br>';
		echo '<a href="delete.php">ลบข้อมูล</a><br>';
		echo '<a href="updateload.php">เเก้ไขข้อมูล</a><br>';
		echo '<a href="select.php">จัดทำรายงาน</a><br>';
	}
	else
	{
		echo "Invalid to entry the Admin page";
	}

 ?>