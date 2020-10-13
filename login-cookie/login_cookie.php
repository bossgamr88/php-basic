<?php 
	session_start();
	if (($_POST['username'] == "root") && 
		($_POST['password'] == "123"))
	{
		setcookie('username',$_POST['username'],time()+3600); 
		setcookie('password',$_POST['password'],time()+3600); 
		echo '<a href=admin_cookie.php>เข้าสู่ระบบ</a>';
	}
	else 
	{
		echo "Error Login";
	}

 ?>

 <!-- 
	คำอธิบายโปรเเกรม
	1.สร้าง form รับ username เเละ password (login_cookie.html)
	2.กรอก username เเละ password ให้ถูกต้อง เเละ กดปุ่ม login
	3.หลังจากกด login โปรเเกรมจะส่ง username , password ไปที่โปรเเกรม 
	เพื่อตรวจสอบความถูกต้อง ของ username , password (login_cookie.php)

	4.ที่โปรเเกรม login_cookie.php มีสร้างตัวเเปร cookie 2 ตัวเเปร
	คือ $user $pass มีอายุ 1 ชั่วโมง เเละสร้าง link เพื่อไปหน้า admin 
	(admin_cookie.php)
	
	5.ที่โปรเเกรม admin_cookie.php มีการตรวจสอบค่าตัวเเปร cookie อีกครั้ง 
	ป้องกัน copy URL เเละ ถ้าไม่ทำการ login ผ่าน login_cookie.html จะไม่สามารถเข้าถึงไฟล์นี้ได้

	6.ที่โปรเเกรม logout.php ทำลายตัวเเปร cookie 2 ตัวเเปร
-->