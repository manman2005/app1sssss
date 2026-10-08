<?php
include "./config/connectDB.php";
$curriculum_id = $_POST["curriculum_id"];
$curriculum_name = $_POST["curriculum_name"];

$sql = "UPDATE tb_curriculum SET
        curriculum_name = '$curriculum_name'
        WHERE curriculum_id = $curriculum_id";

mysqli_query($conn, $sql);

header("Location: curriculum.php");
exit;
?>