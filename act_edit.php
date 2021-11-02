<?php
session_start();
include "config.php";
   

    $con = mysqli_connect("localhost", "root", "", "simeru");


    $no = $_POST['no'];
    $ket = $_POST['ket'];

    $sql = "UPDATE peminjaman set ket = '$ket' where no = '$no'";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";

        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>