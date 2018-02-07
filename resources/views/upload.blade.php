<!DOCTYPE html>
</body>
</html>
<html>
<header>
<!-- <link src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js'></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link src="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<script src="{{asset('bootstrap-prettyfile.js')}}"></script>

</header>
<body>
  <img src='{{asset('img/parts_of_nell.jpg')}}' style='    width: 100%;
    margin-top: -100px;
    margin-left: -100px;'></img>
<div class='background-image' >
  <div class='row' style='margin:40px; margin-left: 450px;   position: absolute;
    top: 10;'>
    <div class='col'>
      <div class="panel panel-default" style='width: 335;margin-top:-800px;'>
        <div class='panel panel-header'>
          <h2 style='font-family:GTWalsham_med;margin-left:12px'>  Nell </h2>
        </div>
        <div class="panel-body">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class='form-group'>
              <label style='margin:5px;'> Already have your Genetic Information? </label><br>
              <label style='margin:5px;'> Please attach your name so we know who you are </label>
              <input style='margin:10px;'type="file" name="fileToUpload" id="fileToUpload">
              <input style='margin:10px;'type="submit" value="Upload" name="submit">
            </div>
            <hr>
            <div class='form-group form-inline'>
              <label style='margin:5px;'> Connect With your 23andme Data </label>
              <a class='btn btn-default' style=' margin-bottom:5px'
                  href="https://api.23andme.com/authorize/?redirect_uri=http://localhost:8000/receive&response_type=code&client_id=a2e401e2dc7aa172df1b466597edcb8b&scope=basic names email genomes report:all">
                <img src="{{asset('img/23andme_button.png')}}",  alt= "23andme"></a>
            </div>
            <hr>
            <br>
            <div class='form-group form-inline'>
              <label style='margin:5px;'> Early sign up to Nell DNA Test </label>
              <a class='btn btn-default' href='http://eepurl.com/djZ_tn'>Sign Up Nell Test</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
      $('input[type="file"]').prettyFile();
</script>
<!-- <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us10.list-manage.com","uuid":"ee313111737481449bdf5d96a","lid":"ca936b3d30"}) })</script> -->
</body>
</html>
