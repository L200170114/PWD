<?php
session_start();
error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
mysql_connect('localhost','root','');
mysql_select_db('informatika');
$username=$_POST['Username'];
$password=$_POST['Password'];
$submit=$_POST['submit'];
if($submit){
    $sql = "select * from user where Username='$username' and Password='$password' ";
    $query = mysql_query($sql);
    $row = mysql_fetch_array($query);
    if($row['Username']!=""){
    //berhasil login
    $_SESSION['Username']=$row['Username'];
    $_SESSION['Status']=$row['Status'];
    ?>
    <script language script="JavaScript">
    alert('Anda Login Sebagai <?php echo $row['Username']; ?>');
    document.location='hasillogin.php';
    </script>
    <?php
}else {
    //gagal login
    ?>
    <script language script="JavaScript">
    alert('Gagal Login');
    document.location='login.php';  
    </script>
    <?php
}
}
?>
<form method='post' action='login.php'>
<p align='center'>
Username : <input type='text' name='Username'><br>
Password : <input type='password' name='Password'><br>
<input type='submit' name='submit'>
</p>
</form>