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
                            <li class="breadcrumb-item"><a href="#!">Officer</a></li>
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
                        <h5>Officers Board</h5>
                        <a href="{{url('/printallofficer')}}"><button class="btn btn-primary" style="border-radius:200px;width:150px;background-color:#c2a024"><b>Print All</b></button></a> 
                        <a href="{{ url('/addofficers') }}" style="float:right;"><b>Add new +</b></a>
                    </div>
                    <div class="card-body task-data">
                        <div class="table-responsive form-material">
                            <table id="simpletable" class="table dt-responsive task-list-table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Svc Number</th>
                                        <th>Rank</th>
                                        <th>Name</th>
										<th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page">
                                @foreach($officers as $index => $officer)   
                                    @if($officer->status==1)                              
                                    <tr style = "background:#e7eda6">
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $officer->service }}</td>
                                        <td>{{ $officer->rank }}</td>
                                        <td>{{ $officer->fname }}</td>
                                        <td>{{ $officer->gender }}</td>
                                        <td>
                                            <a href="{{ url('/edit-officer/'.$officer->id) }}" style="color:black;"><i class="fas fa-edit"></i></a>
                                            <a href="{{ url('/view-officer/'.$officer->id.'/'.$officer->id) }}" style="color:blue;"><i class="fas fa-eye"></i></a>

                                            <!-- Prompt user before deleting -->
                                            <a href="#" style="color:red;" onclick="confirmDelete('{{ url('/delete-officer/'.$officer->id) }}')"><i class="fas fa-trash"></i></a>

                                            {{-- <a href="{{ url('/print-officer/'.$officer->id.'/'.$officer->id) }}"><i class="fas fa-print"></i></a> --}}
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $officer->service }}</td>
                                        <td>{{ $officer->rank }}</td>
                                        <td>{{ $officer->fname }}</td>
                                        <td>{{ $officer->gender }}</td>
                                        <td>
                                            <a href="{{ url('/edit-officer/'.$officer->id) }}" style="color:black;"><i class="fas fa-edit"></i></a>
                                            <a href="{{ url('/view-officer/'.$officer->id.'/'.$officer->id) }}" style="color:blue;"><i class="fas fa-eye"></i></a>

                                            <!-- Prompt user before deleting -->
                                            <a href="#" style="color:red;" onclick="confirmDelete('{{ url('/delete-officer/'.$officer->id) }}')"><i class="fas fa-trash"></i></a>

                                            {{-- <a href="{{ url('/print-officer/'.$officer->id.'/'.$officer->id) }}"><i class="fas fa-print"></i></a> --}}
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach

<script>
    function confirmDelete(url) {
        if (confirm("Are you sure you want to delete this officer?")) {
            window.location.href = url;
        }
    }
</script>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
        <!-- [ Main Content ] end -->
    @endsection