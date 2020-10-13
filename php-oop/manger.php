<?php 
	require('employee.php');
	class Manager extends Employee { // คำสั่ง extends บอกว่า Class Manger สืบทอด Attribute มาจาก Class Employee
		var $position_salary;  // เพื่ม attribute 1 ตัว 

		function Manager($position_salary){ 
	// ถือว่า method นี้เป็น constructor 
	// มีการผ่านค่า เงินประจำ ตำเเเหน่งของผู้จัดการ เพื่อนำไปกำหนดค่าให้ object	
			$this->position_salary = $position_salary;
			// $this->position_salary กำหนดค่าให้กับ attribute $position_salary หมายถึง เงิน... ของ object ที่กำลังสร้างขึ้น 
		}
	}
	echo "****************************<p>";
	$dev = new Manager(15000); // ใช้ constructor Manager ส่งผ่านค่า
	$dev->Employee('dev',35000,5000); //  object นี้สามารถเรียก constructor จาก Class Employee  เพราะสิบทอด attribute มาเเล้ว
	$dev->Print_EmployeeData(); 
 ?>


 