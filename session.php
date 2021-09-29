<?php 
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $name = $_POST["name"];
    $email = $_POST ["email"];
    $about_me = $_POST["about"];
    $gender = $_POST["gender"];
        echo " {$name} <br>"; 
        echo "{$email} <br>";
        echo "{$about_me} <br>";
        echo "{$gender} <br>" ;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['about'] = $about_me;
    $_SESSION['gender'] = $gender;
    }
?>
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
    if ($_SERVER["REQUEST_METHOD"] == "GET" and !isset($_SESSION['email'])){
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
    if($_SERVER["REQUEST_METHOD"] == "GET" and isset($_SESSION['email'])){
        echo $_SESSION['name'];
        echo $_SESSION['email'];
        echo $_SESSION['about'];
        echo $_SESSION['gender'];

    }
    ?>
</body>
</html>