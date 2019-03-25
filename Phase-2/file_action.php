<?php
$target_dir = "temp/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target_file );
if(isset($_POST["submit"])) {
    $escapedArgumment = escapeshellarg($target_file);
    $output=shell_exec("./python/python.exe file_process.py $escapedArgumment");
    
    }
else {
        echo "File not uploaded !";

    }

?>