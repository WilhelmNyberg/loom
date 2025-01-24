<?php
$page;
include "connect.php";
include "../templates/header.html";
echo "<main>";
$content = $conn->prepare("SELECT * FROM structure WHERE page = ?");
$content->bind_param("s", $page);
$content->execute();

$result = $conn->query($content);
if ($result->num_row > 0) {

}
echo "</main>";
include "../templates/footer.html";