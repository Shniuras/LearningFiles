<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    $list = [23, 55, 879, 41, 22, 07, 10];
    
    echo max($list);
    
    echo "<br>";
    
    echo min($list);
    
    echo "<br>";
    
    sort($list);
    
    print_r($list);
    
    ?>
</body>
</html>