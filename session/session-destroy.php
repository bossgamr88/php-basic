<?php 
	session_start();
	echo "ยกเลิกการลงทะเบียนตัวเเปรทั้งหมดของ Session <br>";
	session_destroy();
	echo '<a href="page2.php">คลิกไปหน้าไฟล์ที่ 2</a>';
 ?>

<!-- 
 ทดสอบ ทำลาย ตัวเเปร session จาก page1
  $_SESSION['color'] $_SESSION['animal'] $_SESSION['time']

  พอทำลายเสร็จลองกลับไป page2.php ข้อมูลตัวเเปร session ก็จะหาย
  ถ้ายากให้กลับมาก็ตัองไป คลิกที่ page1.php เพื่อลงทะเบียน
  ตัวเเปร session ใหม่ 
-->

 <!-- 
	function session_destroy();
	ใช้ทำลาย ข้อมูลทั้งหมดของ session ต่างจาก 
	session_unregister ที่ต้องระบุตัวเเปรที่ยกเลิกการลงทะเบียน 
	ถ้าตัวเเปรไหนไม่ถูกยกเลิกการลงทะเบียนก็ยังคงเก็บอยู่



 -->