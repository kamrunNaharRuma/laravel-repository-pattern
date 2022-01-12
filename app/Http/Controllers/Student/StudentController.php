<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Repository\Student\StudentInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use function is_null;
use function redirect;

class StudentController extends Controller
{
    //
    protected $student;
    public function __construct(StudentInterface $student){
        $this->student = $student;
    }
    public function index(){
        return $this->student->getAllData();
    }
}
