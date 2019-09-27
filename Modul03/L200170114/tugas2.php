<html>
    <head>
        <title>TUGAS 2</title>
</head>
<body>
    <h1>Ganjil/Genap</h1>
    <form method = 'post' action = 'tugas2.php'>
        <p>Masukkan angka : <input type ='text' name = 'nilai' size='3'></p>
        <p><input type = 'submit' value = 'Proses' name='submit'></p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilai = $_POST['nilai'];
$submit = $_POST['submit'];
if($submit){
    if($nilai==''){
        echo"Nilai kosong/belum diisi";
    }elseif($nilai%2==0){
        echo"Angka $nilai adalah Genap";
    }else{
        echo"Angka $nilai adalah Ganjil";
    }
}
?>
</body>
</html>