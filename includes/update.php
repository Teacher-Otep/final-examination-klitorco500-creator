<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE students SET name='$name' WHERE id='$id'";

if ($conn->query($sql)) {
    echo "Updated Successfully";
} else {
    echo "Error";
}
?>