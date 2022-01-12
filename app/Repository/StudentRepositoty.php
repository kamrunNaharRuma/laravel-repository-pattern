<?php

namespace App\Repository\Student;

use App\Models\Student;
use function is;
use function is_null;

class StudentRepository implements StudentInterface{
    public function getAllData(){
        return Student::latest()->get();
    }
    public function storeOrUpdate($id = null, $data){
        return "storeOrUpdate";
    }
    public function view($id){
        return "view";
    }
    public function delete($id){
        return  "delete";
    }
}