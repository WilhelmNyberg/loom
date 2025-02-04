<?php
session_start();
$_SESSION["page"] = "home";
$page = $_SESSION["page"];
include "connect.php";
include "../templates/header.html";
echo "<main>";

$content = $conn->prepare("SELECT * FROM structure WHERE page = ?");
$content->bind_param("s", $page);
$content->execute();

$result = $content->get_result();


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $link = $row["file"];
        include "content.php";
    }
}
echo "</main>";
include "../templates/footer.html";