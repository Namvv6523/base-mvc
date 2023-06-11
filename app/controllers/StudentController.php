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



    // tạo form add
    public function store()
    {
        return $this->render('student.add');
    }

    // đẩy dữ liệu vào data
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
                redirect('errors', $errors, 'student/store');
                die;
            } else {
                $result = $this->student->addStudent(NULL, $_POST['name'], $_POST['email'], $_POST['age']);
                if ($result) {

                    redirect('success', "Thêm sản phẩm thành công", 'list-student');
                    die;
                }
            }
        }
    }

    // xây dựng hàm detail
    public function detail($id)
    {
        $student = $this->student->getDetailStudent($id);
        return $this->render('student.edit', compact('student'));
    }

    public function editStudent($id)
    {
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
                redirect('errors', $errors, 'student/detail');
                die;
            } else {
                $result = $this->student->updateStudent($id, $_POST['name'], $_POST['email'], $_POST['age']);
                if ($result) {
                    redirect('success', "Sửa thành công", 'list-student');
                    die;
                }
            }
        }
    }

    // xây dựng hàm xóa
    public function delete($id){
        $this->student->deleteStudent($id);
        header('location: '.BASE_URL. 'list-student');
    }
}
