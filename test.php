<?php
#region truc
require_once("pdo.php");
require_once("Student.php");
require_once("Repositories/StudentRepository.php");

$students = StudentRepository::GetStudents();


$page = file_get_contents('page.html');
$module = file_get_contents('student.html');

$student_result = "";

foreach ($students as $student)
{
    $data = str_replace('$prenom', $student->Prenom, $module);
    $data = str_replace('$age', $student->Age, $data);
    $data = str_replace('$id', 42, $data);

    $student_result .= $data;
}

$page = str_replace('$students', $student_result, $page);

echo $page;
#endregion
?>