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
<body style='    font-size: 12px;
    font-family: sans-serif;'>
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
             <label style='margin:5px;font-size: 25px; margin-top:-40px;
                 font-family: GTWalsham_med;'> Already have your Genetic Information? </label><br>
             <label style='margin:5px;
    margin-left: 5px;
    font-size: 18px; position:relative; top:-8px;
        font-family: GTWalsham_reg;'> Upload Your Txt File Here: </label><br>
              <!-- <label style='margin:5px;'> Please attach your name so we know who you are </label>
              <input style='margin:10px;'type="file" name="fileToUpload" id="fileToUpload">
              <input style='margin:10px;'type="submit" value="Upload" name="submit">  -->
              <a href='/my_genetics' class='btn btn-default' style='font-size: 15px; position:relative;width:200px;margin-left:10px;
        font-family: sans-serif;height:40'><span style='position:relative;left:-10px;'><img style='height:30px;margin-top:-2px;'src='{{asset('img/icons/Light_Green/Nell_Icons_Light_Green_CMYK-01.png')}}'>Upload Genome</span></a>
            </div>
            <hr>
            <div class='form-group 'style='margin-top:-10px;'>
              <label style='margin:5px;font-size: 25px;
                  font-family: GTWalsham_reg;'> Connect With 23&Me: </label><br>
              <a class='btn btn-default' style=' width:200px;margin-left:10px;'
                  href="https://api.23andme.com/authorize/?redirect_uri=http://www.nellnaturalelements.com/receive&response_type=code&client_id=a2e401e2dc7aa172df1b466597edcb8b&scope=basic names email genomes report:all rs1801131">
                <img src="{{asset('img/23andme_button.png')}}",  alt= "23andme"style='width:180px'></a>
            </div>
            <hr>
            <br>
            <div class='form-group form-inline' style='margin-top:-40px;'>
              <label style='margin-left:5px;font-size: 25px; margin-top:20px;
                  font-family: GTWalsham_reg;'> Havn't Done A Test?</label><br>
              <label style='margin-left:5px;font-size: 18px;
                  font-family: GTWalsham_reg;'> Sign Up To Our New Membership Now For <br>Early Access To Our Genetic Test:</label><br>
              <a class='btn btn-default' style="font-size: 15px; width:200px;height:40px; margin-top:5px;margin-left:10px;
                  font-family: sans-serif;"href='http://eepurl.com/djZ_tn'><span style='position:relative;left:-40px;top:-2px;'><img style='height:30px;margin-bottom:5px;margin-left:40px;'src='{{asset('img/icons/Light_Green/Nell_Icons_Light_Green_CMYK-27.png')}}'><span style='margin-left:20px;'>Sign Up</span></span></a>
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
