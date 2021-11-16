<?php
require_once("pdo.php");
require_once("Student.php");
require_once("Repositories/StudentRepository.php");

/*$student = new Student($_POST['name']);

var_dump($student);*/


$student = new Student($_POST['name'], $_POST['age']);

StudentRepository::AddStudent($student);

?>