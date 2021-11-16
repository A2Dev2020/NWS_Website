<?php
#region truc
require_once("pdo.php");
require_once("Student.php");

$students = [];
$students[] = new Student('Nicolas', 27);
$students[] = new Student('Charline', 27);
$students[] = new Student('Charles', 20);


$page = file_get_contents('page.html');
$module = file_get_contents('student.html');

$student_result = "";

foreach ($students as $student)
{
    $data = str_replace('$prenom', $student->Prenom, $module);
    $data = str_replace('$age', $student->Age, $data);

    $student_result .= $data;
}

$page = str_replace('$students', $student_result, $page);

echo $page;
#endregion
?>