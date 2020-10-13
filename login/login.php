<?php 
	if ($_POST['username'] == 'root' && $_POST['password'] == "123") 
	{
		include("adminform.html");	
	}
	else
	{
		echo "Error Login";
	}
 ?>

 <!-- 
	อธิบายการทำงานโปรเเกรม
	ถ้าพิมพ์ URL ช่อง address เป็น localhost/adminform.html
	สามารถเข้าได้โดยไม่ต้องผ่านระบบ Login เป็นช่องโหว่ 
	เเก้ไขปัญหาด้วย Session / Cookie
-->