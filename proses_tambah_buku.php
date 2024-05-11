<?php

require 'function.php';
if($_POST){
    $foto=upload();
    $nama_buku=$_POST['nama_buku'];
    $deskripsi=$_POST['deskripsi'];
    
    include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (foto, nama_buku, deskripsi) value ('".$foto."','".$nama_buku."','".$deskripsi."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
}
?>
