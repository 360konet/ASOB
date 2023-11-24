<?php

namespace App\Http\Controllers;
use App\Models\Officers;
use Illuminate\Support\Facades\File;
use DateTime;
use DateInterval;
use PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use App\Models\CourseLocal;


use Illuminate\Http\Request;

class OfficersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers=Officers::all()->sortbyDesc('id');
        $cofficers= Officers::select('id')->count();
       return view('admin.officers',compact('cofficers','officers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cselist= DB::table('courses')->select('id','csename')->get();
        return view('admin.addofficers', compact('cselist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $file = $request->file('image');
               $ext = $file->getClientOriginalExtension();
               $filename = time().'.'.$ext;
               $file->move('officers',$filename);
               $input['input'] = $filename;
        }
        $input = $request->all();
        Officers::create($input);


        foreach ($request->csename as $key => $csename ){
             $data =array(
                'service' => $request->service,
                'rank' =>$request->rank,
                'lname' => $request->lname,
                'fname' => $request->fname,
                'gender' => $request->gender,
                'csename' => $request->csename,
                'location'=>$request->location,
                'start_date' =>$request->start_date,
                'category' => "Officers",
                
                ); 

               CourseLocal::create($data);
             }

        return redirect('/officers-portal')->with('status','Officer registed succcessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
