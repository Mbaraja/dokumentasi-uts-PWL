<!DOCTYPE html>
<html>
<head>
    <title>Input Data Barang</title>
    <link rel="stylesheet" type="text/css" href="css/addbrgmodel.css">
</head>

<body>
    <h1>Input Data Barang</h1>

    <form action="insBrg.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="tid">ID:</label>
            <input type="text" name="tid" id="tid">
        </div>
        <div>
            <label for="tnama">Nama Barang:</label>
            <input type="text" name="tnama" id="tnama">
        </div>
        <div>
            <label for="thrg">Harga:</label>
            <input type="text" name="thrg" id="thrg">
        </div>
        <div>
            <label for="tjml">Jumlah Stok:</label>
            <input type="text" name="tjml" id="tjml">
        </div>
        <div>
            <label for="tket">Keterangan:</label>
            <input type="text" name="tket" id="tket">
        </div>
        <div>
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto">
        </div>
        <div>
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>
</html>
