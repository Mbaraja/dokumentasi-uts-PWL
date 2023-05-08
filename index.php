<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nama'])) {

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="description" content="Web Muhammad Naufal Abdulmajid">
    <meta name="keywords" content="HTML, CSS, PHP,  Naufal, Tugas">
    <meta name="author" content="Muhammad Naufal Abdulmajid">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Index</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined{
            scale: 1.5;
            color: white;
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
        #menuOption{
            display: flex;
            justify-content: space-around;
            margin: 30px;
            background-color: rgb(255, 255, 237);
            padding: 20px;
            flex-direction: column;

        }
        .option{

            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 70px;
            border: 2px lightgray solid;
            color: black;
        }
        .option > .material-symbols-outlined{
            color: black;
        }
        .link{
            text-decoration: none;
            color: black;
        }
    </style>
    </head> 
    <body>
        <nav>
            <div id="nav1">
                <a href="" id="btnNav">
                    <span class="material-symbols-outlined">
                            home
                        </span>
                </a>
            </div>        
            <div id="nav2">
                <a href="login/logout.php" id="btnNav">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                </a>
            </div>
        </nav>
        <h1>Hello, <?php echo $_SESSION['nama']; ?></h1>
        <article>
            <div id="menuOption">
                <a href="productManage/indexBrg.php" class="link">
                    <div class="option">
                        <span class="material-symbols-outlined">
                            shopping_bag
                        </span>
                        <b>Manajemen Barang</b>
                    </div>
                </a>
                <hr>
                <a href="userManage/indexUser.php" class="link">
                    <div class="option">
                        <span class="material-symbols-outlined">
                            person
                            </span>                    
                        <b>Manajemen User</b>
                    </div>
                </a>
            </div>
        </article>
    </body> 
    </html>
<?php
} else {
  header("Location: login/login.php");
  exit();
}
?>