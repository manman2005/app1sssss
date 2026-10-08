<?php
include "./config/connectDB.php";
$curriculum_name = $_POST["curriculum_name"];

$sql = "INSERT INTO tb_curricula   
(  
    curriculum_name
)

VALUES
(
    '$curriculum_name'
)";

mysqli_query($conn, $sql);

header("Location: curriculum.php");

exit;

?>