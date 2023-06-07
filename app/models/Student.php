<?php

namespace App\Models;

class Student extends BaseModel{
    protected $table = "student";

    public function getStudent(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addStudent($id,$name,$email,$age) {
        $sql = "INSERT INTO $this->table values (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name,$email,$age]);
    }
}