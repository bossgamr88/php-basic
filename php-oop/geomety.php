<?php 
	class Geometry_Rectangle {
		var $width;
		var $length;
		var $area;

		function Geometry_Rectangle($width,$length){
			$this->width = $width;
			$this->length = $length;
		}
		function Calculate_Area(){
			$this->area = $this->width * $this->length;
		}
		function Print_Area(){
			echo "รูปทรงเรขาคณิตนี้มีพื้นที่ = $this->area <p>";
		}
	}
	class Geometry_Circle extends Geometry_Rectangle{
		var $redius;
		function Geometry_Circle($redius){
			$this->redius = $redius;
		}
		function Calculate_Area(){
			$this->area = 3.14 * $this->redius * $this->redius;
			// p = 3.14
		}
	}

	$rectangle = new Geometry_Rectangle(5,3);
	echo "รูปสี่เหลี่ยมผืนผ้า กว้าง 5 ยาย 3 <br>";
	$rectangle->Calculate_Area();
	$rectangle->Print_Area();
	echo "*******************************<p>";
	$circle = new Geometry_Circle(10);
	echo "รูปทรงกลมมีรัศมี 10 <br>";
	$circle->Calculate_Area();
	$circle->Print_Area();
 ?>

 