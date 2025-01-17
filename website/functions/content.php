<?php

$link;
$title;
$text;
$sql = "SELECT * FROM content WHERE file = $link";

include "../components/$link";
