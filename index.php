<!DOCTYPE html>
<html lang="en">
<head>


  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="global.js"></script>


  <style type="text/css">
    .abc {
      padding-top: 120px;
      padding-bottom: 90px;
      background: linear-gradient(
      45deg
      , #fbac7f, #e5658a);
      }

    .notfound {
      font-size: 45px;
      font-weight: bold;
      color: red;
    }

    .found {
      font-size: 45px;
      font-weight: bold;
      color: green;
    }
  </style>


</head>
<body>

<div class="jumbotron text-center abc">
  <h1>Check Armstrong Number</h1>
  <p>Armstrong number is a number that is equal to the sum of cubes of its digits</p> 
</div>

</br>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="number" id="inputtxt" max="9999999999" min="1" onkeyup="checkArmstrong();" class="form-control">
    </div>
    <div class="col-sm-3">
    </div>
  </div>

  </br>
  </br>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <center><span id="msg"></span></center>
    </div>
    <div class="col-sm-3">
    </div>
  </div>

</div>

</body>
</html>

