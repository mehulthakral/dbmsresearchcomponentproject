<?php

/* Getting file name */
$connect = mysqli_connect('localhost', 'root', '123', 'research');
mysqli_set_charset( $connect, 'utf8');
$filename = $_FILES['file']['name'];
/* Location */
$location = "./temp/".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("docx","txt","csv");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
   if(strtolower($imageFileType)=='csv')
   {
        $handle = fopen($location, "r");
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

            $item1 = mysqli_real_escape_string($conn,$data[0]);
            $item2 = mysqli_real_escape_string($conn,$data[1]);
            $item3 = mysqli_real_escape_string($conn,$data[2]);
            $item4 = mysqli_real_escape_string($conn,$data[3]);
            $item5 = mysqli_real_escape_string($conn,$data[4]);
            $import="INSERT into publication(pid,title,year,type,details) values('$item1','$item2','$item3','$item4','$item5')";
            mysqli_query($conn,$import);
        }
        fclose($handle);
   }
   }
   else{
      echo 0;
   }
   unlink($location);
}