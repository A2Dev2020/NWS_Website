<?php
require_once("Student.php");

$student = new Student($_POST['name']);

var_dump($student);
?>