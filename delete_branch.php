<?php

include "./config/connectDB.php";
$branch_id = $_POST["branch_id"];

$sql = "DELETE FROM tb_branch
        WHERE branch_id = $branch_id";

mysqli_query($conn, $sql);

header("Location: branch.php");

exit;

?>