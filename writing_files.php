<?php

$file = "example2.txt";

if($handle = fopen($file, 'w')){
    
    fwrite($handle, 'I love pizza');
    
    fclose($handle);
    
} else {
 
    echo "The application was not able to write on the files";
}

?>