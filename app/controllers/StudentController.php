<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController extends BaseController
{
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function index()
    {
        $student = $this->student->getStudent();
        return $this->render('student.list', compact('student'));
    }

    public function store()
    {
        return $this->render('student.add');
    }

    public function create()
    {
        // khi người dùng click vào nút add
        if (isset($_POST['submit'])) {

            //validate
            $errors = [];

            if (empty($_POST['name'])) {
                $errors[] = "không được để trống tên";
            }

            if (empty($_POST['email'])) {
                $errors[] = "không được để trống email";
            }

            if (empty($_POST['age'])) {
                $errors[] = "không được để trống age";
            }

            if (count($errors) > 0) {
                // push mảng lỗi này lên section
                // $_SESSION['errors'] = $errors;
                // header('location:' . BASE_URL . 'create');
                redirect('errors',$errors,'student/store');
                die;
            } else {
                $result = $this->student->addStudent(NULL, $_POST['name'], $_POST['email'], $_POST['age']);

                if($result){
                    // $_SESSION['success'] = "them thanh cong";
                    // header('location:' . BASE_URL . 'student/store');
                    redirect('success',"Thêm sản phẩm thành công",'student/store');
                    die;
                }
            }
        }
    }
}
