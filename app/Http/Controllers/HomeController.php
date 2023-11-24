<?php

namespace App\Http\Controllers;
use App\Models\Officers;
use App\Models\User;
use App\Models\Ranks;
use App\Models\Civilians;
use App\Models\Posting;
use App\Models\Deployment;
use App\Models\Operations;
use App\Models\Local;
use App\Models\CourseLocal;
use App\Models\CourseOver;
use App\Models\Leave;
use App\Models\Courses;
use Illuminate\Support\Facades\File;
use DateTime;
use DateInterval;
use PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;


use Illuminate\Http\Request;
use MongoDB\BSON\Timestamp;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
     public function __construct(){
         
        /**Middleware permissions */
        $this->middleware('permission:officers_list|officers_create|officers_edit|officers_delete', ['only' => ['officers_portal','add_officers']]);
        $this->middleware('permission:officers_create', ['only' => ['addofficers','add_officers']]);
        $this->middleware('permission:officers_edit', ['only' => ['editofficers','updateofficers']]);
        $this->middleware('permission:officers_delete', ['only' => ['deleteofficers']]);

        $this->middleware('permission:soldiers_list|soldiers_create|soldiers_edit|soldiers_delete', ['only' => ['ranks','add_rank']]);
        $this->middleware('permission:soldiers_create', ['only' => ['addranks','add_ranks']]);
        $this->middleware('permission:soldiers_edit', ['only' => ['editranks','ranksedit']]);
        $this->middleware('permission:soldiers_delete', ['only' => ['deleteranks']]);

    

        $this->middleware('permission:courses_list|courses_create|courses_edit|courses_delete', ['only' => ['courselocal','addnewcourselocal']]);
        $this->middleware('permission:courses_create', ['only' => ['addcourselocal','addnewcourselocal']]);
        $this->middleware('permission:courses_edit', ['only' => ['editcourselocal','updatenewcourselocal']]);
        $this->middleware('permission:courses_delete', ['only' => ['deletecourselocal']]);


        $this->middleware('permission:leave_list|leave_create|leave_edit|leave_delete', ['only' => ['leave','add_leave']]);
        $this->middleware('permission:leave_create', ['only' => ['addleave','add_leave']]);
        $this->middleware('permission:leave_edit', ['only' => ['edit_leave','update_leave']]);
        $this->middleware('permission:leave_delete', ['only' => ['delete_leave']]);

     
        

        $this->middleware('permission:course_report', ['only' => ['recour']]);
        
        $this->middleware('can:operation_report',['only' => ['reope','snrroll']]);
        $this->middleware('can:postings_report',['only' => ['repos']]);


        $this->middleware('permission:operation_list|operation_create|operation_edit|operation_delete', ['only' => ['operations','addoperations']]);
        $this->middleware('permission:operation_create', ['only' => ['addoperations','addnewoperation']]);
        $this->middleware('permission:operation_edit', ['only' => ['editoperation','updateoperation']]);
        $this->middleware('permission:operation_delete', ['only' => ['deleteoperation']]);

        
        $this->middleware('permission:postings_list|postings_create|postings_edit|postings_delete', ['only' => ['operations','addoperations']]);
        $this->middleware('permission:postings_create', ['only' => ['post','addpost']]);
        $this->middleware('permission:postings_edit', ['only' => ['editattachment','updateattachment']]);
        $this->middleware('permission:postings_delete', ['only' => ['deletepost']]);
        


       

        $this->middleware('can:confidential_report')->only('roles');

        
        // $this->middleware('can:officers_list|officers_create|officers_edit|officers_delete', ['only' => ['officers_portal','add_officers']]);
        // $this->middleware('can:officers_create', ['only' => ['addofficers','add_officers']]);
        // $this->middleware('can:officers_edit', ['only' => ['editofficers','updateofficers']]);
        // $this->middleware('can:officers_delete', ['only' => ['deleteofficers']]);
        // $this->middleware('permissi:cselist_list|cselist_create|cselist_edit|cselist_delete', ['only' => ['index','store']]);
        // $this->middleware('permission:cselist_create', ['only' => ['create','store']]);
        // $this->middleware('permission:cselist_edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:cselist_delete', ['only' => ['destroy']]);
     
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $untotal= Operations::select('id')->count();
        $unOfficer= Operations::select('operation')->where('type',"UN Operation")->where('category','Officers')->count();
        $unSoldier= Operations::select('operation')->where('type',"UN Operation")->where('category','Soldiers')->count();
        $unCivilian= Operations::select('operation')->where('operation','Civilian')->count();

        $intotal= Operations::select('id')->where('type',"Internal Operation")->count();
        $inOfficer= Operations::select('operation')->where('type',"Internal Operation")->where('category','Officers')->count();
        $inSoldier= Operations::select('operation')->where('type',"Internal Operation")->where('category','Ranks')->count();
        $inCivilian= Operations::select('operation')->where('operation','Civilian')->count();

        $attach=Posting::select('id')->where('type',"Attachment")->count();
        $atOfficer= Posting::where('category','Officer')->count();
        $deploy=Posting::select('id')->where('type',"Posting")->count();
        $depOfficer= Deployment::select('category')->where('category','Officer')->count();
        $ad= $deploy + $attach;

        $local=CourseLocal::select('id')->where('type',"Course local")->count();
        $over=CourseLocal::select('id')->where('type',"Course Oversea")->count();
        $allcourse=$local+$over;

        $allofficer=Officers::select('id')->where('status',0)->count();
        
        $allcivilians=Civilians::select('id')->where('status',0)->count();
        $mofficer=Officers::select('id')->where('gender','Male')->where('status',0)->count();
        $fofficer=Officers::select('id')->where('gender','Female')->where('status',0)->count();

        $allsldrs=Ranks::select('id')->where('status',0)->count();
        $msldrs=Ranks::select('id')->where('gender','Male')->where('status',0)->count();
        $fsldrs=Ranks::select('id')->where('gender','Female')->where('status',0)->count();

         $allciv=Civilians::select('id')->where('status',0)->count();
         $mciv=Civilians::select('id')->where('Gender','Male')->where('status',0)->count();
         $fciv=Civilians::select('id')->where('Gender','Female')->where('status',0)->count();

         $overall = $allciv + $allofficer + $allsldrs;
         $moverall = $mciv + $mofficer + $msldrs;
         $foverall = $fciv + $fofficer + $fsldrs;
        $offded= $unOfficer + $inOfficer + $atOfficer + $depOfficer;
        $officer= $allofficer - $offded;
        return view('home',compact('overall','moverall','foverall','attach','officer','allofficer','mofficer','fofficer','allsldrs','msldrs','fsldrs','allciv','mciv','fciv','untotal','unOfficer','unSoldier','unCivilian','intotal','inOfficer','inSoldier','inCivilian','deploy','ad','local','over','allcourse'));
    }

    public function officers_portal(){
        $officers=Officers::orderBy('service')->get();
        $cofficers= Officers::select('id')->count();
       return view('admin.officers',compact('cofficers','officers'));
    }

    public function addofficers(){

        $cselist= DB::table('courses')->select('id','csename')->get();
        return view('admin.addofficers', compact('cselist'));
    }

    public function add_officers(Request $request){
        $add = new officers();
        $file_d = "user.png";
        $file = $request->file('image');
        if($request->hasFile('image')){
         $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('officers',$filename);
            $add->image = $filename;
     } elseif(!isset($file)){
        $add->image = $file_d;
     }
         $add->service=$request->input('service');
         $add->rank=$request->input('rank');
         $add->lname=$request->input('lname');
         $add->fname=$request->input('fname');
         $add->gender=$request->input('gender');
         $add->location=$request->input('location');
         $add->license=$request->input('license');
         $add->posted_unit=$request->input('unit');
         $add->dob=$request->input('dob');
         $add->dop=$request->input('dop');
         $add->recommendation=$request->input('recommend');
         $add->exercise=$request->input('exercise');
         $add->instr=$request->input('instr');
         $add->driver_type=implode(" ",$request->input('driver_type'));
         $add->kin=$request->input('kin');
         $add->relation=$request->input('relation');
         $add->kphone=$request->input('kphone');
         $add->commission=$request->input('commission');
         $add->promotion=$request->input('promotion');
         $add->phone=$request->input('phone');
         $add->remarks=$request->input('remarks');
         $add->status=0;
         $add->save();
 
         return redirect('/officers-portal')->with('status','Officer registed succcessfully');
 
     }
 
    public function deleteofficers($id){
        $remove= Officers::find($id);
        if($remove->image){
            $path='officers/'. $remove->image;
            if(File::exists($path)){
                File::delete($path);
            }
        $remove->delete();
        return redirect('/officers-portal')->with('status','Officer deleted succcessfully');
    }
}

