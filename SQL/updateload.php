<!--
  เเก้ไข เรคอร์ด ในตาราง

  ขั้นตอนเเรกจะต้อง เลิอก เรคอร์ด ที่ต้องการเเก้ไขก่อน โดยเเสดงรายละเอียดในเ
  เเต่ล่ะ ฟิลด์ ในช่อง Text box เพื่อให้สามารถ เเก้ไข ได้ หลังจากเเก้ไข เเล้ว 
  ต้องทำการคลิกที่ปุ่ม "Submit" เพื่อส่งข้อมูลไปเเก้ไขภายใน ตารางข้อมูล จากหน้า Mainfunction.html
  ถ้าทำการคลิกที่ link "เเก้ไขข้อมูล" จะทำการเรียกโปรเเกรมต่อไปนี้

  เมื่อเรียกโปรเเกรมนี้ทำงานจะเริ่มจากการให้ผู้ใช้งาน
  กรอกรหัสพนักงาน ที่ต้องการเเก้ไข

    
    หลังจากกรอกรหัสพนักงาน เเละ คลิกปุ่ม "Submit" เเล้วจะเเสดงรายละเอียดของพนักงาน

    ที่ต้องการเเก้ไข ขึ้นมาทุกฟิลด์บนช่อง Text box ยกเว้น ฟิลด์ รหัสพนักงาน ซึ่งไม่อนุญาติ ให้เเก้ไข
    
    โดยทำงานในส่วนที่ดึง ข้อมูล ของ พนักงาน ใช้คำสั่ง 
    select * from test_table where id = '$id_val'
    เป็นการดึง ทุก เรคอร์ด จากตาราง test_table 

    โดยมี เงื่อนไขว่า ดึงเฉพาะ เรคอร์ด ที่มีค่าของฟิลด์ id เท่ากับ ค่าที่เก็บไว้ในตัวเเปร $id_val เท่านั้น 

    เมื่อเเก้ไขเสร็จ เเละ คลิกปุ่ม "Submit" โปรเเกรมจะทำการเรียกไฟล์ update.php

-->

<?php 
	if (!isset($_POST['send'])) {
?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 		<h1>เเก้ไขข้อมูล</h1>
    <p>กรุณากรอกรหัสพนักงานที่ต้องการเเก้ไข</p>
		<p>รหัสพนักงาน <input type="text" name="id_val"></p>
		<input type="submit" name="send" value="Submit">
		<input type="reset" name="cancel" value="Reset">
 </form>
 <?php }
  	else {
  		$id_val = $_POST['id_val'];

  		$link = mysqli_connect("localhost","root","123456");
  		mysqli_set_charset($link,'utf8');
  		$sql = "use testdb";
  		$result = mysqli_query($link,$sql);
  		$sql = "select * from test_table where id = '$id_val';";
  		$result = mysqli_query($link,$sql);
      echo "<form action=update.php?Empno=$id_val method=post>";
      $dbarr = mysqli_fetch_array($result);
      echo "รหัสพนักงาน".$id_val."<br>";
      echo "ชื่อพนักงาน :" ; 
      echo "<input type=text name=Ename value=$dbarr[name]> <br>";
      echo 'อายุ : ' ;
      echo "<input type=text name=EAge value=$dbarr[age]> <p>";
      echo '<input type="submit" name="send" value="Submit">';
      echo '<input type="reset" name="cancel" value="Reset">';
      echo '</form>';
      mysqli_close($link);
  	}
  ?>

  <!--

      field รหัสพนักงานจะ ไม่อนุญาติให้เเก้ไข 
      
      โดยมีเงือนไข ดึงเฉาพะ record ที่มีค่า field id เท่ากับ ตัวเเปร $id_val เท่านั้น ด้วยคำสั่ง SQL

      อาทิ  $id_val ให้เก็บค่า id ในตาราง field id มีค่า 001,002,003 ... ตามขนาดข้อมูล field id ใน ฐานข้อมูล

  -->

