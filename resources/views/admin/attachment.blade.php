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
                            <li class="breadcrumb-item"><a href="#!">Attachments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ task-list ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Attachments</h5> 
                        <a href="{{url('/printallattach')}}"><button class="btn btn-primary" style="border-radius:200px;width:150px;background-color:#c2a024"><b>Print All</b></button></a> 
                        <a href="{{url('/post')}}" style="float:right;"><b>Add new +</b></a>
                    </div>
                    <div class="card-body task-data">
                        <div class="table-responsive form-material">
                            <table id="simpletable" class="table dt-responsive task-list-table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Service #</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Posted Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page">  
									@foreach($attach as $attach)                                  
                                    <tr>
                                        <td><b>{{$attach->service}}</b></th>
											<td>{{$attach->posted_from}}</td>
											<td>{{$attach->posted_to}}</td>
                                        <td>{{$attach->posted_date}}</td>
                                        <td><a href="#" onclick="confirmDelete('{{url('/delete-attachment/'.$attach->id)}}')" style="color:red;"><i class="fa fa-trash"></i></a>
                                            <a href="{{url('/view-attachment/'.$attach->id)}} " style="color:blue;"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('/edit-attachment/'.$attach->id)}}" style="color:black;"><i class="fa fa-edit"></i></td>
                                        </td>
                                    </tr>
									@endforeach

                                    <script>
                                        function confirmDelete(url) {
                                            if (confirm("Are you sure you want to delete this attachment?")) {
                                                window.location.href = url;
                                            }
                                        }
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
@endsection