<?php
include "../class/class.Registor.php";

$registor1 = new Registor();

    extract($_POST);

        $flag = 1;

        $file = $_FILES['profile'];
        $target_dir = PROFILE_IMAGE_UPLOAD;
        
        $file_name = $file['name'];
        $target_file = $target_dir . basename($_FILES["profile"]["name"]);
        
        if(move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file))
        {
            echo "The file ". htmlspecialchars( basename( $_FILES["profile"]["name"])). " has been uploaded.";
            $flag = 1;
        }
        else
        {
            $flag = 0;
        }

        if($flag==1)
        {
            $user_reg = $registor1->Registration($file_name);
            header("Location:../index.php");
        }
        else
        {
            echo "error";
        }
?>