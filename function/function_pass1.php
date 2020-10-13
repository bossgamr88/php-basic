<!--
	การใช้งาน function โดยมีการส่งผ่านค่า

 	argument $no รับค่าจำนวน * ภายใน function เอาไปทำ เงือนไข For 
 	กำหนดตัวเเปร $sign ต่อ string เท่ากับ จำนวนค่า argument
 -->

 <?php 
 	function asterisk($no)
 	{
 		$sign = "";
 		for ($i=1; $count<=$no ; $count++) { 
 				$sign = $sign."*";

 			}
 		echo "$sign <br>";	
 	}
 	asterisk(20);
 	echo "My name is John <br>";
	echo "My surname is Dev <br>";
	echo "Hello everybody <br>";
	asterisk(30);
  ?>