<?php
 include('../../../config.php');
$output = array();
$query  = "SELECT * FROM payment, tbl_users  where tbl_users.userID=payment.userID ORDER BY tbl_users.userID DESC ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?> 