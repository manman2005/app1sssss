<?php
include "./config/connectDB.php";
$branch_id = $_POST["branch_id"];
$branch_name = $_POST["branch_name"];

$sql = "UPDATE tb_branch SET
        branch_name = '$branch_name'
        WHERE branch_id = $branch_id";

mysqli_query($conn, $sql);

header("Location: branch.php");
exit;
?>