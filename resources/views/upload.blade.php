<!DOCTYPE html>
</body>
</html>
<html>
<header>
<link src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js'></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- this file was missing -->
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

  <!-- this file was moved after the jQuery Datatables library was laoded -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link src="{{asset('css/fonts.css')}}" rel="stylesheet">
<link src="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<script src="{{asset('bootstrap-prettyfile.js')}}"></script>

</header>
<body style='    font-size: 12px;
    font-family: Walsheim'>
  <img src='{{asset('img/background_subpage.jpg')}}' style=' margin-bottom:-60px;   width: 100%;
    margin-top: -100px;
    margin-left: -100px;'></img>
<div class='background-image' >
  <div class='row' style='margin:40px;  position: absolute;
    margin-top: 20px;'>
    <div class='col'>

      <div class="panel panel-default" style='width: 600px;margin-top:-800px;margin-left:400px;'>
        <div class='panel panel-header'>
          <h2 style='margin-left:12px'>  <img style='    height: 150px;
              margin: -40px;'src='{{asset('img/Nell_Logo_Main_CMYK.png')}}'> </h2>
        </div>
        <div class="panel-body">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class='form-group'>
             <label style='margin:5px;font-size: 25px; margin-top:-40px;
                 font-family: walsheim;'> Already have your DNA Sequenced? </label><br>
             <label style='margin:5px;
    margin-left: 5px;
    font-size: 18px; position:relative; top:-8px;
        font-family: walsheim;'> Upload Your Txt File Here: </label><br>
              <!-- <label style='margin:5px;'> Please attach your name so we know who you are </label>
              <input style='margin:10px;'type="file" name="fileToUpload" id="fileToUpload">
              <input style='margin:10px;'type="submit" value="Upload" name="submit">  -->
              <a href='/my_genetics' class='btn btn-default' style='font-size: 15px; position:relative;width:200px;margin-left:10px;
        font-family: walsheim;height:40'><span style='position:relative;left:-10px;'><img style='height:30px;margin-top:-2px;'src='{{asset('img/icons/Light_Green/Nell_Icons_Light_Green_CMYK-01.png')}}'><span style='  font-family: walsheim;font-size:18px;position:relative;top:2px;'>Upload Genome</span></span></a>
            </div>
            <hr>
            <div class='form-group 'style='margin-top:-10px;'>
              <label style='margin:5px;font-size: 25px;
                  font-family: walsheim;'> Connect With 23&Me: </label><br>
              <a class='btn btn-default' style=' width:330px;margin-left:10px;'
                  href="https://api.23andme.com/authorize/?redirect_uri=http://www.nellnaturalelements.com/receive&response_type=code&client_id=a2e401e2dc7aa172df1b466597edcb8b&scope=basic names email genomes report:all">
                <img src="{{asset('img/23andme_button.png')}}",  alt= "23andme"style='width:300px'></a>
            </div>
            <hr>
            <br>
            <div class='form-group form-inline' style='margin-top:-40px;'>
              <label style='margin-left:5px;font-size: 25px; margin-top:20px;
                  font-family: walsheim;'> Havn't Done A Test?</label><br>
              <label style='margin-left:5px;font-size: 18px;
                  font-family: walsheim;'> Sign Up To Our New Membership Now For <br>Early Access To Our Genetic Test:</label><br>
                  <!-- Trigger the modal with a button -->

                <a class='btn btn-default' data-toggle="modal" data-target="#myModal" style="font-size: 15px; width:200px;height:40px; margin-top:5px;margin-left:10px;
                  font-family: walsheim" ><span style='position:relative;left:-40px;top:-2px;'>
                  <img style='height:30px;margin-bottom:5px;margin-left:40px;'src='{{asset('img/icons/Light_Green/Nell_Icons_Light_Green_CMYK-27.png')}}'><span style='margin-left:20px;font-family: walsheim;font-size:18px;postion:relative;top:2px;'>Sign Up</span></span>
                </a>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign Up For Early Access To Our Genetic Test</h4>
                      </div>
                      <div class="modal-body">
                        <!-- Begin MailChimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                        	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                        	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                        	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup">
                        <form action="https://nellnaturalelements.us17.list-manage.com/subscribe/post?u=e48c8dbd9510b06cb9c694c91&amp;id=0079e82d76" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                        	<h2>Subscribe</h2>
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <div class="mc-field-group">
                        	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                        </label>
                        	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        	<div id="mce-responses" class="clear">
                        		<div class="response" id="mce-error-response" style="display:none"></div>
                        		<div class="response" id="mce-success-response" style="display:none"></div>
                        	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e48c8dbd9510b06cb9c694c91_0079e82d76" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                        </div>

                        <!--End mc_embed_signup-->
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
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
