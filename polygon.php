<?
class polygon {
	//вход - массив с координатами вершин
	public function GetPolygon( $points ) {
		$a_1 = $points['a_1'];
		$a_2 = $points['a_2'];
		$b_1 = $points['b_1'];
		$b_2 = $points['b_2'];
		$c_1 = $points['c_1'];
		$c_2 = $points['c_2'];
		//площадь
		$S =  ( 1 / 2 ) * ( ( $a_1 - $c_1 ) * ( $b_2 - $c_2 )  -  ( $b_1 - $c_1 ) * ( $a_2 -  $c_2 ) );
		//периметр
		$P = ( sqrt ( ( $b_1 - $a_1 ) ** 2 + ( $b_2 - $a_2 ) ** 2 ) ) + ( sqrt ( ( $c_1 - $a_1 ) ** 2 + ( $c_2 - $a_2 ) ** 2 ) ) + ( sqrt ( ( $c_1 - $b_1 ) ** 2 + ( $c_2 - $b_2 ) ** 2 ) );
		return [$S,$P];
	}
}
?>