public function viewofficers($id, $service)
{
    $viewofficer = Officers::find($id);
    $operation = Operations::where('personnel_id', $service)->where('category','=',"Officers")->where('type','=',"UN Operation")->get();
    $loperation = Operations::where('personnel_id', $service)->where('category','=',"Officers")->where('type','=',"Internal Operation")->get();
    $lcourse = CourseLocal::where('personnel_id', $id)->where('category','=',"Officers")->get();
    $postings = Posting::where('personnel_id', $id)->where('category','=',"Officers")->get();

    return view('admin.viewofficers', compact('viewofficer', 'operation','loperation','lcourse','postings'));
}

    public function editofficers($id){
        $editofficer= Officers::find($id);
        return view('admin.editofficers',compact('editofficer'));
    }

    public function officersedit(Request $request,$id){
        $officeredit = Officers::find($id);
        if($request->hasFile('image')){
            $path='officers/'.$officeredit->image;
            if(File::exists($path)){
             File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('officers/',$filename);
            $officeredit->image = $filename;
         }

         $officeredit->service=$request->input('service');
         $officeredit->rank=$request->input('rank');
         $officeredit->lname=$request->input('lname');
         $officeredit->fname=$request->input('fname');
         $officeredit->gender=$request->input('gender');
         $officeredit->location=$request->input('location');
         $officeredit->license=$request->input('license');
         $officeredit->posted_unit=$request->input('unit');
         $officeredit->dob=$request->input('dob');
         $officeredit->dop=$request->input('dop');
         $officeredit->recommendation=$request->input('recommend');
         $officeredit->exercise=$request->input('exercise');
         $officeredit->instr=$request->input('instr');
         $officeredit->driver_type=implode(" ",$request->input('driver_type'));
         $officeredit->kin=$request->input('kin');
         $officeredit->relation=$request->input('relation');
         $officeredit->kphone=$request->input('kphone');
         $officeredit->commission=$request->input('commission');
         $officeredit->promotion=$request->input('promotion');
         $officeredit->phone=$request->input('phone');
         $officeredit->remarks=$request->input('remarks');
         $officeredit->status=$request->input('status');
        $officeredit->update();

        return redirect('/officers-portal')->with('status','Officer updated succcessfully');
    }

    public function printofficer($id,$service){
        $viewofficer = Officers::find($id);
        $operation = Operations::where('personnel_id', $service)->first();
        $loperation = Local::where('personnel_id', $service)->first();
        $lcourse = CourseLocal::where('personnel_id', $id)->first();
        $ocourse = CourseOver::where('service', $service)->first();
        $pdf = new Dompdf();        
        $html = view('officerpdf', compact('viewofficer','operation','loperation','lcourse','ocourse'))->render();

        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();

        return $pdf->stream('officers.pdf');
    }








    public function ranks(){
        $ranks=Ranks::orderBy('service')->get();
       
       return view('admin.ranks', compact('ranks'));
    }

    public function addranks(){
        return view('admin.addranks');
     }

     public function add_ranks(Request $request){
        $add = new Ranks();
        $file = $request->file('image');
        $file_d = "user.png";
        if($request->hasFile('image')){
         $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('ranks',$filename);
            $add->image = $filename;
     }elseif(!isset($file)){
        $add->image = $file_d;
     }
     $add->service=$request->input('service');
     $add->rank=$request->input('rank');
     $add->lname=$request->input('lname');
     $add->fname=$request->input('fname');
     $add->gender=$request->input('gender');
     $add->location=$request->input('location');
     $add->license=$request->input('license');
     $add->posted_unit=$request->input('unit');
     $add->dob=$request->input('dob');
     $add->dop=$request->input('dop');
     $add->recommendation=$request->input('recommend');
     $add->exercise=$request->input('exercise');
     $add->instr=$request->input('instr');
     $add->driver_type=implode(" ",$request->input('driver_type'));
     $add->kin=$request->input('kin');
     $add->relation=$request->input('relation');
     $add->kphone=$request->input('kphone');
     $add->passout=$request->input('passout');
     $add->promotion=$request->input('promotion');
     $add->phone=$request->input('phone');
     $add->remarks=$request->input('remarks');
     $add->status=0;
     $add->save();
 
         return redirect('/ranks-portal')->with('status','Soldier registed succcessfully');
 
     }

     public function deleteranks($id){
        $remove= ranks::find($id);
        if($remove->image){
            $path='rfanks/'. $remove->image;
            if(File::exists($path)){
                File::delete($path);
            }
        $remove->delete();
        return redirect('/ranks-portal')->with('status','Other rank deleted succcessfully');
    }
}

public function viewranks($id,$service){
    $viewranks= Ranks::find($id);
    $operation = Operations::where('personnel_id', $service)->where('category','=',"Ranks")->where('type','=',"UN Operation")->get();
    $loperation = Operations::where('personnel_id', $service)->where('category','=',"Ranks")->where('type','=',"Internal Operation")->get();
    $lcourse = CourseLocal::where('personnel_id', $id)->where('category','=',"Ranks")->get();
    $postings = Posting::where('personnel_id', $id)->where('category','=',"Ranks")->get();
    return view('admin.viewranks',compact('viewranks','operation','loperation','lcourse','postings'));
}

public function editranks($id){
    $editrank= Ranks::find($id);
    return view('admin.editranks',compact('editrank'));
}

public function rankedit(Request $request,$id){
    $rankredit = Ranks::find($id);
        if($request->hasFile('image')){
            $path='ranks/'.$rankredit->image;
            if(File::exists($path)){
             File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('ranks/',$filename);
            $rankredit->image = $filename;
         }

         $rankredit->service=$request->input('service');
         $rankredit->rank=$request->input('rank');
         $rankredit->lname=$request->input('lname');
         $rankredit->fname=$request->input('fname');
         $rankredit->gender=$request->input('gender');
         $rankredit->location=$request->input('location');
         $rankredit->license=$request->input('license');
         $rankredit->posted_unit=$request->input('unit');
         $rankredit->dob=$request->input('dob');
         $rankredit->dop=$request->input('dop');
         $rankredit->recommendation=$request->input('recommend');
         $rankredit->exercise=$request->input('exercise');
         $rankredit->instr=$request->input('instr');
         $rankredit->driver_type=implode(" ",$request->input('driver_type'));
         $rankredit->kin=$request->input('kin');
         $rankredit->relation=$request->input('relation');
         $rankredit->kphone=$request->input('kphone');
         $rankredit->passout=$request->input('passout');
         $rankredit->promotion=$request->input('promotion');
         $rankredit->phone=$request->input('phone');
         $rankredit->remarks=$request->input('remarks');
         $rankredit->status=$request->input('status');
         $rankredit->updated_at= Carbon::now()->timestamp;
         $rankredit->update();
 
         return redirect('/ranks-portal')->with('status','Other rank updated succcessfully');
}

public function printrank($id,$service){
    $viewranks = Ranks::find($id);
    $operation = Operations::where('personnel_id', $service)->first();
        $loperation = Local::where('personnel_id', $service)->first();
        $lcourse = CourseLocal::where('personnel_id', $service)->first();
        $ocourse = CourseOver::where('service', $service)->first();
    $pdf = new Dompdf();        
    $html = view('rankpdf', compact('viewranks','operation','loperation','lcourse','ocourse'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('soilder.pdf');
}



public function printallsoldier()
{
    $ranks = Ranks::all();

    $pdf = new Dompdf();        
    $html = view('allsoldierpdf', compact('ranks'))->render();
        
    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('soldier.pdf');
}







    public function civilians(){
        $ccivilians= Civilians::select('id')->count();
        $civilians=Civilians::all()->sortDesc();
        $junior=Civilians::select('rank')->where('rank','Junior Staff')->count();
        $senior=Civilians::select('rank')->where('rank','Senior Staff')->count();
        return view('admin.civilians',compact('ccivilians','civilians','junior','senior'));
    }

    public function addcivilians(){
        return view('admin.addcivilians');
    }

    
    public function add_civilians(Request $request){
        $add = new Civilians();
        
        if($request->hasFile('image')){
         $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('civilians',$filename);
            $add->image = $filename;
     }
         $add->service=$request->input('service');
         $add->rank=$request->input('rank');
         $add->lname=$request->input('lname');
         $add->fname=$request->input('fname');
         $add->nationality=$request->input('nationality');
         $add->dob=$request->input('dob');
         $add->blood=$request->input('blood');
         $add->hometown=$request->input('hometown');
         $add->region=$request->input('region');
         $add->marital=$request->input('marital');
         $add->spouse=$request->input('spouse');
         $add->sphone=$request->input('sphone');
         $add->kin=$request->input('kin');
         $add->relation=$request->input('relation');
         $add->kphone=$request->input('kphone');
         $add->employment=$request->input('employment');
         $add->promotion=$request->input('promotion');
         $add->phone=$request->input('phone');
         $add->remarks=$request->input('remarks');
         $add->Gender=$request->input('gender');
         $add->course=$request->input('course');

         $add->save();
 
         return redirect('/civilians-portal')->with('status','Civilian registed succcessfully');
      }

      public function deletecivilians($id){
        $remove= Civilians::find($id);
        if($remove->image){
            $path='civilians/'. $remove->image;
            if(File::exists($path)){
                File::delete($path);
            }
        $remove->delete();
        return redirect('/civilians-portal')->with('status','Civilian deleted succcessfully');
    }
}

public function viewcivilians($id,$service){
    $viewcivilians= Civilians::find($id);
    $operation = Operations::where('service', $service)->first();
        $loperation = Local::where('service', $service)->first();
        $lcourse = CourseLocal::where('service', $service)->first();
        $ocourse = CourseOver::where('service', $service)->first();
    return view('admin.viewcivilians',compact('viewcivilians','operation','loperation','lcourse','ocourse'));
}

public function editcivilians($id){
    $editcivilians= Civilians::find($id);
    return view('admin.editcivilians',compact('editcivilians'));
}

public function civilianedit(Request $request,$id){
    $civilianedit = Civilians::find($id);
        if($request->hasFile('image')){
            $path='civilians/'.$civilianedit->image;
            if(File::exists($path)){
             File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('civilians/',$filename);
            $civilianedit->image = $filename;
         }

         $civilianedit->service=$request->input('service');
         $civilianedit->rank=$request->input('rank');
         $civilianedit->lname=$request->input('lname');
         $civilianedit->fname=$request->input('fname');
         $civilianedit->nationality=$request->input('nationality');
         $civilianedit->dob=$request->input('dob');
         $civilianedit->blood=$request->input('blood');
         $civilianedit->hometown=$request->input('hometown');
         $civilianedit->region=$request->input('region');
         $civilianedit->marital=$request->input('marital');
         $civilianedit->spouse=$request->input('spouse');
         $civilianedit->sphone=$request->input('sphone');
         $civilianedit->kin=$request->input('kin');
         $civilianedit->relation=$request->input('relation');
         $civilianedit->kphone=$request->input('kphone');
         $civilianedit->employment=$request->input('employment');
         $civilianedit->un=$request->input('un');
         $civilianedit->promotion=$request->input('promotion');
         $civilianedit->phone=$request->input('phone');
         $civilianedit->remarks=$request->input('remarks');
         $civilianedit->update();
 
         return redirect('/civilians-portal')->with('status','Civilian updated succcessfully');
}

public function printcivilian($id,$service){
    $viewcivilians = Civilians::find($id);
    $operation = Operations::where('service', $service)->first();
    $loperation = Local::where('service', $service)->first();
    $lcourse = CourseLocal::where('service', $service)->first();
    $ocourse = CourseOver::where('service', $service)->first();
    $pdf = new Dompdf();        
    $html = view('civilianpdf', compact('viewcivilians','operation','loperation','lcourse','ocourse'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('civilian.pdf');
}

public function printallcivilian(){
    $civilians= Civilians::all();
    
    $pdf = new Dompdf();        
    $html = view('allcivilianpdf', compact('civilians'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('civilian.pdf');
}






public function attachments(){
    $attach=Posting::all();
    return view('admin.attachment',compact('attach'));
}

public function post(){
    $officer= Officers::all();
    $rank= Ranks::all();
    $civilian= Civilians::all();
    return view('admin.addpost',compact('officer','rank','civilian'));
}

public function addpost(Request $request){
    $post= new Posting;

    $post->operation= $request->input('operation');
    $post->service= $request->input('service');
    $post->rank= $request->input('rank');
    $post->lname= $request->input('lname');
    $post->fname= $request->input('fname');
    $post->gender= $request->input('gender');
    $post->posted_from= $request->input('posted_from');
    $post->posted_to= $request->input('posted_to');
    $post->posted_date= $request->input('posted_date');
    $post->arrival_date= $request->input('arrival_date');
    $post->appointment= $request->input('appointment');
    $post->remarks= $request->input('remarks');
    $post->save();


    
    return redirect('/attachments')->with('status','Posting/Attachment successful');
}

public function deletepost($id){
    $removep= Posting::find($id);
    $removep->delete();
    return redirect('/attachments')->with('status','Posting/Attachment deleted succcessfully');
}

public function viewattachment($id){
    $attach=Posting:: find($id);
    return view('admin.viewattachment',compact('attach'));
}

public function editattachment($id){
    $attach = Posting::find($id);
    return view('admin.editattachment',compact('attach'));
}

public function printallattach(){
    $attach = Posting::all();
    $pdf = new Dompdf();        
    $html = view('allattachpdf', compact('attach'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('attachment.pdf');
}

public function updateattachment($id,Request $request){
    $post= Posting::find($id);

    $post->operation= $request->input('operation');
    $post->personnel_id = $request->input('personnel_id');
    $post->posted_from= $request->input('posted_from');
    $post->posted_to= $request->input('posted_to');
    $post->posted_date= $request->input('posted_date');
    $post->arrival_date= $request->input('arrival_date');
    $post->appointment= $request->input('appointment');
    $post->remarks= $request->input('remarks');
    $post->save();

    return redirect('/attachments')->with('status','Attachment updated successful');
}

public function getOfficerData(Request $request)
{
    $officers = Officers::get();
    return response()->json($officers);
}

public function getRankData(Request $request)
{
    $ranks = Ranks::all();
    return response()->json($ranks);
}

public function getCivilianData(Request $request)
{
    $civilians = Civilians::all();
    return response()->json($civilians);
}


public function operations(){
    $operation=Operations::all();
    return view('admin.operation',compact('operation'));
}

public function addoperations(){
    return view('admin.addoperation');
}

public function addnewoperation(Request $request){
    $addoperation= new Operations();

    $addoperation->personnel_id= $request->input('personnel_id');
    $addoperation->category= $request->input('category');
    $addoperation->type= $request->input('type');
    $addoperation->operation= $request->input('operation');
    
    $addoperation->location= $request->input('location');
    $addoperation->departure_date= $request->input('departure_date');
    $addoperation->arrival_date= $request->input('arrival_date');
    $addoperation->appointment= $request->input('appointment');
    $addoperation->remarks= $request->input('remarks');
    $addoperation->save();
    if($request->type = "UN Operation"){
    DB::table($request->category)->where('id',$request->personnel_id)->update(['lops'=> $request->operation, 'lops_appt'=>$request->appointment, 'lops_departure' => $request->departure_date, 'lops_return' => $request->arrival_date, 'lops_loc'=>$request->location]);
    }
    return redirect('/un')->with('status','Details submitted successfully');
}

public function deleteoperation($id){
    $removep= Operations::find($id);
    $removep->delete();
    return redirect('/un')->with('status','Details deleted succcessfully');
}

public function editoperation($id){
    $un= Operations::find($id);
    return view('admin.editoperation',compact('un'));
}

public function updateoperation($id,Request $request){
    $addoperation= Operations::find($id);

    $addoperation->service= $request->input('service');
    $addoperation->operation= $request->input('operation');
    $addoperation->rank= $request->input('rank');
    $addoperation->lname= $request->input('lname');
    $addoperation->fname= $request->input('fname');
    $addoperation->gender= $request->input('gender');
    $addoperation->location= $request->input('location');
    $addoperation->departure_date= $request->input('departure_date');
    $addoperation->arrival_date= $request->input('arrival_date');
    $addoperation->appointment= $request->input('appointment');
    $addoperation->remarks= $request->input('remarks');
    $addoperation->save();
    
    return redirect('/un')->with('status','Operation updated successfully');
}

public function viewoperation($id){
    $un= Operations::find($id);

    return view('admin.viewoperation',compact('un'));
}

public function printallun(){
    $un= Operations::orderBy('type')->get();

    $pdf = new Dompdf();        
    $html = view('allunpdf', compact('un'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('un.pdf');
}

public function overall(){
    $officer= Officers::all();
    $rank = Ranks::all();
    $civilian = Civilians::all();
    return view('admin.all', compact('officer','rank','civilian'));
}

public function local(){
    $localview=Local::all();
    return view('admin.local',compact('localview'));
}

public function addlocal(Request $request){
    $addlocal= new Local();

    $addlocal->service= $request->input('service');
    $addlocal->operation= $request->input('operation');
    $addlocal->rank= $request->input('rank');
    $addlocal->lname= $request->input('lname');
    $addlocal->fname= $request->input('fname');
    $addlocal->gender= $request->input('gender');
    $addlocal->location= $request->input('location');
    $addlocal->departure_date= $request->input('departure_date');
    $addlocal->arrival_date= $request->input('arrival_date');
    $addlocal->appointment= $request->input('appointment');
    $addlocal->remarks= $request->input('remarks');
    $addlocal->save();
    
    return redirect('/local')->with('status','Operation submitted successfully');
}

public function updateinternal($id,Request $request){
    $addoperation= Local::find($id);

    $addoperation->service= $request->input('service');
    $addoperation->operation= $request->input('operation');
    $addoperation->rank= $request->input('rank');
    $addoperation->lname= $request->input('lname');
    $addoperation->fname= $request->input('fname');
    $addoperation->gender= $request->input('gender');
    $addoperation->location= $request->input('location');
    $addoperation->departure_date= $request->input('departure_date');
    $addoperation->arrival_date= $request->input('arrival_date');
    $addoperation->appointment= $request->input('appointment');
    $addoperation->remarks= $request->input('remarks');
    $addoperation->save();
    
    return redirect('/local')->with('status','Operation updated successfully');
}

public function localform(){
    return view('admin.localform');
}

public function printalllocal(){
    $local= Local::all();

    $pdf = new Dompdf();        
    $html = view('alllocalpdf', compact('local'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('interaloperation.pdf');
}

public function deleteinternal($id){
    $removep= Local::find($id);
    $removep->delete();
    return redirect('/local')->with('status','Operation deleted succcessfully');
}

public function viewinternal($id){
    $local = Local::find($id);
    return view('admin.viewlocal',compact('local'));
}


public function editinternal($id){
    $un= Local::find($id);
    return view('admin.editlocal',compact('un'));
}

public function deployment(){
    $deploy=Deployment::all();
    return view('admin.deployment',compact('deploy'));
}

public function adddeployment(){
    return view('admin.adddeployment');
}

public function adddeploy(Request $request){
    $post= new Posting;

    $post->category= $request->input('category');
    $post->personnel_id= $request->input('personnel_id');
    $post->type= $request->input('type');
    
    $post->posted_from= $request->input('posted_from');
    $post->posted_to= $request->input('posted_to');
    $post->posted_date= $request->input('posted_date');
    $post->appointment= $request->input('appointment');
    $post->remarks= $request->input('remarks');
    $post->save();
    if($post->type === "Posting"){
        $category= $request->category;
        DB::table($category)->where('id',$post->personnel_id)->update(['status'=> 1]);
    
        return redirect('/deployment')->with('status','Posting/Attachment successful');  
    }else{
    return redirect('/deployment')->with('status','Posting/Attachment successful');
    }
}

public function deldeployment($id){
    $remove= Posting::find($id);
    $remove->delete();
    return redirect('/deployment')->with('status','Deployment deleted succcessfully');
}

public function viewdeployment($id){
   $attach=Posting::find($id);
   return view('admin.viewdeployment',compact('attach'));
}

public function editdeployment($id){
    $attach=Posting::find($id);
   return view('admin.editdeployment',compact('attach'));
}

public function printallposting(){
    $posting= Posting::all();

    $pdf = new Dompdf();        
    $html = view('allpostpdf', compact('posting'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('posting.pdf');
}

public function updatedeployment($id,Request $request){
    $post= Posting::find($id);
    $post->category= $request->input('category');
    $post->service= $request->input('service');
    $post->rank= $request->input('rank');
    $post->lname= $request->input('lname');
    $post->fname= $request->input('fname');
    $post->gender= $request->input('gender');
    $post->posted_from= $request->input('posted_from');
    $post->posted_to= $request->input('posted_to');
    $post->posted_date= $request->input('posted_date');
    $post->appointment= $request->input('appointment');
    $post->remarks= $request->input('remarks');
    $post->save();

    return redirect('/deployment')->with('status','Deployment updated successful');
}

public function courselocal(){
    $coursel=CourseLocal::all();
    return view('admin.courselocal',compact('coursel'));
}

public function addcourselocal(){
    $courses= Courses::all();
    return view ('admin.addcourselocal',compact('courses'));
}

public function addnewcourselocal(Request $request){
    $cl=new CourseLocal();
    
    $cl->category=$request->input('category');    
    
    $cl->personnel_id=$request->input('personnel_id');
    $cl->from=$request->input('from');
    $cl->location=$request->input('to');
    $cl->type=$request->input('type');
    $cl->start_date=$request->input('start_date');
    $cl->end_date=$request->input('end_date');
    $cl->csename=$request->input('course');
    $cl->remarks=$request->input('remarks');
    $cl->save();

    return redirect('/personnel_courses');
}

public function editcourselocal($id){
    $editcl= CourseLocal::find($id);
    return view('admin.editcourselocal',compact('editcl'));
}

public function viewcourselocal($id){
    $editcl= CourseLocal::find($id);
    return view('admin.viewcourselocal',compact('editcl'));
}

public function deletecourselocal($id){
    $delcl= CourseLocal::find($id);
    $delcl->delete();

    return redirect('/personnel_courses');
}

public function updatenewcourselocal($id,Request $request){
    $cl=CourseLocal::find($id);
    
    $cl->category=$request->input('category');    
  
   
    $cl->type= $request->input('type');
    $cl->personnel_id=$request->input('personnel_id');
    $cl->from=$request->input('from');
    $cl->location=$request->input('location');
    $cl->start_date=$request->input('start_date');
    $cl->end_date=$request->input('end_date');
    $cl->csename=$request->input('csename');
    $cl->remarks=$request->input('remarks');
    $cl->save();

    return redirect('/personnel_courses');
}

public function printallcl(){
    $cl=CourseLocal::all();

    $pdf = new Dompdf();        
    $html = view('allclpdf', compact('cl'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('courselocal.pdf');
}




public function courseover(){
    $courseo= CourseOver::all();
    return view('admin.courseover',compact('courseo'));
}

public function addcourseover(){
    $courses= Courses::all();
    return view('admin.addcourseover',compact('courses'));
}

public function addnewcourseover(Request $request){
    $cl=new CourseOver();
    
    $cl->category=$request->input('category');    
    $cl->rank= $request->input('rank');
    $cl->lname= $request->input('lname');
    $cl->fname= $request->input('fname');
    $cl->gender= $request->input('gender');
    $cl->service=$request->input('service');
    $cl->rank= $request->input('rank');
    $cl->lname= $request->input('lname');
    $cl->fname= $request->input('fname');
    $cl->gender= $request->input('gender');
    $cl->from=$request->input('from');
    $cl->to=$request->input('to');
    $cl->start_date=$request->input('start_date');
    $cl->end_date=$request->input('end_date');
    $cl->course=$request->input('course');
    $cl->remarks=$request->input('remarks');
    $cl->save();

    return redirect('/personnel_courses');
}

public function deletecourseover($id){
    $delcos= CourseOver::find($id);
    $delcos->delete();

    return redirect('/personnel_courses');
}

public function editcourseover($id){
    $editcl= CourseOver::find($id);
    return view('admin.editcourseover',compact('editcl'));
}

public function updatenewcourseover($id,Request $request){
    $cl=CourseOver::find($id);
    
    $cl->category=$request->input('category');    
    $cl->rank= $request->input('rank');
    $cl->lname= $request->input('lname');
    $cl->fname= $request->input('fname');
    $cl->gender= $request->input('gender');
    $cl->service=$request->input('service');
    $cl->rank= $request->input('rank');
    $cl->lname= $request->input('lname');
    $cl->fname= $request->input('fname');
    $cl->gender= $request->input('gender');
    $cl->from=$request->input('from');
    $cl->to=$request->input('to');
    $cl->start_date=$request->input('start_date');
    $cl->end_date=$request->input('end_date');
    $cl->course=$request->input('course');
    $cl->remarks=$request->input('remarks');
    $cl->save();

    return redirect('/personnel_courses');
}

public function viewcourseover($id){
    $editcl= CourseOver::find($id);
    return view('admin.viewcourseoversea',compact('editcl'));
}


public function printallco(){
    $co=CourseOver::all();

    $pdf = new Dompdf();        
    $html = view('allcopdf', compact('co'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('courseoversea.pdf');
}



public function leave(){
    $leave= Leave::all();
    return view('admin.leave',compact('leave'));
}

public function add_leave(){
    return view('admin.addleave');
}

public function newleave(Request $request){
    $leave= new Leave();
    
    $leave->category=$request->input('category');
    $leave->personnel_id=$request->input('personnel_id');
    $leave->type=$request->input('type');
    $leave->start_date=$request->input('start_date');
    $leave->end_date=$request->input('end_date');
    $leave->approval=$request->input('approval');
    $leave->remarks=$request->input('remarks');
    $leave->reason=$request->input('reason');
    $leave->save();

    return redirect('/leave')->with('status','Leave assigned successfully');
}

public function delete_leave($id){
    $leave= Leave :: find($id);
    $leave->delete();

    return redirect('/leave')->with('status','Leave deleted successfully');
}

public function view_leave($id){
    $leave= Leave::find($id);

    return view('admin.viewleave',compact('leave'));
}

public function edit_leave($id){
    $leave= Leave::find($id);

    return view('admin.editleave',compact('leave'));
}

public function update_leave($id,Request $request){
    $leave= Leave::find($id);

   
    $leave->personnel_id=$request->input('personnel_id');
    $leave->type=$request->input('type');
    $leave->reason=$request->input('reason');
    $leave->start_date=$request->input('start_date');
    $leave->end_date=$request->input('end_date');
    $leave->approval=$request->input('approval');
    $leave->remarks=$request->input('remarks');
    $leave->save();

    return redirect('/leave')->with('status','Leave updated successfully');

}

public function printallleave(){
    $leave=Leave::all();

    $pdf = new Dompdf();        
    $html = view('allleavepdf', compact('leave'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');

    $pdf->render();

    return $pdf->stream('leave.pdf');
}

public function printallofficer()
{
    set_time_limit(120);
    $viewofficer = Officers::all()->where('status',0)->sortByDesc('id');
    
    $pdf = new Dompdf();        
    $html = view('allofficerpdf', compact('viewofficer'))->render();

    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    return $pdf->stream('officers.pdf');
}

public function recour(){
    $courses= Courses::all();
    return view('admin.recordcourse',compact('courses'));
}

// public function printcourserecord(Request $request){
//     $cse= $request->csename;
//     $recommend = $request->recommendation;
//     $category= $request->category;
//     $name = $request->name;
//     $status = $request->status;
//     $recommend =$request->recommend;

//     if(!isset($cse) && !isset($recommend)&& !isset($category)&& !isset($name)){
//         $pdf = new Dompdf();        
//     $html = view('courseprint')->render();

//     $pdf->loadHtml($html);
//     $pdf->setPaper('A4', 'portrait');
//     $pdf->render();

//     return $pdf->stream('course.pdf');
//     }
//     if(isset($cse) || isset($recommend) || isset($category) || isset($name)){
//     if(isset($cse) && !isset($recommend)&& isset($category)&& isset($name)){
//         $main= CourseLocal::where([['csename',$cse],['category', $category],['service',$name]]
        
//         )->get();
//         $pdf = new Dompdf();        
//     $html = view('courseprint',compact('main'))->render();

//     $pdf->loadHtml($html);
//     $pdf->setPaper('A4', 'portrait');
//     $pdf->render();

//     return $pdf->stream('course.pdf');
       
        

//     }
//     elseif(isset($cse) && !isset($recommend)&& isset($category)&& !isset($name)){

//         $main= CourseLocal::where('csename',$cse)->where('category', $category)->get();
//         $pdf = new Dompdf();        
//         $html = view('courseprint',compact('main'))->render();

//         $pdf->loadHtml($html);
//         $pdf->setPaper('A4', 'portrait');
//         $pdf->render();

//         return $pdf->stream('course.pdf');
//     }

//     // $pdf = new Dompdf();        
//     // $html = view('allcopdf', compact('co'))->render();

//     // $pdf->loadHtml($html);
//     // $pdf->setPaper('A4', 'portrait');
//     // $pdf->render();

//     // return $pdf->stream('courseoversea.pdf');
// }


public function csereport(Request $request){

    $cse= $request->csename;
    $recommend = $request->recommendation;
    $category= $request->category;
    $name = $request->name;
    $status = $request->status;
    $recommend =$request->recommend;
         
    

    
    if(!isset($cse) && !isset($recommend)&& !isset($category)&& !isset($name)){
        return redirect('recour')->with('status','Select two or more fields!');  
       
    }

    if (empty($cse) + empty($recommend) + empty($category)+ empty($name) == 3) {
            
        return redirect('recour')->with('status','Select two or more fields!');  
    }else{
     
        if(isset($cse) && !isset($recommend)&& isset($category)&& isset($name)){
            $main= CourseLocal::where([['csename',$cse],['category', $category],['personnel_id',$name]]
            )->get();
            return view('admin.csereport',compact('main'));
        }

        elseif(isset($cse) && !isset($recommend)&& isset($category)&& !isset($name)){
            $main= CourseLocal::where('csename',$cse)->where('category', $category)->get();
            return view('admin.csereport',compact('main'));
        }

        elseif(!isset($cse) && !isset($recommend)&& isset($category)&& isset($name)){
            $main= CourseLocal::where('personnel_id',$name)->where('category', $category)->get();
            return view('admin.csereport',compact('main'));
        }

        elseif(isset($cse) && isset($recommend)&& isset($category)&& isset($name)){
            $main=DB::table($category)->where('personnel_id',$name)->where('recommendation', $cse)->get();
            return view('admin.diffcse',compact('main'));
        }

        
        elseif(!isset($cse) && isset($recommend)&& isset($category)&& !isset($name)){

            $main=DB::table($category)->where('recommendation','!=', null)->get();
            return view('admin.diffcse',compact('main'));
        } 
        elseif(isset($cse) && isset($recommend)&& isset($category)&& !isset($name)){

            $main=DB::table($category)->where('recommendation','%LIKE%',$cse)->get();
            return view('admin.diffcse',compact('main'));
        } elseif(!isset($cse) && isset($recommend)&& isset($category)&& isset($name)){

            $main=DB::table($category)->where('id',$name)->where('recommendation','!=',null)->get();
            return view('admin.diffcse',compact('main'));
        } 
        
    }
    
}



public function snrroll(Request $request){
    $roll = DB::table($request->category)->Orderby('lops_departure', 'ASC')->Orderby('service', 'ASC')->get();
    return view('admin.recordoperation', compact('roll'));
}
public function reope(){
    return view('admin.recordoperation');
}

 public function repos(){
     return view('admin.recordposting');
}

public function printcsereport(Request $request){
    $cse= $request->csename;
    $recommend = $request->recommendation;
    $category= $request->category;
    $name = $request->name;
    $status = $request->status;
    $recommend =$request->recommend;

    if(!isset($cse) && !isset($recommend)&& !isset($category)&& !isset($name)){
        return view('csereportpdf');
    }

    if(isset($cse) || isset($recommend) || isset($category) || isset($name)){

    if(isset($cse) && !isset($recommend)&& isset($category)&& isset($name)){
        $main= CourseLocal::where([['csename',$cse],['category', $category],['service',$name]])->get();
        $pdf = new Dompdf(); 
        $html = view('csereportpdf')->render();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        return $pdf->stream('course.pdf');
    }
    
    elseif(isset($cse) && !isset($recommend)&& isset($category)&& !isset($name)){

        $main= CourseLocal::where('csename',$cse)->where('category', $category)->get();
        $pdf = new Dompdf(); 
        $html = view('csereportpdf');
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');

        $pdf->render();

        return $pdf->stream('course.pdf');
    }


    elseif(!isset($cse) && !isset($recommend)&& isset($category)&& isset($name)){

        $main= CourseLocal::where('personnel_id',$name)->where('category', $category)->get();
        $pdf = new Dompdf(); 
        // $html = view('csereportpdf');
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');

        $pdf->render();

        return $pdf->stream('course.pdf');
        }


    elseif(isset($cse) && isset($recommend)&& isset($category)&& isset($name)){

        $main=DB::table($category)->where('personnel_id',$name)->where('recommendation', $cse)->get();
        return view('admin.diffcse',compact('main'));
    }

    
    elseif(!isset($cse) && isset($recommend)&& isset($category)&& !isset($name)){

        $main=DB::table($category)->where('recommendation','!=', null)->get();
        return view('admin.diffcse',compact('main'));
    } 
    
    }
}

}
