<!-- 
	การคืนค่ากลับ ของ ฟังก์ชั่น

	คำสัง return ส่งค่าที่ต้องการคืนกลับไป 
	จะถูกเเทนในตำเเหน่่งที่เรียกใช้ ฟังก์ชั่น
-->

<?php 
	function cal_triangle($base,$height)
	{
		$area = 0.5*$height;
		return $area;
	}
	echo "สามเหลี่ยม มึความยาวเท่ากับ 5 หน่วย ความสูงเท่ากับ 10 หน่วย <br>";
	echo "มีค่าพื้นที่เท่ากับ ".cal_triangle(5,10)." หน่วย";

 ?>