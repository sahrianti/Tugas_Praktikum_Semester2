<?php 
// jika belum mengisi form, maka tidak dapat pergi kehalaman hasil
if (!isset($_POST['submit'])){
    header("Location: index.php");
    exit;
}



// menyimpan inputan user kedalam variabel
$_nama = $_POST['nama lengkap'];




?>