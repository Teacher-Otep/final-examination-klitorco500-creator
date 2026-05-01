include 'db.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$course = $_POST['course'];
$student_id = $_POST['student_id'];

$stmt = $conn->prepare("INSERT INTO students (firstname, lastname, middlename, course, student_id) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstname, $lastname, $middlename, $course, $student_id);
$stmt->execute();

echo "Saved successfully!";