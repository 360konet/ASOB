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
      <th colspan="9"><center><b><u>NOMINAL ROLL FOR ATTACHMENT</u></b></center></th>
    </tr>
    <tr>
      
        <th><b>Service</b></th>
        <th><b>Rank</b></th>
        <th><b>Last Name</b></th>
        <th><b>First Name</b></th>
        <th><b>Gender</b></th>
        <th><b>Attached To</b></th>
        <th><b>Arrival Date</b></th>
    </tr>
    @foreach($attach as $attach)
    <tr>
      <td style="font-size: 13px">{{$attach->service}}</td>
      <td style="font-size: 13px">{{$attach->rank}}</td>
      <td style="font-size: 13px">{{$attach->lname}}</td>
      <td style="font-size: 13px">{{$attach->fname}}</td>
      <td style="font-size: 13px">{{$attach->gender}}</td>
      <td style="font-size: 13px">{{$attach->posted_to}}</td>
      <td style="font-size: 13px">{{$attach->arrival_date}}</td>
    </tr>
    @endforeach
  </table>
  <div class="watermark">ASOB</div>
</div>
