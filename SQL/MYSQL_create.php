
<!-- สร้างฐานข้อมูล เเละ ตาราง ใน ภาษา PHP

คำสั่งที่สำคัญที่ใช้ในการจัดการคือ คำสั่ง mysqli_query() 
โดยคำสั่งนี้จะรับคำสั่ง SQL เเล้วไปประมวลผลต่อไป

รูปเเบบ : mysqli_query(ตัวเเปรเชื่อมต่อ,คำสั่ง SQL)

mysqli_query(ตัวเเปรการเชื่อมต่อ,คำสั่ง SQL );

ผลลัพธ์คำสั่งนี้ จะส่งค่าจริง (True) เมื่อสามารถทำคำสั่ง SQL ได้ 
ส่งค่าเท็จ (False) เมื่อไม่สามารถทำคำสั่ง SQL ได้ (เช่นพิมพ์คำสั่งผิด)


Database Name : testdb
Table Name : test_table

Database Structure

NameField | DataType | Length | Other 
id		  |	VARCHAR	 |	3	  |	Primary Key
name	  | VARCHAR	 |	25    |
age		  |	INT		 |	2     |


-->

<?php 
	$link = mysqli_connect("localhost","root","123456");
	mysqli_set_charset($link,'utf8');
	$sql = "Create Database testdb".
				"Character Set utf8".
				"Collate utf8_unicode_ci;";
	$sql = "Create Database testdb;";
	/*สร้างฐานข้อมูลชื่อว่า testdb โดยใช้คำสั่ง Create Database ชื่อ Database*/
	$result = mysqli_query($link,$sql);
	if ($result) {
		echo "การสร้างฐานข้อมูลสำเร็จ <br>";	
	}else
	{
		echo "ไม่สามารถสร้างฐานข้อมูลได้ <br>";
	}
	$sql = "Use testdb;";
	$result = mysqli_query($link,$sql);
	$sql = "Create Table test_table(
				id Varchar(3),
				name Varchar(25),
				age Int(2),
				Primary Key(id)
			);";

		/*
			หลังจากนั้นก็ทำการสร้าง ตาราง ชื่อว่า testdb ภายในฐานข้อมูลนี้
			โดบใช้คำสั่ง  Create Table ชื่อตารางข้อมูล (NameField DataType(Length))
			
			ลองทดสอบการสร้างฐานข้อมูล เเละ ตารางข้อมูล ได้จริงหรือไม่ 
			โดยการเปิดโปรเเรกม phpmyadmin ดู

		*/

	$result = mysqli_query($link,$sql);
	if ($result) {
		echo "สร้างตารางสำเร็จ";
	}
	else 
	{
		echo "ไม่สามาสร้างตารางได้";
	}
	mysqli_close($link);
 ?>

