<style>
    .table-container {
  position: relative;
}

table {
  width: 100%;
  border-collapse: collapse;
  
}

table,th,td{
  border: 1px solid black;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid black;
  /* border: 1px solid black; */
}




.watermark {
        position: fixed; 
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        font-size: 200px;
        opacity: 0.01;
        pointer-events: none;
        z-index: 1000; 
      }



</style>

 <?php
$imagePath = 'armylogo.png';
$imageData = base64_encode(file_get_contents($imagePath));
?>
<div class="table-container">
<img src="data:image/png;base64,<?php echo $imageData; ?>" height="60px" width="75px" alt="Image">

<?php
$imagePath = 'asob.png';
$imageDatas = base64_encode(file_get_contents($imagePath));
?>
<img style="float:right" src="data:image/png;base64,<?php echo $imageDatas; ?>" height="75px" width="75px" alt="Image">
<br>
<br>
<br>


<p> <?php echo "As at : " . date("Y-m-d") . "<br>";?>
<center><b><u>OPERATIONS</u></b></center>
</p><br><br>

<table class="table table-stripped ">

    <!-- <tr>
      <th colspan="12"><center><b><u>NOMINAL ROLL FOR SOLDIERS</u></b></center></th>
    </tr> -->
    <thead>
      <tr>
        
          <th><b>SRL</b></th>
          <th><b>SVC NO</b></th>
          <th><b>RANK</b></th>
          <th><b>NAME</b></th>
          
          <th><b>OPERATION</b></th>
          <th><b>LOCATION</b></th>
          <th><b>APPOINTMENT</b></th>
          <th><b>PERIOD</b></th>

      </tr>
    </thead>
    <tbody>
    
      @foreach($un as $index => $un)
    
      <tr>
      
        <td style="font-size: 13px">{{$index + 1}}</td>
        <td style="font-size: 13px">{{$rank = \Illuminate\Support\Facades\DB::table($un->category)->where('id',$un->personnel_id)->value('service')}}</td>
        <td style="font-size: 13px">{{$rank = \Illuminate\Support\Facades\DB::table($un->category)->where('id',$un->personnel_id)->value('rank')}}</td>
        <td style="font-size: 13px">{{$name = \Illuminate\Support\Facades\DB::table($un->category)->where('id',$un->personnel_id)->value('fname')}}</td>
   
        <td style="font-size: 13px">{{$un->operation}}</td>
        <td style="font-size: 13px">{{$un->location}}</td>
        <td style="font-size: 13px">{{$un->appointment}}</td>
         <td style="font-size: 13px">{{$un->departure_date}} - {{$un->arrival_date}}</td>
       
       
      </tr>
       <div class="watermark">ASOB</div>
      @endforeach
  </tbody>
  </table>
</div>



