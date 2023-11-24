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
                            <li class="breadcrumb-item"><a href="#!">Soilders</a></li>
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
                        <h5>Soilders Board</h5><a href="{{url('/printallsoldier')}}"><button class="btn btn-primary" style="border-radius:200px;width:150px;background-color:#c2a024"><b>Print All</b></button></a> 
                     <a href="{{url('/addranks')}}" style="float:right;"><b>Add new +</b></a>
                    </div>
                    <div class="card-body task-data">
                        <div class="table-responsive form-material">
                            <table id="simpletable" class="table dt-responsive task-list-table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Svc Number</th>
                                        <th>Rank</th>
                                
										<th>Full Name</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page">   
                                @foreach($ranks as $index => $rank)                                 
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $rank->service }}</td>
        <td>{{ $rank->rank }}</td>
        <td>{{ $rank->fname }}</td>
        <td>{{ $rank->gender }}</td>
        <td>
            <a href="{{ url('/edit-rank/'.$rank->id) }}" style="color:black;"><i class="fas fa-edit"></i></a>
            <a href="{{ url('/view-rank/'.$rank->id.'/'.$rank->service) }}" style="color:blue;"><i class="fas fa-eye"></i></a>

            <!-- Prompt user before deleting -->
            <a href="#" style="color:red;" onclick="confirmDelete('{{ url('/delete-rank/'.$rank->id) }}')"><i class="fas fa-trash"></i></a>

            {{-- <a href="{{ url('/print-rank/'.$rank->id.'/'.$rank->id) }}" style="color:green;"><i class="fas fa-print"></i></a> --}}
        </td>
    </tr>
@endforeach

<script>
    function confirmDelete(url) {
        if (confirm("Are you sure you want to delete this soldier?")) {
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