<?php

namespace App\Controllers;

use App\Models\TaiKhoan;

class TaiKhoanController extends BaseController
{
    public $taikhoan;

    public function __construct()
    {
        $this->taikhoan = new TaiKhoan();
    }

    public function index()
    {
        $taikhoan = $this->taikhoan->getTaiKhoan();
        return $this->render('taikhoan.index', compact('taikhoan'));
    }

    public function store()
    {
        return $this->render('taikhoan.add');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submit'])) {
                $ten = $_POST['name'];
                $matkhau = $_POST['pass'];
                $create = $this->taikhoan->add($ten, $matkhau);
                header('location:list-taikhoan');
            }
            return $this->render('taikhoan.add', compact('create'));
        }
    }

    public function delete($id)
    {
        $taikhoan = $this->taikhoan->remove($id);
        return $this->render('taikhoan.index', compact('taikhoan'));
    }
}
