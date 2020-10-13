<?php 
	class Employee { // ชื่อ calss 
		var $name;  // ประกาศ attribute 3 ตัว
		var $salary;
		var $ot;
		var $position_salary;
	
		function Employee($name,$salary,$ot){ 
		// Method Employee เพื่อนำไปกำหนดค่าให้ object  
		//ถือว่าเป็น method นี้เป็น constructor  เป็น function ที่ถูกเรียกใช้โดย Auto เมื่อสร้าง object ใหม่ 
			$this->name = $name;
			$this->salary = $salary;
			$this->ot = $ot;  
			// $this-> กำหนดค่าให้ attribute เเต่ละตัว 
			// ตัวเเปร $this หมายถึง object ที่กำลังสร้างขึ้น 
			// เครื่องหมาย -> เเสดงความเป็นเจ้าของ 
			// เช่น $this->name หมายถึง ชื่อ-นามสกุล ของ object ที่กำลังสร้างขึ้น

		}
		function Print_EmployeeData(){
		// ไม่มีการผ่านค่า ทำหน้าที่พิมพ์ข้อมูลพนักงาน ทั้งหมด
			echo "ชื่อ-นามสกุล: $this->name <br>";
			echo "เงินเดือน : $this->salary <br>" ;
			echo "ค่าล่วงเวลา : $this->ot <br>";
			echo "เงินประจำตำเเหน่ง : $this->position_salary <br>";  
		}
	}
// มีการเรียกใช้ constructor Employee ค่าคงที่ 3 ตัว นำไปกำหนดค่าให้ ตามลำดับ
	$john = new Employee('john',15000,3000);
	$john->Print_EmployeeData();
	echo "<br>**********************<p>";
	$smith = new Employee('smith',25000,5000);
	$smith->Print_EmployeeData();

?>

