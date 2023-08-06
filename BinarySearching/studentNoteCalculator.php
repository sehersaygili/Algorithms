<?php

$students = [
    ["name" => "seher", "student_number" => "1001", "grades" => [80,90,100]],
    ["name" => "deniz", "student_number" => "1005", "grades" => [10,90,80]],
    ["name" => "furkan", "student_number" => "1007", "grades" => [40,90,55]]
];

function calculateAvarageGrade($grades) {
    $totalGrades = array_sum($grades);
    $numGrades = count($grades);
    return $totalGrades / $numGrades;
 }

function searchStudentByName($students, $name) {
    foreach($students as $index => $student) {
        if($student["name"] === $name) {
            return $index;
        }
    }
    return -1;
}

function searchStudentByNumber($students, $number) {
    foreach($students as $index => $number) {
        if($students['number'] === $number) {
            return $index;
        }
    }
    return -1;
}   

//search with name  or search with number
$targetName = "deniz";

$studentIndex = searchStudentByName($students, $targetName);

//If there is no student name 
if ($studentIndex === -1) {
    $targetNumber = '1001'; 
    $studentIndex = searchStudentByNumber($students, $targetNumber);
}

if($studentIndex != -1) {
    $student = $students[$studentIndex];
    $averageGrade = calculateAvarageGrade($student['grades']);
    echo "Öğrenci Adı: " . $student['name'] . "\n";
    echo "Öğrenci Numarası: " . $student['student_number'] . "\n";
    echo "Not Ortalaması: " . $averageGrade;
}else {
    echo "Öğrenci bulunamadı.";
}

?>