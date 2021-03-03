<!DOCTYPE HTML>
<head>
<title>Belajar</title>
 <script LANGUAGE="JavaScript">
 function cek(){
 if(form.nilai1.value == "" || form.nilai2.value == ""){
 alert("data kosong"); //jika angka kosong maka pesan akan tampil
 exit;
 }
 }
 function tambah() {
 cek(); //panggil function cek
 a=eval(form.nilai1.value); //mengisi variabel a dengan isi dari input name nilai1
 b=eval(form.nilai2.value); //mengisi variabel b dengan isi dari input name nilai2
 c=a+b //menjumlahkan kedua variabel
 form.total.value = c; //memberikan hasil penjumlahan ke input name total
 }
 function kali() {
 cek();
 a=eval(form.nilai1.value);
 b=eval(form.nilai2.value);
 c=a*b
 form.total.value = c;
 }
 function kurang() {
 cek();
 a=eval(form.nilai1.value);
 b=eval(form.nilai2.value);
 c=a-b
 form.total.value = c;
 }
 function bagi() {
 cek();
 a=eval(form.nilai1.value);
 b=eval(form.nilai2.value);
 c=a/b
 form.total.value = c;
 }
 function reset() {
 form.nilai1.value="";
 form.nilai2.value="";
 form.total.value = "";
 }
 </script>
</head>
<body>
 <form name="form">
 Nilai1
 <input type=text name="nilai1" size=3><br><br>
 Nilai2
 <input name="nilai2" type="text" size="3" /><br>
 <br>
 Hasil <input type="text" value="" name="total" size="9">
 <br><br>
 <!-- membuat event ketika tombol di klik maka memanggil function javascript -->
 <input type=button name=submit onclick="tambah()" value="+">
 <input type=button name=submit onclick="kali()" value="X">
 <input type=button name=submit onclick="bagi()" value="/">
 <input type=button name=submit onclick="kurang()" value="-">
 <input type=button name=submit onclick="reset()" value="Reset">
 </form>
</body>
</html>
