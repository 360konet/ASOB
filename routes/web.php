<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserPermissionController;
use App\Http\Controllers\CoursesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send', [HomeController::class, 'assignPermissions']);


Auth::routes();

// Route::middleware(['auth'])->group(function()
// {


    
    

     
     Route::get('/adduser',[UserPermissionController::class,'adduser']);
     Route::post('/add-user',[UserPermissionController::class,'add_user']);




    Route::get('/roles',[UserPermissionController::class,'roles']);


    
    Route::get('/addrole',[UserPermissionController::class,'addrole']);
    Route::post('/add-role',[UserPermissionController::class,'add_role']);



    // Route::get('/addrole',[UserPermissionController::class,'addrole']);


    Route::get('/assign-user-role-{id}',[UserPermissionController::class,'assignuserrole']);
    Route::post('/activate-user-{id}',[UserPermissionController::class,'activaterole']);


    

    Route::get('/officers-portal',[HomeController::class,'officers_portal']);


    Route::get('/addofficers', [HomeController::class, 'addofficers']);


    Route::post('/add-officers', [HomeController::class, 'add_officers']);

   
    Route::get('/delete-officer/{id}', [HomeController::class, 'deleteofficers']);
   

    Route::get('/view-officer/{id}/{service}', [HomeController::class, 'viewofficers']);


    Route::get('/edit-officer/{id}', [HomeController::class, 'editofficers']);

    Route::put('/officeredit/{id}', [HomeController::class, 'officersedit']);

    // Route::get('/print-officer/{id}/{service}', [HomeController::class, 'printofficer']);



    Route::get('/ranks-portal',[HomeController::class,'ranks']);



    Route::get('/addranks',[HomeController::class,'addranks']);

    Route::post('/add-ranks', [HomeController::class, 'add_ranks']);


    Route::get('/delete-rank/{id}', [HomeController::class, 'deleteranks']);


    Route::get('/view-rank/{id}/{service}', [HomeController::class, 'viewranks']);

    Route::get('/edit-rank/{id}', [HomeController::class, 'editranks']);


    Route::put('/rankedit/{id}', [HomeController::class, 'rankedit']);

    // Route::get('/print-rank/{id}/{service}', [HomeController::class, 'printrank']);




    // Route::get('/civilians-portal',[HomeController::class,'civilians']);
    // Route::get('/addcivilians',[HomeController::class,'addcivilians']);
    // Route::post('/add-civilians',[HomeController::class,'add_civilians']);
    // Route::get('/delete-civilian/{id}', [HomeController::class, 'deletecivilians']);
    // Route::get('/view-civilian/{id}/{service}', [HomeController::class, 'viewcivilians']);
    // Route::get('/edit-civilian/{id}', [HomeController::class, 'editcivilians']);
    // Route::put('/civilianedit/{id}', [HomeController::class, 'civilianedit']);
    // Route::get('/print-civilian/{id}/{service}', [HomeController::class, 'printcivilian']);



    Route::get('/attachments', [HomeController::class, 'attachments']);

    Route::get('/post', [HomeController::class, 'post']);
    Route::post('/addpost', [HomeController::class, 'addpost']);
    
    //Route::post('/addpost', [HomeController::class, 'addpost']);

    Route::get('/delete-attachment/{id}',[HomeController::class,'deletepost']);
    Route::get('/view-attachment/{id}',[HomeController::class,'viewattachment']);
    Route::get('/edit-attachment/{id}',[HomeController::class,'editattachment']);
    Route::post('/update-attach/{id}',[HomeController::class,'updateattachment']);


    Route::get('/un', [HomeController::class, 'operations']);
    Route::get('/addoperations', [HomeController::class, 'addoperations']);
    Route::post('/addnewoperation', [HomeController::class, 'addnewoperation']);
    Route::get('/delete-operation/{id}', [HomeController::class, 'deleteoperation']);

    Route::get('/edit-operation/{id}', [HomeController::class, 'editoperation']);
    Route::post('/updateoperation/{id}', [HomeController::class, 'updateoperation']);
    Route::get('/view-operation/{id}', [HomeController::class, 'viewoperation']);


    Route::get('/local',[HomeController::class,'local']);
    Route::get('/local-form',[HomeController::class,'localform']);
    Route::post('/addlocal',[HomeController::class,'addlocal']);
    Route::get('/delete-internal/{id}', [HomeController::class, 'deleteinternal']);

    Route::get('/edit-internal/{id}', [HomeController::class, 'editinternal']);
    Route::post('/updateinternal/{id}', [HomeController::class, 'updateinternal']);
    Route::get('/view-internal/{id}', [HomeController::class, 'viewinternal']);



    Route::get('/get-officer-data',[HomeController::class,'getOfficerData']);
    Route::get('/get-rank-data',[HomeController::class,'getRankData']);
    Route::get('/get-civilian-data',[HomeController::class,'getCivilianData']);

    Route::get('/total',[HomeController::class,'overall']);

    Route::get('/deployment',[HomeController::class,'deployment']);
    Route::get('/add-deployment',[HomeController::class,'adddeployment']);
    Route::post('/adddep',[HomeController::class,'adddeploy']);
    Route::get('/delete-deploy/{id}',[HomeController::class,'deldeployment']);
    Route::get('/view-deploy/{id}',[HomeController::class,'viewdeployment']);

    Route::get('/edit-deploy/{id}',[HomeController::class,'editdeployment']);
    Route::post('/update-deploy/{id}',[HomeController::class,'updatedeployment']);


    Route::get('/personnel_courses',[HomeController::class,'courselocal']);
   


    Route::get('/add-local-course',[HomeController::class,'addcourselocal']);

    Route::post('/add-new-course-local',[HomeController::class,'addnewcourselocal']);


    Route::get('/edit-course-local/{id}',[HomeController::class,'editcourselocal']);

    Route::post('/update-course-local/{id}',[HomeController::class,'updatenewcourselocal']);


    Route::get('/view-course-local/{id}',[HomeController::class,'viewcourselocal']);


    Route::get('/delete-course-local/{id}',[HomeController::class,'deletecourselocal']);



    // Route::get('/courseover',[HomeController::class,'courseover']);
    // Route::get('/add-course-oversea',[HomeController::class,'addcourseover']);
    // Route::post('/add-new-course-over',[HomeController::class,'addnewcourseover']);
    // Route::get('/edit-course-over/{id}',[HomeController::class,'editcourseover']);
    // Route::get('/view-course-over/{id}',[HomeController::class,'viewcourseover']);
    // Route::get('/delete-course-over/{id}',[HomeController::class,'deletecourseover']);
    // Route::post('/update-course-over/{id}',[HomeController::class,'updatenewcourseover']);


    Route::get('/leave',[HomeController::class,'leave']);
   

    
    Route::get('/add-leave',[HomeController::class,'add_leave']);

    Route::post('/add-new-leave',[HomeController::class,'newleave']);

    
    Route::get('/edit-leave/{id}',[HomeController::class,'edit_leave']);

    Route::post('/update-leave/{id}',[HomeController::class,'update_leave']);

    
    Route::get('/view-leave/{id}',[HomeController::class,'view_leave']);

    
    Route::get('/delete-leave/{id}',[HomeController::class,'delete_leave']);





    Route::get('/printallofficer',[HomeController::class,'printallofficer']);
    Route::get('/printallsoldier',[HomeController::class,'printallsoldier']);
    Route::get('/printallcivilian',[HomeController::class,'printallcivilian']);
    Route::get('/printallun',[HomeController::class,'printallun']);
    Route::get('/printalllocal',[HomeController::class,'printalllocal']);
    Route::get('/printallattach',[HomeController::class,'printallattach']);
    Route::get('/printallposting',[HomeController::class,'printallposting']);
    Route::get('/printallcl',[HomeController::class,'printallcl']);
    Route::get('/printallco',[HomeController::class,'printallco']);
    Route::get('/printallleave',[HomeController::class,'printallleave']);


    Route::get('/recour',[HomeController::class,'recour']);
  
    Route::get('/findcourse',[HomeController::class,'csereport']);
    Route::get('/findanothercourse',[HomeController::class,'anothercsereport']);
    Route::get('/printcourserecord',[HomeController::class,'printcourserecord']);

    
    Route::get('/reope',[HomeController::class,'reope']);
   

    
    Route::get('/snrroll',[HomeController::class,'snrroll']);
 

    
    Route::get('/repos',[HomeController::class,'repos']);
   

    Route::resource('courses', 'App\Http\Controllers\CoursesController');


    Route::get('/delete/course/{id}',[CoursesController::class,'deletecourse']);
    

    Route::get('/printcsereport',[HomeController::class,'printcsereport']);



    Route::get('/users',[UserPermissionController::class,'users']);


    Route::get('/adduser',[UserPermissionController::class,'adduser']);
    

    Route::post('/add-user',[UserPermissionController::class,'add_user']);


    Route::get('/edit-user-role-{id}',[UserPermissionController::class,'edituserrole']);
   
    Route::put('/change-user-role-{id}',[UserPermissionController::class,'changeuserrole']);

    Route::get('/delete-user-{id}',[UserPermissionController::class,'deleteuser']);



    Route::get('/roles',[UserPermissionController::class,'roles']);
    

    // Route::get('/addrole',[UserPermissionController::class,'addrole']);

        Route::get('/addrole',[UserPermissionController::class,'addrole']);

    Route::post('/add-role',[UserPermissionController::class,'add_role']);

    Route::get('/edit-role-{id}',[UserPermissionController::class,'editrole']);
    
    Route::put('/change-role-{id}',[UserPermissionController::class,'changerole']);

    Route::get('/delete-role-{id}',[UserPermissionController::class,'deleterole']);
   




// });
