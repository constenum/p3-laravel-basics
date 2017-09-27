<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;

class VisitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # get all students
        $students = Student::all();

        # get all schools
        $schools = School::all();

        return view('visitation.index')->with(['students' => $students, 'schools' => $schools]);
    }
}
