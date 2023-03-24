<?php

include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = mysqli_query(
    $con,
    "INSERT into demo(name,email) values('$name','$email')"
);

if ($sql) {
    $myarray['result'] = 'success';
} else {
    $myarray['result'] = 'failed';
}

echo json_encode(($myarray));

?>