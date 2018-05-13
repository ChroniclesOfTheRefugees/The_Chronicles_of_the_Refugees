<?php
 include('../../../config.php');
$output = array();
$query  = "SELECT * FROM blog LIMIT 1, 18446744073709551615";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?> 