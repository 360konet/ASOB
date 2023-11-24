<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;


class UserPermissionController extends Controller
{
    public function __construct(){
    //
    $this->middleware('permission:users_list|users_create|users_edit|users_delete', ['only' => ['users','add_user']]);
    $this->middleware('permission:users_create', ['only' => ['adduser','add_user']]);
    $this->middleware('permission:users_edit', ['only' => ['edituserrole','changeuserrole']]);
    $this->middleware('permission:users_delete', ['only' => ['deleteuser']]);

    $this->middleware('permission:roles_list|roles_create|roles_edit|roles_delete', ['only' => ['roles','add_role']]);
    $this->middleware('permission:roles_create', ['only' => ['addrole','add_role']]);
    $this->middleware('permission:roles_edit', ['only' => ['edituserrole','changerole']]);
    $this->middleware('permission:roles_delete', ['only' => ['deleterole']]);
    }

    public function users(){
        $users= User::with('roles')->get();
        return view ('admin.users.users',compact('users'));
    }

    public function adduser(){
        $roles= Role::all();

        return view ('admin.users.adduser',compact('roles'));
        
    }

    public function deleteuser($id){
        $removeuser= User::findOrFail($id);
        $removeuser->delete();

        return redirect('/users');
    }

    public function add_user(Request $request){

        $request->validate([
            'svc_no'=>'required',
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'roles'=>'required'
        ]);

        $user = User::create([
            'svc_no'=>$request->input('svc_no'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ]);
        $roles = $request->input('roles');
        $user->assignRole($roles);

        return redirect ('/users');
    }

    public function roles(){
        $rolesandpermissions= Role::with('permissions')->get();
         
        return view ('admin.roles.roles',['rolesandpermissions'=>$rolesandpermissions]);
    }

    public function addrole(){
        return view ('admin.roles.addrole');
    }

    public function add_role(Request $request)
    {
        $validatedData = $request->validate([
            'role_name' => 'required|string|max:225|unique:roles,name',
            'permissions' => 'array',
        ]);
    
        try {
            DB::beginTransaction();
    
            $role = Role::create([
                'name' => $validatedData['role_name'],
            ]);
    
            if ($request->has('permissions') && is_array($validatedData['permissions'])) {
                $permissionsToAdd = array_filter($validatedData['permissions'], function ($permissionId) {
                    return is_numeric($permissionId);
                });
    
                $permissions = Permission::whereIn('id', $permissionsToAdd)->get();
                $role->givePermissionTo($permissions);
            }
    
            DB::commit();
    
            return redirect('/roles')->with('success', 'Role and permissions added successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle the exception, log errors, etc.
            return redirect('/roles')->with('error', 'An error occurred while adding role and permissions.');
        }
    }

    public function editrole($id){
        $role= Role::findOrFail($id);
        $permissions = Permission::all();
        return view('admin.roles.editrole',compact('role','permissions'));

    }

    public function changerole(Request $request,$id){
        $role= Role::findOrFail($id);
        $request->validate([
            'role_name'=>'required|unique:roles,name,'. $role->id,
            'permissions'=>'array',
        ]);

        $role->name = $request->input('role_name');
        $role->save();

        $role->syncPermissions($request->input('permissions'));

        return redirect('/roles');

    }

    public function deleterole(Request $request,$id){
         $role=Role::findOrFail($id);
         $role->users()->detach();
         $role->delete();
         return redirect('/roles');
    }

    public function edituserrole($id){
        $user= User::find($id);
        $roles= Role::all();
        $userRoles=$user->roles->pluck('id')->toArray();;
        return view ('admin.users.edituserrole',compact('user','roles','userRoles'));
    }

    public function changeuserrole($id, Request $request) {
        $user = User::findOrFail($id);
        $newRoles=$request->input('roles',[]);
        
        $user->syncRoles($newRoles);
        return redirect('/users');
    }
    
}
