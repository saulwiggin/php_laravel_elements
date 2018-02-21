<!DOCTYPE html>
</body>
</html>
<html>
<header>
<!-- <link src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js'></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link src="{{asset('./css/app.css')}}" rel="stylesheet">
<script src="{{asset('./js/prettyjs.js')}}" ></script>

</header>
<body>
  <img src='{{asset('img/background_subpage.jpg')}}'  style='    width: 100%;
    margin-top: -100px;
    margin-left: -100px;'></img>
<div class='background-image' >
  <div class='row' style='margin:40px; margin-left: 450px;   position: absolute;
    top: 10;'>
    <div class='col'>
      <div class="panel panel-default" style='width: 335;margin-top:-800px;'>
        <div class='panel panel-header'>
          <h2 style='font-family:GTWalsham_med;margin-left:12px'>  Upload Your Genome </h2>
        </div>
        <div class="panel-body"style='width:400px;'>
          <form style='margin-top:-10px;'action="/uploadTxtFile" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p id='genetic_upload_firstname' style='font-family: walsheim;
            margin-top: 10px;
            margin-bottom: -10px;'>First Name: </p>
            <input style='margin-top:10px;'type="input" name="first_name" id="first_name">
            <p id='genetic_upload_lastname'style='font-family: walsheim;
            margin-top: 10px;
            margin-bottom: -10px;'> Last Name: </p>
            <input style='margin-top:10px;'type="input" name="last_name" id="last_name">
            <input style='margin-top:10px;'type="file" name="file" id="fileToUpload">
            <input class='btn btn-default' style='margin-top:10px;'type="submit" value="Upload" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
      $('input[type="file"]').prettyFile();
</script>

</body>
</html>
