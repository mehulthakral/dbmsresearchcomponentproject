<?php
$connect = mysqli_connect('localhost', 'root', '123', 'research');
mysqli_set_charset( $connect, 'utf8');
/* Getting file name */
$filename = $_FILES['file']['name'];
$new_name = $_POST['new_name'];
/* Location */
$location = "./images/".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */

   if(file_exists($location))
   unlink($location);
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
      if(rename( $location, "./images/".$new_name.".".$imageFileType))
      { 
               
      }
      else
      {
               echo 0 ;
      }
      $new_loc="./images/".$new_name.".".$imageFileType;
      $query = "UPDATE faculty SET photo='".$new_loc."' WHERE fid = '".$new_name."'";
      if(mysqli_query($connect, $query))
      {
      echo "Successfully Changed !";
      }
   }
   else{
      echo 0;
   }
}
