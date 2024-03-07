<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $validation=
     [
         'name'=>'required'
     ];

    public function index()
    {
        // $department=Department::all();
        $department=Department::paginate(5);

        $data=compact('department');
        return view('department.showDepartment')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.addDepartment');
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
        Department::create($input);
        return redirect()->route('department.index')->with('success','Data Inserted Successfully');
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
        $department = Department::find($id);
        return view('department.editDepartment',['department'=>$department]);
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

            $department=Department::find($id);
            $input=$request->all();
            $department->update($input);
            return redirect()->route('department.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::find($id);
        if(!is_null($department))
        {
            $department->delete();
        }
        return redirect()->route('department.index')->with('success','Data Deleted Successfully');    }
}
