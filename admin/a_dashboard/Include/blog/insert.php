

<?php

 include('../../../config.php');
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
	

    $a1    = mysqli_real_escape_string($conn, $info->a1);
    $a2    = mysqli_real_escape_string($conn, $info->a2);
 
    $a4    = mysqli_real_escape_string($conn, $info->a4);
    $a5    = mysqli_real_escape_string($conn, $info->a5);
    $a7    = mysqli_real_escape_string($conn, $info->a7);
 
	$x1=date("m");
	$x2=date("d");
	$x3=date("Y");

	if($x1==01){
		$x1='January';
	} 
	if($x1==02){
		$x1='February';
	} 
	if($x1==03){
		$x1='March';
	} 
	if($x1==04){
		$x1='April';
	} 
	if($x1==05){
		$x1='May';
	} 
	if($x1==06){
		$x1='June';
	} 
	if($x1==07){
		$x1='July';
	} 
	if($x1==08){
		$x1='August';
	} 
	if($x1==09){
		$x1='September';
	} 
	if($x1==10){
		$x1='October';
	} 
	if($x1==11){
		$x1='November';
	} 
	if($x1==12){
		$x1='December';
	} 

	$a6    = "  Posted at "." ".$x2." ".$x1." ".$x3;	 

    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO blog(a7, a9, r1, a5, a6, a11 ) VALUES ('$a1', '$a2', '$a4', '$a5', '$a7', '$a6' )";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $id    = $info->id;
        $query = "UPDATE blog SET a7 ='$a1', a9 = '$a2', r1 = '$a4', a5 = '$a5' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>

