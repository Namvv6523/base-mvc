<?php

namespace App\Models;

class TaiKhoan extends BaseModel
{
    protected $table = "taikhoan";

    // lấy danh sách tài khoản
    public function getTaiKhoan()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function add($ten, $matkhau)
    {
        $sql = "INSERT INTO $this->table (ten, matkhau) value( ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$ten, $matkhau]);
    }

    public function remove($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $this->getData($sql, false);
    }
}
