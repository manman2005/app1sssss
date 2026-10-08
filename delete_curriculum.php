<?php

include "./config/connectDB.php";
$curriculum_id = $_POST["curriculum_id"];

$sql = "DELETE FROM tb_curricula
        WHERE curriculum_id = $curriculum_id";

mysqli_query($conn, $sql);

header("Location: curriculum.php");

exit;

?>