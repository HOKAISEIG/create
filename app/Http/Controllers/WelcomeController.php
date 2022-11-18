<?php

namespace App\Http\Controllers;

use App\Models\employe;
use App\Models\Student;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){

        // $users = DB::select('select * from employee');
        // dd($users);
        //$users = DB::table('employee')->select(['name','phone'])->whereNotNull('name')->orderBy('name')->get();
        //DD($users);
        //  $students = Student::all();
        // // DD($students);
        // foreach($students as $student){
        //     echo $student-> name. "<br>";
        // }
        // $employees = Employee::all();
        // DD($employees);
        $student= new Student();
        $student->name = "new";
        $student->email = "email@gmail.com";
        $student->save();

        

    }
}
