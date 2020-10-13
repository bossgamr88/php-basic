<?php 
	session_start();
	if (($_POST['username'] == "root") && 
		($_POST['password'] == "123"))
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		echo '<a href=admin_session.php>เข้าสู่ระบบ</a>';
	}
	else 
	{
		echo "Error Login";
	}

 ?>

 <!-- 
	คำอธิบายโปรเเกรม
	1.สร้าง form รับ username เเละ password (login_session.html)
	2.กรอก username เเละ password ให้ถูกต้อง เเละ กดปุ่ม login
	3.หลังจากกด login โปรเเกรมจะส่ง username , password ไปที่โปรเเกรม 
	เพื่อตรวจสอบความถูกต้อง ของ username , password (login_session.php)

	4.ที่โปรเเกรม login_session.php มีการลงทะเบียนตัวเเปร session 2 ตัวเเปร
	คือ $username $password เเละสร้าง link เพื่อไปหน้า admin 
	(admin_session.php)
	
	5.ที่โปรเเกรม admin_session.php มีการตรวจสอบค่าตัวเเปร session อีกครั้ง 
	ป้องกัน copy URL ของไฟล์นี้ไว่ ทำให้ไม่สามารถเข้าถึงไฟล์นี้ได้


-->
