<?php

$max_file_size = 1048576;
$file_types = array('gif', 'jpg', 'jpeg', 'png');
$upload_dir = 'images/';
$errors = array();

//Check if a file was uploaded 
if($_FILES['image']['size'] != 0)
//if($file_changed == 'yes')
 {
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_uniq = uniqid();
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    
    $file_save = $upload_dir . $file_uniq . '-original.' . $file_ext;
    
    // Checks whether file has been uploaded 
    if (!is_uploaded_file($file_tmp)) {
        $errors[] = 'Ingen fil har valts'; 
    }
    
    // Checks photo filesize
    if ($file_size > $max_file_size) {
        $errors[] = 'Filstorlek överskriden (1 MB)'; 
    }
    
    // Checks if uploaded file is an accepted type 
    if (!in_array($file_ext, $file_types)) {
        $errors[] = 'Ej giltig filtyp'; 
    }
    
    // Checks if errors has been set 
    if (count($errors) == 0) {
    // Saves uploaded file to folder
        if (move_uploaded_file($file_tmp, $file_save)) {
            //Do Something
        } 
        else {
            $errors[] = 'Fel inträffade vid uppladdning av fil';
        } 
    }
}
