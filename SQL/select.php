<!-- 

	การเเสดง Records ใน ตาราง 
	สามารถเขียนโปรเเกรม ภาษา php เพื่อเเสดงว่ามีข้อมูลอะไรบ้างอยู่ภายใน ตาราง
	โดยไม่ต้องใช้โปรเเกรม phpmyadmin 

	ถ้าคลิก link "จัดทำรายงาน" ทำการเรียกโปรเเกรมที่ใช้เเสดงข้อมูลที่อยู่ภายในตาราง

	ใช้คำสั่ง mysqli_fetch_array()
	
	รูปเเบบ : mysqli_fetch_array(ผลลัพธ์คำสั่ง SQL)
	โดยส่งค่า ข้อมูลเป็ชนิด array มี index เป็น field ต่างๆของ records
	เเละในการดึงข้อมูลในการดึงข้อมูลจะใช้วิธี การวนรอบดึงข้อมูลออกมาทีละ เรคอร์ด
	ในที่นี้จะใช้งานร่วมกับ while ให้ loop ค่าใน array ออกมา จะเเสดงเรคอร์ด ทั้งหมดในตาราง
-->

<?php 
	$link = mysqli_connect("localhost","root","123456");
	mysqli_set_charset($link,'utf8');

	$sql = "use testdb";
	$result = mysqli_query($link,$sql);
	$sql = "select * from test_table;";
	/*
		ใช้คำสั่ง SQL คือ select * from  test_table; ดึงทุกเรคอร์ดจากตราง test_table
	*/

	$result = mysqli_query($link,$sql);
	while ($dbarr = mysqli_fetch_array($result)) 
	{
		echo "<p>"."รหัสพนักงาน : ".$dbarr['id']. " ชื่อ-สกุล : ".$dbarr['name']." อายุ : ".$dbarr['age']."<p>";
	}
	echo '<a href="Mainfunction.html">กลับหน้าจอหลัก</a>';
	mysqli_close($link);
 ?>