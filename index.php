<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'movie_web') or die ('Unable to connect');
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0"> 
    </head>
    <style>
        h2{
            margin-top: 450px;
            padding-top: 50px;
        }
        .login{
            margin-top: 350px;
            width: 40%;
            height: 35vh;
            text-align: center;
            margin: 0 auto;
            /*background-color: rgb(132, 130, 146);*/
            box-shadow: 5px 10px 18px rgb(167, 155, 155);
            color: #000;
            box-shadow: #d8d1cc;
        }
       .password{
            margin-bottom: 20px;
            display: inline-block;
            margin-top: 50px;
        }
        input{
            font-size: 28px;
        }
        a{
            text-decoration: none;
            margin-left: 100px;
            font-size: 30px;
            border: px solid black;
            background-color: green;
            color: #fff;
            padding: 20px;
        }

        .button{
           cursor: pointer;
           padding: 20px;
        }
       .usericon{
        border: px solid black;
        margin: 10px;
        padding: 20px;
        cursor: pointer;
       }

    </style>
    <body>
       
        <div class="login">
        <h2>Please Login</h2>
        <img class="usericon" src="u.png" alt="">
            <form action="index.php" method = "post">
            <img src="user.png" alt="">
                <input type="text" class="field" name="Username" placeholder="Username" required = ""><br>
                <img src="pass.png" alt="">
                <input type="password" class="password" name="Pass" placeholder="Password" required = ""><br>
                <input type="submit" class="button" name="login" value="Login">
                <a class="register" href="http://localhost/phpmyadmin/index.php?route=/table/change&db=movie_web&table=tb_user">Signup</a>
            </form>
        </div>

        <?php
            if(isset($_POST['login'])){
                $Username = $_POST['Username'];
                $Pass = $_POST['Pass'];

                $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE Username = '$Username' AND Pass='$Pass' ");
                $row = mysqli_fetch_array($select);

                 if(is_array($row)){
                    $_SESSION["Username"] = $row ['Username'];
                    $_SESSION["Pass"] = $row ['Pass'];
                 }else{
                     echo '<script type = "text/javascript">';
                     echo 'alert("Incorrect username or password!");';
                    echo 'window.location.href = "index.php"';
                    echo '</script>';
                 }
            }
            if(isset($_SESSION["Username"])){
                header("location:login.php");
            }
           
        ?> 
    </body>

</html>