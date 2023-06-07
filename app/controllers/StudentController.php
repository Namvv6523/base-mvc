<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController extends BaseController{
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function index(){
        $student = $this->student->getStudent();
        return $this->render('student.list', compact('student'));
    }
}