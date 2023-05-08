<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <meta name="description" content="Web Muhammad Naufal Abdulmajid">
    <meta name="keywords" content="HTML, Naufal, Tugas">
    <meta name="author" content="Muhammad Naufal Abdulmajid">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Login Page</title>
	<style>
        body {
            background-color: beige;
            box-sizing: border-box;
        }
        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border: 1px solid lightgrey;
            border-radius: 5px;
        }
        form a {
            align-self: flex-start;
        }

        .alert {
            color: black;
            background-color: red; 
            padding: 15px; 
            margin-bottom: 20px; 
        }
        form h2 {
            text-align: center;
            padding: 10px;
            background-color: white;
        }

        form input[type="email"],
        form input[type="password"] {
            display: block;
            width: 100%;
            height: 34px;
            font-size: 14px;
            line-height: 1.4;
            color: grey;
            background-color: white;
            border: 1px solid lightgrey;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px black;
        }

        form button {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.4;
            color: white;
            background-color: darkblue;
            border-color: white;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <article>
        <form class="login-form" method="post" action="auth.php">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="alert"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input type="email" name="email" placeholder="Email">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button type="submit">Login</button> 
        </form>
    </article>
</body>
