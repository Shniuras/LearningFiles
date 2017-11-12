<?php include "db.php";?>
<?php

function createRow() {

if(isset($_POST["submit"])) {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
    
$hashFormat = "$2y$15$";
$salt = "j1zz1sirblu3z1ssi1ndi3n";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password, $hashF_and_salt);
    
    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query FAILED!" . mysqli_error());
        } else {
        echo "Record Created";
    }
    }
}

function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query FAILED!" . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
    $Id = $row['Id'];
                        
    echo "<option value='Id'>$Id</option>";
                        
    }
}
function deleteRows() {
    if(isset($_POST['submit'])){
    global $connection;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['Id'];
    
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "Record Deleted";
        }
    }
}

function UpdateTable() {
    if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['Id'];
    
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE Id = $id ";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die ("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "Record updated";
        }
    }
}

function readRows () {
    global $connection;
    
    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query FAILED!" . mysqli_error());
    }
        
    while($row = mysqli_fetch_assoc($result)){
            
        print_r($row);

    }   
}

?> 
