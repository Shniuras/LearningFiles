<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    $x = "Outside";
    
    function convert(){
        global $x;
        $x = "Inside";
    }
    
    echo $x;
    
    convert();
    
    echo "<br>";
    
    echo $x;
    
    ?>
</body>
</html>