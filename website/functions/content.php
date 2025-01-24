<?php

$link;
$title;
$text;
$src;
$stmt = $conn->prepare("SELECT * FROM content WHERE file = ?");
$stmt->bind_param("s", $link);

include "../components/$link";
