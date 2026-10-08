<?php

include "./config/connectDB.php";
$student_id = $_POST["student_id"];

$sql = "DELETE FROM tb_students
        WHERE student_id = $student_id";

mysqli_query($conn, $sql);

header("Location: index.php");

exit;

?>