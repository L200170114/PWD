<?php
    session_start();
    echo "Anda berhasil login sebagai ".$_SESSION['Username']." dan anda terdaftar sebagai ".$_SESSION['Status'];
?>
<br>
Silahkan logout dengan menekan link <a href="logout.php"> logout </a>