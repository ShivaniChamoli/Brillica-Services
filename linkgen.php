<?php
include_once 'header.php';
include_once 'header2.php';
include_once 'navbar.php';
include_once 'config.php';

$stmt = $conn->prepare("SELECT * FROM course");
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $course1[] = $row;
    }
}

?>