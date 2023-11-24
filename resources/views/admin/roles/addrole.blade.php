@extends('admin.layout.header')
@section('headers')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/roles')}}">Roles</a></li>
                            <li class="breadcrumb-item"><a href="#!">Add Role</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Role</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form method="POST" action="{{url('/add-role')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Role Name<b style="color:red;">*</b></label>
                                <input type="text" name="role_name" id="role_name" class="form-control" placeholder="Enter Role Name" required>
                            </div>

                            <div class="col-md-6">
                                <label>Permission<b style="color:red;">*</b></label>
                                

                                <br>
                                <label>Officer Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="officers_list" name="permissions[]" value="11">
                                    <label for="officers_list_permission">Officers_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="officers_create" name="permissions[]" value="12">
                                    <label for="officers_create_permission">Officers_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="officers_edit" name="permissions[]" value="13">
                                    <label for="officers_edit_permission">Officers_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="officers_delete" name="permissions[]" value="14">
                                    <label for="officers_delete_permission">Officers_delete</label>
                                </div>


                                <label>Soldier Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="soldiers_list" name="permissions[]" value="15">
                                    <label for="soldiers_list_permission">Soldiers_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="soldiers_create" name="permissions[]" value="16">
                                    <label for="soldiers_create_permission">Officers_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="soldiers_edit" name="permissions[]" value="17">
                                    <label for="soldiers_edit_permission">Soldiers_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="soldiers_delete" name="permissions[]" value="18">
                                    <label for="soldiers_delete_permission">Soldiers_delete</label>
                                </div>



                                <label>Course Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="courses_list" name="permissions[]" value="19">
                                    <label for="courses_list_permission">Courses_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="courses_create" name="permissions[]" value="20">
                                    <label for="courses_create_permission">Courses_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="courses_edit" name="permissions[]" value="21">
                                    <label for="courses_edit_permission">Courses_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="courses_delete" name="permissions[]" value="22">
                                    <label for="courses_delete_permission">Courses_delete</label>
                                </div>


                                 <label>Leave Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="leave_list" name="permissions[]" value="23">
                                    <label for="leave_list_permission">Leave_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="leave_create" name="permissions[]" value="24">
                                    <label for="leave_create_permission">Leave_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="leave_edit" name="permissions[]" value="25">
                                    <label for="leave_edit_permission">Leave_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="leave_delete" name="permissions[]" value="26">
                                    <label for="leave_delete_permission">Leave_delete</label>
                                </div>



                                <label>Course Report Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="course_report" name="permissions[]" value="27">
                                    <label for="course_report_permission">Course_report</label>
                                </div>


                                <label>Operation Report Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="operation_report" name="permissions[]" value="28">
                                    <label for="operation_report_permission">Operation_report</label>
                                </div>


                                <label>Postings Report Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="postings_report" name="permissions[]" value="29">
                                    <label for="postings_report_permission">Postings_report</label>
                                </div>


                                 <label>Users Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="users_list" name="permissions[]" value="30">
                                    <label for="users_list_permission">Users_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="users_create" name="permissions[]" value="31">
                                    <label for="users_create_permission">Users_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="users_edit" name="permissions[]" value="32">
                                    <label for="users_edit_permission">Users_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="users_delete" name="permissions[]" value="33">
                                    <label for="users_delete_permission">Users_delete</label>
                                </div>



                                <label>Roles Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="roles_list" name="permissions[]" value="34">
                                    <label for="roles_list_permission">Roles_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="roles_create" name="permissions[]" value="35">
                                    <label for="roles_create_permission">Roles_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="roles_edit" name="permissions[]" value="36">
                                    <label for="roles_edit_permission">Roles_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="roles_delete" name="permissions[]" value="37">
                                    <label for="roles_delete_permission">Roles_delete</label>
                                </div>



                                <label>Confidential Report Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="confidential_report" name="permissions[]" value="38">
                                    <label for="confidential_report_permission">Confidential_report</label>
                                </div>


                                <label>Courses List</label>
                                <div class="form-group">
                                    <input type="checkbox" id="cselist_list" name="permissions[]" value="39">
                                    <label for="cselist_list_permission">Cselist_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="cselist_create" name="permissions[]" value="40">
                                    <label for="cselist_create_permission">Cselist_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="cselist_edit" name="permissions[]" value="41">
                                    <label for="cselist_edit_permission">Cselist_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="cselist_delete" name="permissions[]" value="42">
                                    <label for="cselist_delete_permission">Cselist_delete</label>
                                </div>

                                <label>Operations Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="operation_list" name="permissions[]" value="44">
                                    <label for="operation_list_permission">Operation_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="operation_create" name="permissions[]" value="45">
                                    <label for="operation_create_permission">Operation_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="operation_edit" name="permissions[]" value="46">
                                    <label for="operation_edit_permission">Operation_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="operation_delete" name="permissions[]" value="47">
                                    <label for="operation_delete_permission">Operation_delete</label>
                                </div>


                                <label>Postings Permissions</label>
                                <div class="form-group">
                                    <input type="checkbox" id="postings_list" name="permissions[]" value="48">
                                    <label for="postings_list_permission">Postings_list</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="postings_create" name="permissions[]" value="49">
                                    <label for="postings_create_permission">Postings_create</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="postings_edit" name="permissions[]" value=50">
                                    <label for="postings_edit_permission">Postings_edit</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="postings_delete" name="permissions[]" value="51">
                                    <label for="postings_delete_permission">Postings_delete</label>
                                </div>

                                
                               
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ form-element ] end -->
                </div>
                <!-- [ Main Content ] end -->
        @endsection
