<?php
session_start();
$data = $_SESSION["pdf"];
header('Content-Type: application/pdf');
header('Content-Disposition: inline;sample');
echo ($data);
exit;
