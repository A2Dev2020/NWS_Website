<?php
require_once("pdo.php");
require_once("Student.php");

/*$student = new Student($_POST['name']);

var_dump($student);*/

$student = new Student("Nicolas", 27);

$query = $pdo->prepare("INSERT INTO students(prenom, age) VALUES (?, ?)");
$query->execute([
    $student->Prenom,
    $student->Age
]);
?>