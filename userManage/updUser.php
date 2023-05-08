<?php
include "../koneksi.php";
$user_id    = $_POST['tuserid'];
$nama       = $_POST['tnama'];
$email      = $_POST['temail'];
$telp       = $_POST['ttelp'];
$password   = $_POST['tpass'];
$user_role  = $_POST['trole'];

    $sql="update user set nama='$nama',email='$email',telp='$telp',password='$password',user_role='$user_role' where user_id='$user_id'";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:indexUser.php");
    } else {
        $conn->close();
        echo "New Records Failed";
    }
?>