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
  <img src='{{asset('img/background_subpage.jpg')}}' style=' margin-bottom:-60px;   width: 100%;
    margin-top: -100px;
    margin-left: -100px;'></img>
<div class='background-image' >
  <div class='row' style='margin:40px;  position: absolute;
    margin-top: 20px;'>
    <div class='col'>
      <div class="panel panel-default" style='width: 335;margin-top:-800px;margin-left:400px;'>
        <div class='panel panel-header'>
          <h2 style='font-family:GTWalsham_med;margin-left:12px'>  <img style='    height: 150px;
    margin: -40px;'src='{{asset('img/Nell_Logo_Main_CMYK.png')}}'> </h2>
        </div>
        <div class="panel-body">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class='form-group'>
             <label style='margin:5px;'> Already have your Genetic Information? </label><br>
             <label style='margin:5px;    margin-top: 5px;
    margin-left: 5px;
    margin-bottom: -10px;'> Upload Your Genome Here: </label><br>
              <!-- <label style='margin:5px;'> Please attach your name so we know who you are </label>
              <input style='margin:10px;'type="file" name="fileToUpload" id="fileToUpload">
              <input style='margin:10px;'type="submit" value="Upload" name="submit">  -->
              <a href='http://77.68.72.205/' class='btn btn-default' style='float: right;
    margin-top: -30px;'>Upload genome</a>
            </div>
            <hr>
            <div class='form-group form-inline'>
              <label style='margin:5px;'> Connect With your 23andme Data: </label>
              <a class='' style=' margin-bottom:5px'
                  href="https://api.23andme.com/authorize/?redirect_uri=http://localhost:8000/receive&response_type=code&client_id=a2e401e2dc7aa172df1b466597edcb8b&scope=basic names email genomes report:all rs1801131">
                <img style='height:40px;'src="{{asset('img/23andme_button.png')}}",  alt= "23andme"></a>
            </div>
            <hr>
            <br>
            <div class='form-group form-inline'>
              <label style='margin:5px;'> Early Membership Sign Up - Nell DNA Test: </label>
              <a class='btn btn-default' style="float:right"href='http://eepurl.com/djZ_tn'>Sign Up</a>
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
