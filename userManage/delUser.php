<?php
include "../koneksi.php";
$user_id=$_GET['user_id'];

$sql = "delete from user where user_id='$user_id'";
if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("location:indexUser.php");
}else{
    echo "New records failed";
    $conn->close();
}

?>