<?php

 include('../../../config.php');
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
	

    $a1    = mysqli_real_escape_string($conn, $info->a1);
    $a2    = mysqli_real_escape_string($conn, $info->a2);
    $a3    = mysqli_real_escape_string($conn, $info->a3);
    $a4    = mysqli_real_escape_string($conn, $info->a4);
    $a5    = mysqli_real_escape_string($conn, $info->a5);
    $a6    = mysqli_real_escape_string($conn, $info->a6);
    $a7    = mysqli_real_escape_string($conn, $info->a7);
	

    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO portfolio(a1, a2, a3, a4, a5, a6, a7) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $id    = $info->id;
        $query = "UPDATE portfolio SET a1='$a1', a2 = '$a2', a3 = '$a3', a4 = '$a4', a5 = '$a5', a6 = '$a6', a7 = '$a7'  WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>