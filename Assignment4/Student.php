<?php

class Student {

   public $id;
   public $studentName;
   public $course;
   public $grade;

   function __construct(array $info){
    $this->id = $info[0];
    $this->studentName = $info[1];
    $this->course = $info[2];
    $this->grade = $info[3];
   }

   public function __toString(){
    return "$this->id,$this->studentName,$this->course,$this->grade";

   }
  
}
