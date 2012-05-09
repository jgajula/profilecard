<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

try{
$target_path = "images/users/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
}catch(Exception $e){
    echo $e->getMessage();
}

?>
