<?php

 include('../../../config.php');
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
	

  
    $a2    = mysqli_real_escape_string($conn, $info->a2);
    $a3    = mysqli_real_escape_string($conn, $info->a3);
    $a4    = mysqli_real_escape_string($conn, $info->a4);
	 $a1  =implode($conn, $_POST['a1']);

    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO issue(a1, a2, a3, a4) VALUES ('$a1', '$a2', '$a3', '$a4')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $id    = $info->id;
        $query = "UPDATE issue SET a1='$a1', a2 = '$a2', a3 = '$a3', a4 = '$a4' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>