<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    function init(){
        calculate();
        say_Something();
    }
    
    function calculate(){
        echo 345+ 510;
        echo "<hr/>";
    }
    
    function say_Something(){
        echo "Hello Student, do you like PHP?";
    }
    
    init();
    
    
    
    ?>
</body>
</html>