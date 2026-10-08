<?php
include "./config/connectDB.php";
$branch_name = $_POST["branch_name"];

$sql = "INSERT INTO tb_branch   
(  
    branch_name
)

VALUES
(
    '$branch_name'
)";

mysqli_query($conn, $sql);

header("Location: branch.php");

exit;

?>