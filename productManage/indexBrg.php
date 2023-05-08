<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nama'])) {

?>
<?php
include "../koneksi.php";
$sql = "SELECT * from barang ORDER by id";
$hasil = $conn->query($sql);
?>

<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="description" content="Web Muhammad Naufal Abdulmajid">
    <meta name="keywords" content="HTML,CSS, PHP, Naufal, Tugas">
    <meta name="author" content="Muhammad Naufal Abdulmajid">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Manajemen Barang</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined{
            scale: 1.5;
        }
        body{
            margin: 0;
            background-color: beige;
        }
        nav {
            width: 100vw;
            display: flex;
            justify-content: space-between;
            background-color: darkblue ;
            padding: 10px;
            border-bottom: 5px rgb(127, 217, 255) solid;
            color: white;
        }
        nav > div{
            display: flex;
        }
        #nav1{
            flex-direction: column;
            align-items: center;
        }
        #nav1 > * {padding: 10px;}
        #nav2{
            align-items: center;
            padding-right: 10px;
        }
        #nav2 > * {
            align-items: center;
            padding-right: 20px;
        }
        #btnNav{
            display: flex;
            align-items: center;
            text-decoration:none;
            color: white;
        }
        

        h1 {text-align: center;}
        
        table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        }

        td, th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        tr {background-color: #f2f2f2;}


        th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: darkblue;
        color: white;
        }

        #tambahBrg{
            display: block;
            align-items: center;
            text-align: center;
            text-decoration:none;
            margin-top: 20px;
        }
        </style>
    </head> 
    <body>
        <nav>
            <div id="nav1">
                <a href="../index.php" id="btnNav">
                    <span class="material-symbols-outlined">
                            home
                    </span>
                </a>
            </div>        
            <div id="nav2">
                <a href="../login/logout.php" id="btnNav">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                </a>
            </div>
        </nav>
    
        <h1>Manajemen Barang</h1>
        <article>
            
            <?php
                if ($hasil->num_rows>0) {
                    echo "<table>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Foto</th>
                                <th>Stok</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>";
                    while ($row=$hasil->fetch_assoc()) {
                        $teks="<tr>";
                        $teks.="<td>" . $row["id"] . "</td>";
                        $teks.="<td>" . $row["nama"] . "</td>";
                        $teks.="<td>" . $row["hrg"] . "</td>";
                        $teks.="<td>" . $row["keterangan"] . "</td>";
                        $teks.="<td><img src='img/" . $row["foto"] . "'style='width:100px;height:100px;></img>'</td>";
                        $teks.="<td>" . $row["stok"] . "</td>";
                        $teks.="<td><a href='editBrg.php?id=" . $row["id"] . "'><span class='material-symbols-outlined'>edit_square</span></a></td>";
                        $teks.="<td><a href='delBrg.php?id=" . $row["id"] . "'><span class='material-symbols-outlined'>delete</span></a></td>";
                        $teks.="</tr>";
                        echo $teks;
                    }
                    echo "</table>";
                }
            ?>
            <a href="addBrg.php" id="tambahBrg">
                <span class="material-symbols-outlined">
                     add
                </span>
            </a>
        </article>
    </body> 
</html>
<?php
} else {
  header("Location: ../login/login.php");
  exit();
}
?>