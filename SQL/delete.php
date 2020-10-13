<!-- 
    การลบ เรคอร์ด ในตาราง 

  สร้างเเบบฟอร์ม ให้ผู้ใช้งาน กรอกรหัสพนักงาน ที่ต้องการลบออกไป จากตาราง เเละทำการคลิกที่ปุ่ม "Submit"
  โปรเเกรมก็จะทำการ ลบเรคอร์ด ที่ตรงกับรหัสที่กรอกลงไป ที่ต้องการให้ 
  ถ้าคลิกที่ link "ลบข้อมูล" จะทำการเรียกโปรเเกรมต่อไปนี้

  ใช้คำสั่ง SQL คือ Delete From test_table where id = '$id_val'

  ลบเรคอร์ดที่อยู่ในตาราง test_table โดยมีเงื่อนไขว่า ลบเฉพาะ เรคอร์ด ที่มีค่าของฟิลด์ id เท่ากับ ค่าตัวเเปร $id_val
  อาทิ   ตัวเเปร $id_val มีค่าเท่ากับ 001 


-->


<?php 
	if (!isset($_POST['send'])) {
?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 		<h1>ลบข้อมูล</h1>
    <p>กรุณากรอกรหัสพนักงานที่ต้องการลบ</p>
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
  		$sql = "Delete From test_table where id = '$id_val'";
  		$result = mysqli_query($link,$sql);
      if ($result) {
        echo "ลบข้อมูลในฐานข้อมูลสำเร็จ <br>";
        mysqli_close($link);
      }
      else
      {
        echo "ไม่สามารถลบข้อมูลในฐานข้อมูลได้ <br>";
      }
      echo '<a href="delete.php">กลับหน้าเว็บลบข้อมูล</a><br>';
      echo '<a href="Mainfunction.html">กลับหน้าเว็บหลัก</a><br>';
    }
?>


