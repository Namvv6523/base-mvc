<?php
namespace App\Models;
class Product extends BaseModel
{
    protected $table = "product";

    // lấy danh sách sản phẩm
    public function getProduct(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql); // setQuery từ bên class cha
        return $this->loadAllRows(); // lấy tất cả
    }

    // xây dựng hàm thêm sản phẩm
    public function addProduct($id, $tenSP, $gia){
        $sql = "INSERT INTO $this->table value(?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $tenSP, $gia]);
    }
}

?>