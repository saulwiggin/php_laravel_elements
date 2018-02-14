<!DOCTYPE html>
</body>
</html>
<html>
<header>
<!-- <link src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js'></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link src="bootstrap.css" rel="stylesheet">
<script src="bootstrap-prettyfile.js"></script>

</header>
<body>
  <img src='background_subpage.jpg'  style='    width: 100%;
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
          <form action="upload.php" method="post" enctype="multipart/form-data">
              <input style='margin-top:10px;'type="file" name="fileToUpload" id="fileToUpload">
              <input class='btn btn-default' style='margin-top:10px;'type="submit" value="Upload" name="submit">
              <h4 style='margin-top:10px;'> Please Attach Your Name So We Know Who You Are. </h4>
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
