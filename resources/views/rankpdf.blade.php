<!DOCTYPE html>
<html>
<head>
  <title>Summary Report</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f6f6f6;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    .card {
      background-color: #ffffff;
      border: 1px solid #dddddd;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
    }
    .card-header {
      border-bottom: 1px solid #dddddd;
      padding-bottom: 10px;
      margin-bottom: 10px;
      font-weight: bold;
    }
    .details {
      margin-bottom: 20px;
    }
    .details p {
      margin: 5px 0;
    }
    .button-container {
      text-align: center;
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #52ad9c;
      color: #ffffff;
      text-decoration: none;
      border-radius: 5px;
    }
    .header-row {
  background-color: #454B1B; /* Change to the desired header color */
  color: #fff; /* Text color for header row */
}

.watermark {
  position: fixed; 
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(-45deg);
  font-size: 200px;
  opacity: 0.1;
  pointer-events: none;
  z-index: 1000; /* Adjust the z-index if necessary */
}


  </style>
</head>
<body>

<center><?php
$imagePath = 'assets/images/logo.png';
$imageData = base64_encode(file_get_contents($imagePath));
?>
<img src="data:image/png;base64,<?php echo $imageData; ?>" height="100px" width="100px" alt="Image">
</center>

  <h2 class="header-row "><center>Summary Report</center></h2>
  <center><?php
$imagePath = public_path('ranks/'.$viewranks->image);
$profile = base64_encode(file_get_contents($imagePath));
?> 
<img src="data:image/png;base64,<?php echo $profile; ?>" style="border-radius:100px;" height="100px" width="100px" alt="Image">
</center>
  <div class="container">
    <div class="card">
      <div class="card-header" class="header-row">Official Details</div>
      <div class="details">
        <p><strong>Date Of Passout:</strong> {{$viewranks->passout}}</p>
        <p><strong>Date Of Last Promotion:</strong> {{$viewranks->promotion}}</p>
        <p><strong>Service Number :</strong> {{$viewranks->service}}</p>
        <p><strong>Rank:</strong> {{$viewranks->rank}}</p>
      </div>
    </div>

    <div class="card">
      <div class="card-header" class="header-row">Personal Details</div>
      <div class="details">
        <p><strong>First Name:</strong> {{$viewranks->fname}}</p>
        <p><strong>Last Name:</strong> {{$viewranks->lname}}</p>
        <p><strong>Date of Birth :</strong> {{$viewranks->dob}}</p>
        <p><strong>Blood Group:</strong> {{$viewranks->blood}}</p>
        <p><strong>Home Town:</strong> {{$viewranks->hometown}}</p>
        <p><strong>Home Region:</strong> {{$viewranks->region}}</p>
        <p><strong>Nationality:</strong> {{$viewranks->nationality}}</p>
      </div>
    </div>

    <div class="card">
      <div class="card-header" class="header-row">Military Operations</div>
      <div class="details">
        <p><strong>UN Operations:</strong> {{$viewranks->un}}<br>
                                            @if ($operation)
                                            {{$operation->service}},{{$operation->appointment}}
                                            @endif</p>
        <p><strong>Internal Operations:</strong> {{$viewranks->military}}<br>
                                            @if ($loperation)
                                            {{$loperation->service}},{{$loperation->appointment}}
                                            @endif</p>
      </div>
    </div>

    <div class="card">
      <div class="card-header" class="header-row">Marital Details</div>
      <div class="details">
        <p><strong>Spouse name:</strong> {{$viewranks->spouse}}</p>
        <p><strong>Spouse Contact:</strong> {{$viewranks->sphone}}</p>
      </div>
    </div>

    <div class="card">
      <div class="card-header" class="header-row">Next Of Kin</div>
      <div class="details">
        <p><strong>Name:</strong> {{$viewranks->kin}}</p>
        <p><strong>Relation:</strong> {{$viewranks->relation}}</p>
        <p><strong>Contact:</strong> {{$viewranks->kphone}}</p>
      </div>
    </div>

    <div class="card">
      <div class="card-header" class="header-row ">Courses</div>
      <div class="details">
        <p><strong>Local:</strong>@if ($lcourse)
                                            {{$lcourse->course}},{{$lcourse->to}}
                                            @endif</p>
        <p><strong>Oversea:</strong>  @if ($ocourse)
                                            {{$ocourse->course}},{{$ocourse->to}}
                                            @endif</p>
      </div>
  </div>

  <div class="watermark">ASOB</div>

</body>
</html>
