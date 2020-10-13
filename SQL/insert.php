<!-- 
    การเพิ่ม record เรคอร์ดใหม่ลงในตาราง

    ในหน้า Mainfunction.html ถ้าเราคลิกที่ link "เพิ่มข้อมูล"
    จะทำการเรียกโปรเเกรม insert.php เป็นเเบบฟอร์มสำหรับให้กรอกข้อมูลลงไป 
    Code โปรเเกรมดังนี้
 -->

<?php 
	if (!isset($_POST['send'])) {
?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 		<p>เเบบฟอร์มการเพิ่มข้อมูล</p>
		<p>รหัสพนักงาน <input type="text" name="id"></p>
		<p>ชื่อพนักงาน <input type="text" name="name"></p>
		<p>อายุ <input type="text" name="age"></p>
    <!-- เมื่อกด Submit โปรเเกรมจะเพิ่มข้อมูลในตารางข้อมูลให้  โดยใช้คำสั่ง SQL Insert into -->
		<input type="submit" name="send" value="Submit">  
		<input type="reset" name="cancel" value="Reset">
 </form>
 <?php }
  	else {
  		$id = $_POST['id'];
  		$name = $_POST['name'];
  		$age = $_POST['age'];


  		$link = mysqli_connect("localhost","root","123456");
  		mysqli_set_charset($link,'utf8');
  		$sql = "use testdb";
  		$result = mysqli_query($link,$sql);
  		$sql = "Insert into test_table values('$id','$name',$age);";
      /*
        ใช้คำสั่ง SQL Insert into ชื่อตารางข้อมูล 
        โดยเพิ่ม เรคอร์ ลงในตาราง  test_table โดยนำข้อมูลที่เก็บไว้ในตัวเเปร 
        $id $name  $age  เพิ่มลงไปในฟิลด์ id,name,age ตามลำดับ

        ลองทดสอบการสร้างฐานข้อมูล เเละ ตารางข้อมูล ได้จริงหรือไม่ 
      โดยการเปิดโปรเเกรม phpmyadmin ดู
      */
  		$result = mysqli_query($link,$sql);
  		if ($result) {
  			echo "การเพิ่มข้อมูลลงในฐานข้อมูลสำเร็จ <br>";
  			mysqli_close($link);
  		}
  		else
  		{
  			echo "ไม่สามารถเพิ่มข้อมูลในฐานข้อมูลใหม่ได้ <br>";
  		}
  		echo '<a href="insert.php">กลับหน้าเว็บเพิ่มข้อมูล</a><br>';
  		echo '<a href="Mainfunction.html">กลับหน้าเว็บหลัก</a><br>';
  	}
  ?>

