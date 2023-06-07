<?php

namespace App\Models;

class Student extends BaseModel{
    protected $table = "student";

    public function getStudent(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}