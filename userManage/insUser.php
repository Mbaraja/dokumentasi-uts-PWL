<?php
include "../koneksi.php";
$user_id     = $_POST['tuserid'];
$nama   = $_POST['tnama'];
$email    = $_POST['temail'];
$telp    = $_POST['ttelp'];
$password    = $_POST['tpass'];
$user_role    = $_POST['trole'];

    $sql  = "insert into user (user_id,nama,email,telp,password,user_role) values('$user_id', '$nama', '$email', '$telp', '$password', '$user_role')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:indexUser.php");
    } else {
        $conn->close();
        echo "New Records Failed";
    }
?>