<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nama'])) {

?>
<?php
include "../koneksi.php";
$user_id=$_GET['user_id'];
$sql="select * from user where user_id = '$user_id'";
$hasil=$conn->query($sql);
while ($row=$hasil->fetch_assoc()){
    $nama      = $row['nama'];
    $email     = $row['email'];
    $telp      = $row['telp'];
    $password  = $row['password'];
    $user_role = $row['user_role'];
}
?>
<html>
    <head>
    <meta charset="UTF-8"> 
    <meta name="description" content="Web Muhammad Naufal Abdulmajid">
    <meta name="keywords" content="HTML, Naufal, Tugas">
    <meta name="author" content="Muhammad Naufal Abdulmajid">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit User</title>
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
        
        form{
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        form input[type="text"],
        form input[type="file"],
        form input[type="submit"]{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: none;
            background-color: #f5f5f5;
            box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
        }
        form input[type="submit"]{
            background-color: darkblue;
            color: white;
            cursor: pointer;
        }

        form label{
            display: block;
        }
            img {
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 100px;
            height: 100px;
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
        <h1>Edit Data User</h1>
        <article>
            <form action='updUser.php' method='post' enctype="multipart/form-data">
                <label for="<?=$user_id?>">User ID</label> <br/>
                <input type='text' name='tuserid' value="<?=$user_id?>" readonly>
                <label for="<?=$nama?>">Nama</label> <br/>
                <input type='text' name='tnama' value="<?=$nama?>">
                <label for="<?=$email?>">Email</label> <br/>
                <input type='text' name='temail' value="<?=$email?>">
                <label for="<?=$telp?>">Nomor Telepon</label> <br/>
                <input type='text' name='ttelp' value="<?=$telp?>">
                <label for="<?=$password?>">Password</label> <br/>
                <input type='text' name='tpass' value="<?=$password?>">
                <label for="<?=$user_role?>">Role User</label> <br/>
                <input type='text' name='trole' value="<?=$user_role?>">
                <input type='submit' value='Update'>
            </form>
        </article>
    </body>
</html>
<?php
} else {
  header("Location: ../login/login.php");
  exit();
}
?>