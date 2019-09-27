<html>
    <head>
        <title>TUGAS 1</title>
</head>
<body>
    <h1>Program Penjumlahan</h1>
    <form method = 'post' action = 'tugas1.php'>
        <p>Nilai A adalah : <input type ='text' name = 'nilaiA' size='3'></p>
        <p>Nilai B adalah : <input type ='text' name = 'nilaiB' size='3'></p>      
        <p><input type = 'submit' value = 'Jumlahkan' name='submit'></p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilaiA = $_POST['nilaiA'];
$nilaiB = $_POST['nilaiB'];
$submit = $_POST['submit'];
$jumlah = $nilaiA + $nilaiB;
    echo"Nilai A adalah $nilaiA </br>";
    echo"Nilai B adalah $nilaiB </br>";
    echo"Jadi Nilai A ditambah Nilai B adalah $jumlah";
?>
</body>
</html>