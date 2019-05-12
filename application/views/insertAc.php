<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
</nav>
<div class="text-center"  style="padding:10px;">
<h2>เพิ่มกิจกรรม</h2>
</div>
<br>
<div class="container">
<form action="<?php echo site_url('ActivityController/insertActivity') ?>" method="post" class="needs-validation" novalidate>
  <div class="form-group">
    <label for="activityName">ชื่อกิจกรรม:</label>
    <input type="text" class="form-control" id="activityName" name="activityName" aria-describedby="emailHelp" placeholder="" required>
    <div class="invalid-feedback">
          กรอกชื่อกิจกรรม
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">รายละเอียดกิจกรรม:</label>
    <input type="textarea" class="form-control" id="activityDetail" name="activityDetail" placeholder="" required>
  </div>
  <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" name="startDate" required/>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" name="endDate" required/>
                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker();
            });
        </script>
    </div>
  
  ชั้นปีที่เข้าร่วม :<div class="custom-control custom-checkbox">
  <input type="checkbox"  id="customCheck1" name="studentYear[]" value="1">
  <label>ชั้นปีที่1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="checkbox" id="customCheck2" name="studentYear[]" value="2">
  <label>ชั้นปีที่2</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="checkbox" id="customCheck3" name="studentYear[]" value="3">
  <label >ชั้นปีที่3</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="checkbox" id="customCheck4" name="studentYear[]" value="4">
  <label>ชั้นปีที่4</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <input type="checkbox" id="customCheck5" name="studentYear[]" value="5">
  <label>ชั้นปีที่5</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="checkbox"  id="customCheck6" name="studentYear[]" value="6">
  <label>ชั้นปีที่6</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="checkbox" id="customCheck7" name="studentYear[]" value="7">
  <label>ชั้นปีที่7</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="checkbox" id="customCheck8" name="studentYear[]" value="8">
  <label>ชั้นปีที่8</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>

  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">ปีการศึกษา:</label>
    <input type="text" class="form-control" id="year" name="year" placeholder="" required>
  </div><div class="form-group">
    <label for="exampleInputPassword1">เทอม:</label>
    <input type="text" class="form-control" id="term" name="term" placeholder="" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>

