<!--
	นอกจากคำสั่ง mysqli_fetch_array() เเล้ว ยังมีคำสั่งอีก 2 คำสั่ง คือ

	1.คำสั่ง mysqli_fetch_row(ผลลัพธ์ของคำสั่ง SQL)
	โดยส่งค่า ข้อมูลเป็ชนิด array มี index เป็นหมายเลขลำดับใน field ตาราง 
	โดย field เเรกจะมีหมายเลขเรื่ม index เป็น 0 หมายเลขเสมอ เเละ index ถัดไปจะเป็นหมายเลข 1  2  3 ไปเรื่อยๆ

	2.คำสั่ง mysqli_num_rows(ผลลัพธ์ของคำสั่ง SQL)
	เเสดงผลลัพธ์ เป็นตัวเลข จำนวน Records ทั้งหมดตามคำสั่ง SQL ที่เอาเขียนไว้


-->

<?php 
	$link = mysqli_connect("localhost","root","123456");
	mysqli_set_charset($link,'utf8');

	$sql = "use testdb";
	$result = mysqli_query($link,$sql);
	$sql = "select * from test_table;";

	$result = mysqli_query($link,$sql);
	$num_rescord = mysqli_num_rows($result);
	/*
		เรียกใช้คำสั่ง mysqli_num_rows เพื่อนับเเละ เก็บจำนวน records ของตารางตามคำสั่ง SQL 
		
		mysqli_num_rows($result); เพื่อให้นับจำนวน records ทั้งหมดในตาราง test_table
		นำค่าที่ได้นำไปเก็บไว้ในตัวเเปร $num_rescord
	*/ 
	while ($dbarr = mysqli_fetch_row($result)) // เก็บ record ต่างๆ ไว้ในตัวเเปร array $dbarr
		/*
			เรียกใช้คำสั่ง mysqli_fetch_row เพื่อดึงข้อมูลออกมาจาก ตาราง
			
			mysqli_fetch_row($result) เพื่อดึงข้อมูลทั้งหมดออกมาจากตาราง test_table
			ใช้คำสั่ง while เพื่อวนรอบการทำงาน ให้ดึงออกมาทุก record ตามเงื่อนไขคำสั่ง SQL ที่เขียนไว้
			เเละได้เก็บ records ต่างๆ ไว้ในตัวเเปร array $dbarr
			

		*/ 
	{
		echo "<p>"."รหัสพนักงาน : ".$dbarr[0]. " ชื่อ-สกุล : ".$dbarr[1]." อายุ : ".$dbarr[2]."<p>";
		// ดึงข้อมูลจากในเเต่ละฟิลด์ออกมาเเสดงผล ใช้ตัวเเปร $dbarr โดยกำหนด index เป็นหมายเลขตามลำดับ ฟิลด์ในตารางฐานข้อมูล ซึงอ้างอิงจาก index หมายเลขเเสดงลำดับ field ใน ตาราง
		// เริ่มจาก index 0 เสมอ ถัดมาเป็น 1,2 ... = id,name,age,... ตามลำดับ
	}
	echo "<hr>จำนวนพนักงานทั้งหมด เท่ากับ" .$num_rescord. " คน <p>";
	echo '<a href="Mainfunction.html">กลับหน้าจอหลัก</a>';
	mysqli_close($link);
 ?>