<?php
// Apakah tombol cek sudah ditekan
if(isset($_POST["cek"])){
$nilai=$_POST["nilai"];
if($nilai==""){
echo"<b><h1> Anda belum memasukan nilai</h1></b>";
}elseif (!is_numeric($nilai)){
echo"<b><h1> Ini bukan nilai angka </h1></b>";
}else{
if($nilai<=30){
echo"<b><h1> Sayang Sekali, Kenapa Mendapat E </h1></b>";
}elseif($nilai<=50){
echo"<b><h1> Ayo Belajar, JAngan TikTok terus D </h1></b>";
}elseif($nilai<=70){
echo"<b><h1> Ayo Belajar Lagi C </h1></b>";
}elseif($nilai<=85){
echo"<b><h1> Ayo sedikit lagi, mari Belajar B </h1></b>";
}else{
echo"<b><h1> Congratulations A </h1></b>";
}
}
}
?>
<html><head><title>Statement IF</title>
</head>
<body>
<form action="" method="post">
<label for="nilai"> Nilai</label>
<input type="text" name="nilai" id="nilai">
<button type="submit" name="cek"> Cek</button>
</form>
</body>
</html>