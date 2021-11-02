<?php
session_start();
include "config.php";
   

    $con = mysqli_connect("localhost", "root", "", "simeru");


    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $ruangan = $_POST['ruangan'];
    $tanggal = $_POST['tanggal'];
    $lampiran = $_POST['lampiran'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO peminjaman (no, nama, status, ruangan, tanggal, lampiran, deskripsi) VALUES ('$no', '$nama', '$status', '$ruangan', '$tanggal', '$lampiran', '$deskripsi')";

    if ($con->query($sql) === TRUE) {
        header("Location: home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>