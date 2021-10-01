<h1>Треугольник</h1>
<p>Введите координаты вершин треугольника</p>
<form method="post" action="">
	<input name="a_1" type="number" placeholder="A 1">:<input name="a_2" type="number" placeholder="A 2"><br>
	<input name="b_1" type="number" placeholder="B 1">:<input name="b_2" type="number" placeholder="B 2"><br>
	<input name="c_1" type="number" placeholder="C 1">:<input name="c_2" type="number" placeholder="C 2"><br>
	<button name="done" type="submit">Рассчитать</button>
</form>
<?php
if ( isset( $_POST['done'] ) ) {
	$points = array (
		'a_1'=>$_POST["a_1"], 'a_2'=>$_POST["a_2"],
		'b_1'=>$_POST["b_1"], 'b_2'=>$_POST["b_2"],
		'c_1'=>$_POST["c_1"], 'c_2'=>$_POST["c_2"]
	);
	include('class.php');
	$poly = new polygon();
	//$triangle = new triangle();
	$poly->mathPoly($points);
	//$triangle->mathTri();
}
?>
