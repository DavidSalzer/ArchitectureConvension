<?php
    $data =  $_REQUEST['name'];
    $file=$_FILES[$data];

 $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $file["name"]);
    //print_r($_FILES);
    //echo "sss";
    //echo  $file["name"];
    $extension = end($temp);
    
    if ((($file["type"] == "image/gif")
    || ($file["type"] == "image/jpeg")
    || ($file["type"] == "image/jpg")
    || ($file["type"] == "image/pjpeg")
    || ($file["type"] == "image/x-png")
    || ($file["type"] == "image/png"))
    && ($file["size"] < 5000000)
    && in_array($extension, $allowedExts)) {
      if ($file["error"] > 0) {
        echo "Return Code: " . $file["error"] . "<br>";
      } else {
        //echo "Upload: " . $file["name"] . "<br>";
        //echo "Type: " . $file["type"] . "<br>";
        //echo "Size: " . ($file["size"] / 1024) . " kB<br>";
        //echo "Temp file: " . $file["tmp_name"] . "<br>";
        
        //if (file_exists("upload/" . $file["name"])) {
        //  echo "upload/" . $file["name"];
        //} else {
            $saveName=time().rand(1, 1000);
            $suffix = pathinfo( $file["name"], PATHINFO_EXTENSION);
            move_uploaded_file($file["tmp_name"],
            "upload/" . $saveName.".".$suffix);
          echo "upload/" . $saveName.".".$suffix;
        //}echo ;
      }
    } else {
      echo "Invalid file";
    }

?>