<?php

$stmt = $conn->prepare("SELECT * FROM content WHERE file = ?");
$stmt->bind_param("s", $link);
$stmt->execute();

$things = $stmt->get_result();
if ($things->num_rows > 0) {
    while ($stuff = $things->fetch_assoc()) {

    }
}
