<?php
echo "Tabel Perkalian <br>";
echo "===========";

$arr=array(15,17,19,21,23,25,27,29,31,33,35,37,39,41,43,45); 

for($a=12;$a<=12;$a++)

{
	foreach ($arr as $b) {
		$jum=$a*$b;
		echo"<table>";

		echo"<tr><td>$a x $b</td><td>= $jum<br></td></tr>";
	}
}

echo"</table>";

?>
