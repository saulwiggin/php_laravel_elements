<html>
<header>
<!-- <link src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js'></script> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}'">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link src='{{URL::asset('css/login.css')}}'>
</header>
<body>
  <img src='{{asset('img/the_science_of_feeling_great.jpg')}}'  id='bg' alt= "nell">
<div class='background-image' >
  <div class='row' style='margin:40px; margin-left: 450px;   position: absolute;
    top: 10;'>
    <div class='col'>
      <div class="panel panel-default" style='width: 335;'>
        <div class='panel panel-header'>
          <h2 style='font-family:GTWalsham_med;margin-left:12'>  Login </h2>
        </div>
        <div class="panel-body">
          <div class='23andme'>
            <div class="btn-group-vertical">
              <img src='{{asset('img/nell_natural_elements_logo.png')}}'  alt= "nell">
              <hr>
              <div class="form-group form-inline">
                 <!-- <label style='font-family:GTWalsham_reg;margin-top:20px;font-size:15'>  </label> -->
                <a href='{{url('home')}}' class='btn btn-default' style='width:304;float:left;margin-top:4;height:42;margin-bottom:10px;'> <span style='float:left;margin-top:5px;margin-left:13px;margin-bottom:10px;font-family: GTWalsham_med;
style: bold;'> Become A Member</span> <img style='height:36;margin-top:-4;position:relative;left:12px;margin-left:25'src='{{asset('img/Nell_Icons_Yellow_CMYK-23.png')}}'></a>
              </div>
              <div id='23andme_button' class="form-group form-inline">
                <!-- <label style='font-family:GTWalsham_reg; margin-top: 15;margin-right: 5;font-size:15'> Connect </label> -->
                  <a class='btn btn-default' style='float:left; margin-bottom:5px'
                    href="https://api.23andme.com/authorize/?redirect_uri=http://aws-website-myelements-pm46o.s3-website-us-east-1.amazonaws.com/&response_type=code&client_id=a2e401e2dc7aa172df1b466597edcb8b&scope=basic rs123">
                  <img src="{{asset('img/23andme_button.png')}}",  alt= "23andme"></a>
              </div>
              <div class="form-group form-inline"style='margin-bottom:25px'>
              <label style='font-family:GTWalsham_reg;margin-top:20px;font-size:15'> Already had a genetic test?  </label>
                <a href='http://genomeanalyse.com/' style='float:left;width:304;height:42'class='btn btn-default'> <span style='float:left;margin-top:5px;margin-left:16px;font-family: GTWalsham_med;
style: bold;'> Upload Your Genome </span> <img style='height:36;margin-top:-4;margin-left:35px;' src='{{asset('img/Nell_Icons_Yellow_CMYK-19.png')}}'></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
