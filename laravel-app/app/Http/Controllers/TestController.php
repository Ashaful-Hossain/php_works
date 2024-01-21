<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
class TestController extends Controller
{   
    function index() {
        $data="Welcome to laravel";
        $stdData = Student::all();
        // dd($stdData);
        return view('test',compact('data','stdData'));
    }
    function create() {
        return view('stdForm');
    }
    function save(Request $r){
        $dd=['name'=>$r->name,'roll'=>$r->roll,'fee'=>$r->fee,'status'=>$r->status];
        Student::create($dd);
        // Student::create($r->all());
        // $data = new Student();
        // $data->name = $r->name;
        // $data->roll = $r->roll;
        // $data->fee = $r->fee;
        // $data->status = $r->status;
        // $data->save();
        return redirect()->route('f');
    }
}
