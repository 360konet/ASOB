<style>
    .table-container {
  position: relative;
}

table {
  width: 100%;
  border-collapse: collapse;
  border: none;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.header-row {
  background-color: #454B1B; 
  color: #fff;
}

.header-row th {
  padding: 16px;
  font-size: 20px;
  text-align: center;
}

.watermark {
  position: fixed; 
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(-45deg);
  font-size: 200px;
  opacity: 0.1;
  pointer-events: none;
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
<table class="table">
  <p> <?php echo "As at : " . date("Y-m-d") . "<br>";?> </p>
    <tr>
      <th colspan="9"><center><b><u>NOMINAL ROLL FOR OPERATION</u></b></center></th>
    </tr>
    <tr>
      
        <th><b>Service</b></th>
        <th><b>Rank</b></th>
        <th><b>Last Name</b></th>
        <th><b>First Name</b></th>
        <th><b>Location</b></th>
        <th><b>End Date</b></th>
        <th><b>Title</b></th>
    </tr>
    @foreach($co as $co)
    <tr>
      <td style="font-size: 13px">{{$co->service}}</td>
      <td style="font-size: 13px">{{$co->rank}}</td>
      <td style="font-size: 13px">{{$co->lname}}</td>
      <td style="font-size: 13px">{{$co->fname}}</td>
      <td style="font-size: 13px">{{$co->to}}</td>
      <td style="font-size: 13px">{{$co->end_date}}</td>
      <td style="font-size: 13px">{{$co->course}}</td>
    </tr>
    @endforeach
  </table>
  <div class="watermark">ASOB</div>
</div>
