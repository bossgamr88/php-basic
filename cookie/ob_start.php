<!-- 
<?php 

	// echo "สร้างตัวเเปร \$_COOKIE['username']";
	// echo " เเละ \$_COOKIE['password']<p>";
	// setcookie("username","john",time()+60);
	// setcookie("password","123",time()+60);
	// echo '<a href="showcookie.php">คลิกที่นี่ เพื่อตรวจสอบ Cookie</a>';
 ?>

 ข้อจำกัด setcookie() คือ ห้ามใช้หลัง function หรือ คำสั่ง php 
 ไม่งั้นจะเกิดข้อผิดพลาด 



เหตุที่เกิดข้อผิดพลาดคือ เนื่องจาก การรับ-ส่ง ระหว่าง เว็บ server เเละ เว็บ browser
เป็นข้อมูล ในส่วน header ของโปรโตคอล HTTP เกิดข้อผิดพลาดคือ 
Cannot modify header information ไม่อนุญาติทำการเปลี่ยนเเปลงเเก้ไขในส่วนของ header

วิธีเเก้ ต้องเก็บข้อมูลพักไว้ในหน่วยความจำชั่วคราว (Buffet) ก่อนเเล้วค่อยส่งไปทีเดียว

php มี  function 
ob_start  เพื่อเปิดใช้งานหน่วยความจำชั่วคราว, 
ob_end_flush() เพื่อปิดใช้งานหน่วยความจำชั่วคราว 
 


-->
<?php 
	ob_start();
	echo "สร้างตัวเเปร \$_COOKIE['username']";
	echo " เเละ \$_COOKIE['password']<p>";
	setcookie("username","john",time()+60);
	setcookie("password","123",time()+60);
	echo '<a href="showcookie.php">คลิกที่นี่ เพื่อตรวจสอบ Cookie</a>';
 	ob_flush();
?>
