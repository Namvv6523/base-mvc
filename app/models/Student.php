<?php

namespace App\Models;

class Student extends BaseModel
{
    protected $table = "student";

    public function getStudent()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // xây dựng hàm thêm học sinh
    public function addStudent($id, $name, $email, $age)
    {
        $sql = "INSERT INTO $this->table values (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $email, $age]);
    }

    // xây dựng hàm lấy chi tiết sản phẩm
    public function getDetailStudent($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    // xây dựng hàm cập nhập học sịnh
    public function updateStudent($id, $name, $email, $age)
    {
        $sql = "UPDATE $this->table SET name = ?,email = ?, age = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $email, $age, $id]);
    }

    // xây dựng hàm xóa học sinh
    public function deleteStudent($id){
        $sql ="DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
