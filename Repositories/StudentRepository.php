<?php

require_once("pdo.php");
require_once('./Student.php');

class StudentRepository
{
    public static function AddStudent(Student $student)
    {
        $query = GetPDO()->prepare("INSERT INTO students(prenom, age) VALUES (?, ?)");
        $query->execute([
            $student->Prenom,
            $student->Age
        ]);
    }

    public static function GetStudents()
    {
        $query = GetPDO()->prepare("SELECT * FROM students");
        $query->execute();

        $result = $query->fetchAll();
        $array = [];

        foreach ($result as $r)
        {
            $array[] = new Student($r["Prenom"], $r["Age"]);
        }

        return ($array);
    }
}