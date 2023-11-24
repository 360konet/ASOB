<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Courses;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      
        $this->middleware('permission:cselist_list|cselist_create|cselist_edit|cselist_delete', ['only' => ['index','store']]);
        $this->middleware('permission:cselist_create', ['only' => ['create','store']]);
        $this->middleware('permission:cselist_edit', ['only' => ['edit','update']]);
        $this->middleware('permission:cselist_delete', ['only' => ['deletecourse']]);
    }
    public function index()
    {
        $courses=Courses::orderByDesc('id')->get();
         return view('courses.index', compact('courses'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

            // $bank = DB::table('bank')->insert($request->except(['_method','_token']), 'name');
           Courses::create($input);

        return Redirect::route('courses.index')->with('success', 'Course added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = Courses::find($id);


        if (empty($courses)) {
            Flash::error('Course not found');
            return redirect(route('courses.index'));
        }

        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Courses::find($id);

        if (empty($course)){
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('course', $course);
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
    $course = Courses::find($id);

    if ($course) {
        // Update the course attributes and save the changes
        $course->update($request->except(['_method', '_token']));

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    } else {
        return redirect()->route('courses.index')->with('error', 'Course not found.');
    }
}

public function deletecourse($id){
    $removecourse= Courses::find($id);
    $removecourse->delete();
    return redirect()->route('courses.index')->with('success', 'Course deleted permanently.');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $course = Courses::find($id);
    
    //     if (!$course) {
    //         return redirect()->route('courses.index')->with('error', 'Course details not found.');
    //     }
    
    //     $course->delete();
    
    //     return redirect()->route('courses.index')->with('success', 'Course deleted permanently.');
    // }

    

}
