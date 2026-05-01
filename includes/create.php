<?php
include "db.php";

$surname = $_POST['surname'];
$name = $_POST['name'];
$middle = $_POST['middle'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO students (surname, name, middle, address, mobile)
VALUES ('$surname','$name','$middle','$address','$mobile')";

if ($conn->query($sql)) {
    echo "Inserted Successfully";
} else {
    echo "Error";
}
?>