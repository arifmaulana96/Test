<html> 
<head><title>Contoh Penggunaan UDF</title></head> 
<body> 
<! Menentukan Form Input> 
<form method="post"> 
	Masukkan Bilangan Pertama : <br> 
	<input type="text" name="A" size=10><br> 
	Masukkan Bilangan Kedua : <br> 
	<input type="text" name="B" size=10><br> 
	<input type="submit" value="hitung"> 
</form> 
<!membandingkan 2 buah bilangan yang diinput> 
<?php

	 $A =$_POST['A']; 
	 $B =$_POST['B'];

	 Function jumlah($A,$B) 
	 { 
		 $jumlahbil=$A + $B; 
		 Return $jumlahbil; 
	  } 
	 Function kurang($A,$B) 
	 { 
		 $kurangbil=$A - $B; 
		 Return $kurangbil; 
	 } 
	 Function kali($A,$B) 
	 { 
		 $kalibil=$A * $B; 
		 Return $kalibil; 
	 } 
	 Function bagi($A,$B) 
	 { 
		 $bagibil=$A / $B; 
		 Return $bagibil; 
	 } 

	Echo "<br>"; 
	Echo ("Bilangan Pertama : "); 
	Echo $A; 
	Echo "<br>"; 
	Echo ("Bilangan Kedua : "); 
	Echo $B; 
	Echo "<br><br>"; 
	Echo "Hasil Penjumlahan 2 buah bilangan "; 
	Echo "<br>"; 
	$jumlahbil = jumlah($A,$B); 

	Printf( "Penjumlahan antara : %d + %d = %d ",$A,$B,$jumlahbil); 
	Echo "<br><br>"; 
	Echo "Hasil Pengurangan 2 buah bilangan "; 
	Echo "<br>"; 
	$kurangbil = kurang($A,$B); 

	Printf( "Pengurangan antara : %d - %d = %d ",$A,$B,$kurangbil); 
	Echo "<br><br>"; 
	Echo "Hasil Perkalian 2 buah bilangan "; 
	Echo "<br>"; 
	$kalibil = kali($A,$B); 

	Printf( "Perkalian antara : %d * %d = %d ", $A, $B, $kalibil); 
	Echo "<br><br>"; 
	Echo "Hasil Pembagian 2 buah bilangan "; 
	Echo "<br>"; 
	$bagibil = bagi($A,$B); 

	Printf( "Pembagian antara : %d / %d = %d ",$A,$B,$bagibil); 
	Echo "<br><br>"; 
?> 
</body> 
</html>