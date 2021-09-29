<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <?php  
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $name = $_POST["name"];
        $email = $_POST ["email"];
        $about_me = $_POST["about"];
        $gender = $_POST["gender"];
        setcookie('name',$name);
        setcookie('email',$email);
        setcookie('about',$about_me);
        setcookie('gender',$gender);
            echo " {$name} <br>"; 
            echo "{$email} <br>";
            echo "{$about_me} <br>";
            echo "{$gender} <br>" ;
        }
    ?>
    <?php  
    if ($_SERVER["REQUEST_METHOD"] == "GET" and !isset($_COOKIE['email'])){
    //?>
    
    <form action = "<?php $_SERVER['PHP_SELF']; ?>"  method = "post" >
        Name<input type = "text"  name = "name" ><br>  
        Email<input type = "email" name = "email"><br>
        Aboutme<textarea name="about" rows="4" cols="4">
        </textarea> <br> 
        Male<input type="radio"  name="gender" value="male">    
        Female<input type="radio"  name="gender" value="female"><br>
        <input type="submit" value="Submit" name="submit">
    </form> 
    <?php }
    ?>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "GET" and isset($_COOKIE['email'])){
        echo  $_COOKIE['name'];
        echo  $_COOKIE['email'];
        echo  $_COOKIE['about'];
        echo  $_COOKIE['gender'];

    }
    ?>
</body>
</html>