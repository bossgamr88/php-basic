<?php 
	setcookie("username","john",time()+60);
	setcookie("password","123",time()+60);
	echo '<a href="showcookie.php">คลิกที่นี่ เพื่อตรวจสอบ Cookie</a>';
 ?>

 <!-- 
 	Cookie คือ ข้อมูลที่ส่งไปเก็บไว้ในเครื่องผู้ใช้งาน 
 	เพื่อตรวจสอบ เเละ ติดตามการทำงานของ user

 	โดย Browser จะส่งข้อมูล user ที่จัดเก็บไว้ในเครื่องมายัง เว็บ server 
 	เเละ นำ cookie มาเนี้เองมาเก็บไว้ในตัวเเปร ทำให้สามารถตรวจสอบค่าต่างๆ ของ user ได้

 	function ของ php ใช้งาน cookie คือ

 	setcookie() ใช้สร้างเเละทำลาย ตัวเเปร cookie
 	ob_start() เเละ ob_end_flush() เพื่อเปิด/ปิด ใช้งานหน่วยความจำชั่วคราว

	รูปเเบบ function setcookie()
	setcookie("ชื่อ","ค่า",เวลาหมดอายุ) ถ้าครบอายุตัวเเปร cookie ก็จะถูกทำลาย

	setcookie("ชื่อ","ค่า")  สร้างตัวเเปร cookie ที่ไม่หมดอายุ

	setcookie("ชื่อ")  ทำตัวเเปร cookie ให้ไม่ให้เก็บค่าใดๆ ไว้


 -->