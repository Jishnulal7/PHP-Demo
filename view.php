<?php

include 'connect.php';

$sql = mysqli_query(
    $con,
    "SELECT *from demo"
);
$list = array();
if ($sql->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        $myarray['result'] = 'success';
        $myarray['Name'] = $row['name'];
        $myarray['Email'] = $row['email'];
        array_push($list, $myarray);

    }
}else{
    $myarray['result'] = 'failed';
    array_push($list, $myarray);
    
}

echo json_encode($list);


?>