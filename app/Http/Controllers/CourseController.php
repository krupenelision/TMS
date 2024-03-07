<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $validation=
     [
         'name'=>'required',
         'department_id' => 'required'
     ];

    public function index()
    {
        // $course =DB::table('courses')
        // ->join('departments', 'courses.department_id', '=', 'departments.id')
        // ->select('courses.id','courses.name','departments.name','courses.description')
        // ->get();
        // dd($course);

        $course =  DB::table('courses')
        ->join('departments','departments.id','=','courses.department_id')
        ->select('courses.*','departments.name as dept_name')
        ->paginate(3);
        //dd($course);
//
       $data=compact('course');
       return view('course.showCourse')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $departments=Department::get();
        $departments=Department::all();
        $data=compact('departments');
        return view('course.addCourse')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validation=Validator::make($request->all(),$this->validation);
        if($validation->fails())
        {
            return redirect()->back()->withErrors($validation->errors());
        }

        $input=$request->all();
        Course::create($input);
        return redirect()->route('course.index')->with('success','Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('course.editCourse',['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation=Validator::make($request->all(),$this->validation);
            if($validation->fails())
            {
                return redirect()->back()->withErrors($validation->errors());
            }

            $course=Course::find($id);
            $input=$request->all();
            $course->update($input);
            return redirect()->route('course.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        if(!is_null($course))
        {
            $course->delete();
        }
        return redirect()->route('course.index')->with('success','Data Deleted Successfully');
        //return redirect()->back()->with('success','Data Deleted Successfully');
    }
}
