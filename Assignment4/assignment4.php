<?php
require "Student.php";

$studentData = file("student-list.csv");
$students = [];
$compSci = [];
$stat = [];
$apmth = [];
array_shift($studentData);

foreach($studentData as $line){
    
    $student = new Student(explode(",", $line));
   if (str_starts_with($student->course, "COMPSCI")){
       array_push($compSci, $student);
   }elseif(str_starts_with($student->course,"STAT")){
       array_push($stat, $student);
   }elseif(str_starts_with($student->course, "APMTH")){
    array_push($apmth, $student);
}

usort($compSci, function($a, $b) {return strcmp($b->grade, $a->grade);});
usort($apmth, function($a, $b) {return strcmp($b->grade, $a->grade);});
usort($stat, function($a, $b) {return strcmp($b->grade, $a->grade);});

$complist = fopen("course1.csv", "w");
foreach($compSci as $student){
    fwrite($complist, $student->__toString());
}
fclose($complist);

$mthlist = fopen("course2.csv", "w");
foreach($apmth as $student){
    fwrite($mthlist, $student->__toString());
}
fclose($mthlist);

$statlist = fopen("course3.csv", "w");
foreach($stat as $student){
    fwrite($statlist, $student->__toString());
}
fclose($statlist);
}