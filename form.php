<?php

if(isset($_POST["submit"])){
    
    $name = ["Petras", "Jonas", "Ignas", "Audra", "Ona", "Ana"];
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
        if(strlen($username) < 5){
            echo "Username has to be atleast 5 letters";
        }
        if(strlen($username) > 10){
            echo" Username cannot be longer than 10 letters";
        }
    
        if(!in_array($username, $name)){
            
            echo "Sorry, f**k off!";
        } else {
            echo "Hey, buddy!";
        }
    
    //echo $username;
    //echo "<br>";
    //echo $password;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action="form.php" method="post"> <!-- action, reiskia, kad kur informacija bus nusiusta. Method, tai kokiu budu informacija bus issiusta -->
        
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit">
        
    </form>
    
</body>
</html>