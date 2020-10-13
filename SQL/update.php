<!-- 
โปรเเกรม จะมีการเรียกใช้ คำสั่ง SQL คือ 

update test_table set name='$Ename' , age='$EAge' where id='$Empno'
จะเเก้ไขค่าของ ฟิลด์ name ให้มีค่าเท่ากับค่าในตัวเเปร $Ename เเละ age เท่ากับ $EAge


โดยกำหนด เงื่อนไขการเเก้ไข ว่าจะเเก้ไขเฉาพะ เรคอร์เที่มีค่าของ ฟิลด์ id เท่ากับค่า $Empno เท่านั้น
หลังจากได้ Empno มาจาก การกดปุ่ม submit ให้นำค่า $id_val ทำงานหน้านี้ต่อ 

เเก้ไข ค่า field name ให้มีค่าเท่ากับ ตัวเเปร $Ename
field age  ตัวเเปร $Eage

กำหนดคำสั่ง SQL เงื่อนไข เเก้ไขเฉพาะ record ที่มีค่า field id =  $Empno เท่านั้น 
อาทิตัวเเปร $Empno มีค่า คือ 001 

ข้อสังเกตโปรเเกรม update.php คือ โปรเเกรมจะมีการส่งผ่านค่ารหัส พนักงานที่ต้องการเเก้ไขผ่านทาง URL
*เนื่องจากการเเก้ไขต้องมีการระบุ เงื่อยไขว่าต้องการ เเก้ไขเรคอร์ดใดด้วย

 การส่งค่ารหัสพนักงาน ผ่าน URL ด้วยเครื่องหมาย ? (Query Sring)
 เพราะการเเก้ไข ต้องมีการระบุ เงื่อนไขว่าต้องการเเก้ record ใด

 เสร็จเเล้วลองทดลองโปรเเกรม ดูใน คลิกที่ link "จัดทำรายงาน" ดูว่า เเก้ไขสำเร็จไหม

-->
<?php 
	$Ename = $_POST['Ename'];
	$EAge = $_POST['EAge'];
	$Empno = $_GET['Empno'];

	$link = mysqli_connect("localhost","root","123456");
  	mysqli_set_charset($link,'utf8');
  	$sql = "use testdb";
  	$result = mysqli_query($link,$sql);
  	$sql = "update test_table set name='$Ename' , age='$EAge' where id='$Empno' ";

  	$result = mysqli_query($link,$sql);
  	if ($result) {
  		echo "เเก้ไขข้อมูลลงในฐานข้อมูลสำเร็จ <br>";
  		mysqli_close($link);
  		}
  		else
  		{
  			echo "ไม่สามารถเเก้ไขข้อมูลในฐานข้อมูลใหม่ได้ <br>";
  		}
  	echo "<a href=updateload.php>กลับหน้าเเก้ไขข้อมูล</a><br>";
  	echo "<a href=Mainfunction.html>กลับหน้าเว็บหลัก</a><br>";
 ?>