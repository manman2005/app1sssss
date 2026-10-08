<?php
include "./config/connectDB.php";

$student_name = $_POST["student_name"];
$curriculum_id = $_POST["curriculum_id"];
$branch_id = $_POST["branch_id"];

$student_img = ""; 
if (isset($_FILES['student_img']) && $_FILES['student_img']['error'] == 0) {

    $ext = pathinfo($_FILES['student_img']['name'], PATHINFO_EXTENSION);
    
    $new_filename = time() . '.' . $ext; 
    
    $target_path = "./uploads/" . $new_filename;

    if (move_uploaded_file($_FILES['student_img']['tmp_name'], $target_path)) {
        $student_img = $new_filename; 
    }
}

$sql = "INSERT INTO tb_students (
    student_name,
    curriculum_id,
    branch_id,
    student_img
) VALUES (
    '$student_name',
    '$curriculum_id',
    '$branch_id',
    '$student_img'
)";

mysqli_query($conn, $sql);
header("Location: index.php");
exit;
?>