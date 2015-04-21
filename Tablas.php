<?php
class Tablas
{
	public function calcular()
	{
		$i;
		$j;
		$desde = $_GET['desde'];
		$hasta = $_GET['hasta'];
		$cuantas = $_GET['cuantas'];
		for($i=$desde; $i <= $hasta ; $i++)
		{
			for($j=1; $j<=$cuantas; $j++)
			{
				echo $i . " * " . $j . " = " . $i*$j;
				echo "<br>";
			}
			echo "<br>";
		}
	}
}
	$tabla = new Tablas();
	$tabla -> calcular();
?>