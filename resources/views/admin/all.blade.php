@extends('admin.layout.header')
@section('headers')

<main class="bg-white-300 flex-1 p-3 overflow-hidden">


<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl">Overall Records<input type="text" style="float:right;" id="myInput" onkeyup="myFunction()" placeholder="Search by service number" title="Type in a serial">

                                <div class="flex items-center border-b border-b-1 border-red-500 py-2">
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-grey-darkest" id="myTable">
                                    <thead class="bg-grey-dark text-white text-normal">
                                    <tr>
                                        <th scope="col">Officers</th >
                                        <th scope="col">Other Ranks</th>
                                        <th scope="col">Civilians</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($officer as $index => $officer)
                                          <tr>
                                              <td>{{ $officer->rank }} {{ $officer->lname }} {{ $officer->fname }}</td>
                                              <td>{{ isset($rank[$index]) ? $rank[$index]->rank . ' ' . $rank[$index]->lname . ' ' . $rank[$index]->fname : '-' }}</td>
                                              <td>{{ isset($civilian[$index]) ? $civilian[$index]->rank . ' ' . $civilian[$index]->lname . ' ' . $civilian[$index]->fname : '-' }}</td>
                                          </tr>
                                      @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /card -->

                    </div>
</main>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
@endsection
@include('admin.layout.footer')