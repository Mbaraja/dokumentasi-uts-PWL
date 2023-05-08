<?php
include "../koneksi.php";
include "uploadFoto.php";
$id     = $_POST['tid'];
$nama   = $_POST['tnama'];
$hrg    = $_POST['thrg'];
$ket    = $_POST['tket'];
$stok    = $_POST['tstok'];

if (upload_foto($_FILES["foto"])) {
    $foto = $_FILES["foto"]["name"];
    $sql  = "INSERT INTO barang (id,nama,hrg,stok,keterangan,foto) VALUES('$id', '$nama', '$hrg', '$stok', '$ket', '$foto')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:indexBrg.php");
    } else {
        $conn->close();
        echo "New Records Failed";
    }
} else {
    echo "Sorry, there was a problem uploading your files";
}
