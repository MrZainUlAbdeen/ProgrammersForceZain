<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')

            ->join('courses', 'students.course_id', '=', 'courses.id')
            ->join('grades', 'students.grade_id', '=', 'grades.id')
            ->select('students.*', 'courses.cname', 'grades.gname')
            ->get();
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'cnic' => 'required',
            'course_id' => 'required|integer',
            'grade_id' => 'required|integer',
        ]);
        $student = Student::create($request->all());
        if ($student) {
            return $student;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|alpha',
            'phone' => 'required|email|unique:students',
            'cnic' => 'required',
            'course_id' => 'required|integer',
            'grade_id' => 'required|integer',
        ]);

        $student = Student::find($id);
        $student->update($request->all());
        if ($student) {
            return $student;

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        if ($student) {
            return response()->json([
                'Message' => 'Student Record Delete Successfully !',
                "Status" => 200,
            ]);

        }
    }
}
