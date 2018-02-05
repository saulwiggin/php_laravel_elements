<!DOCTYPE html>
<html>
<head>
  <title>My Elements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- install angular -->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

<!--<script type="text/javascript" src="http://malsup.github.com/jquery.form.js"></script>-->
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['gauge']}]}"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!--<script src="http://maps.googleapis.com/maps/api/js"> </script>-->
<!-- <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
 -->
 <script src="https://api.23andme.com/res/js/ttam-0.3.js"></script>
 <script src="https://code.highcharts.com/highcharts.js"></script>
 <script src="https://code.highcharts.com/modules/exporting.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel="stylesheet" type='text/css'>


  <!-- Custom CSS -->
  <!-- <link href="simple-sidebar.css" rel="stylesheet"> -->
  <link src='myelements.css'>
  <script src='script.js'></script>
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
<script src='scripts/jquery-3.3.1.min.js'></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- materialise icons -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- gauges -->
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- sheetjs for excel reporting-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.11.3/xlsx.full.min.js"></script>

<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
 --><!--[if lt IE 9]>
	<script src="../../assets/js/html5shiv.js"</script>
		<script src="../../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body ng-app='app' style='width:100%' class='container'>
  <div id="wrapper" class='toggled' style='width:100%'>
        <!-- Navigation -->
        <div class='row'>
          <div class='col-md-12'>
            <nav class="navbar navbar-fixed-top ">
              <div class="container-fluid header"style='background-color: white;'>
                <div class="navbar-header ">
                  <a href='http://www.nellnaturalelements.com'><img style='float:left;height:90px;'src='{{ asset('img/Nell_Logo_Main_CMYK.png') }}'}></a>
                  <div class='links' style='float:right;    margin-left: 320px;
    margin-top: 20px;'>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">My Health Questionaire</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">My Blood Results</a>
                    <!-- <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">My DNA Results</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">My Products</a> -->
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Settings</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="http://www.nellelements.com">Logout</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Account</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Cart</a>
                    <div class="dropdown">
                      <!-- <button class="dropbtn">Dropdown
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
        <script>
        $(window).on("scroll", function() {
          if($(window).scrollTop() > 50) {
              $(".header").addClass("active");
          } else {
              //remove the background property so it comes transparent again (defined in your css)
             $(".header").removeClass("active");
          }
        });
        </script>
            <!-- Page Content -->

            <div class='page_content_wrapper' style='margin-top:70px;'>
              <!-- container (landing page - welcome or Questionaire) -->


            <!-- container (chart - welcome) -->
          </div>
              <div class='dashboard_container' style='height:300px;'>
                <div class="row slideanim">
                    <div class='col-md-6'>
                      <div class=" text-center">

                        <div class="">
                          <div class="card" style="width: 18rem;">
                            <img class="card-img-top" style='height:150px;'src="{{asset('/img/brain.png')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Your Reports</h5>
                              <p class="card-text">View your Reports.</p>
                              <a href="/reports" style='margin:10px;'class="btn btn-primary">Reports</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img class="card-img-top" style='height:150px;'src="{{asset('/img/bottle.png')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Your Health</h5>
                              <p class="card-text">Your Health Questionaire Results.</p>
                              <a href="/questionaire" style='margin:10px;'class="btn btn-primary">Questions</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img class="card-img-top" style='height:150px;'src="{{asset('/img/heart.png')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">My Products</h5>
                              <p class="card-text">View your Products.</p>
                              <a href="/products" style='margin:10px;'class="btn btn-primary">Products</a>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                        <div class='col-md-6'>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class='bubblesanimation_container' style='height:300px;'>
                <!-- <div class="row slideanim">
                  <div class="col-md-12">
                    <div class='col-md-6'>
                        <img style='height:100%;width:100%;'src='https://cdn.shopify.com/s/files/1/2258/8035/files/pineapple.JPG?1179625118197023529'>
                    </div>
                    <div class='col-md-6'>
                      <div class="card" style='height:420px;margin-top:-20px;width:100%'>
                        <div class="card-block">
                          <h3 class="card-title"style='font-size:100px;'>02</h3>
                          <h4 class="card-text">Designed for your life </h4>
                          <p class='card-text' style='font-size:12px;'> We all need a unique blend of elements and nourishment to flourish and thirve, wherever we are, whatever the lifestyle. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- <div class='bubblesanimation_container' style='height:300px;'>
                <div class="row slideanim">
                  <div class="col-md-12">
                    <h2>The shot shaped around you </h2>
                  </div>
                </div>
              </div> -->
                <!-- </div>
              </div> -->
              <!-- Container (Pricing Options) -->

                  <!-- <div class='motivation_container' style='height:600px;'>
                    <div class='row'>
                    <div id="pricing" class="container-fluid">
                      <! <div class="text-center">
                        <div class="jumbotron">
                          <h2>Pricing</h2>
                          <h4>Choose a Health plan that works for you</h4>
                        </div>
                      </div>
                      <div class="row slideanim">
                        <div class="col-sm-4 col-xs-12">
                          <div class="panel panel-default text-center">
                            <img style='height:120px;'src='images/heart.png'>
                            <p>We welcome you to a world of vital knowledge, centered on a network of professionals</p>

                          </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                          <div class="panel panel-default text-center">
                            <img style='height:120px;'src='images/brain.png'>
                            <p>We all need a unique blend of elements and nourishment to flourish and thrive</p>

                          </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                          <div class="panel panel-default text-center">
                            <img style='height:120px;'src='images/leaves.png'>
                            <p>We make getting the bet of natures ingredients simple</p>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->

                  <div class='row'>
                  <!-- <div id="pricing" class="container-fluid">
                    <div class="text-center">
                      <div class="jumbotron">
                        <h2>Pricing</h2>
                        <h4>Choose a Health plan that works for you</h4>
                      </div>
                    </div>
                    <div class="row slideanim">
                      <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                          <div class="panel-heading">
                            <h1>Basic</h1>
                          </div>
                          <div class="panel-body" style='font-family:GTWalshamRegular'>
                            <p><strong>1</strong> Questionaire</p>
                            <p><strong>1</strong> Connection to 23andme </p>
                            <p><strong>20</strong> Nutritional Genes Analysed</p>
                            <p><strong>1000's</strong> Of Products Recommended</p>
                            <p><strong>1</strong> Report from AI Doctor </p>
                            <p><strong>Total</strong> Understanding of your Nutritional Needs</p>
                          </div>
                          <div class="panel-footer">
                            <h3>£12</h3>
                            <h4>per month</h4>
                            <a style='background-color: orange;'class="btn btn-lg"href='#'>Sign Up</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                          <div class="panel-heading">
                            <h1>Medium</h1>
                          </div>
                          <div class="panel-body">
                            <p><strong>1</strong> Genetic Test</p>
                            <p><strong>1</strong> Blood Test </p>
                            <p><strong>20</strong> Personal Recommendations </p>
                            <p><strong>1000's</strong> Community members to connect with</p>
                            <p><strong>1</strong> Monthly appointment with personal fitness </p>
                            <p><strong>Complete</strong> Zen With Your Bodily Functions</p>
                          </div>
                          <div class="panel-footer">
                            <h3>£15</h3>
                            <h4>per month</h4>
                            <a style='background-color: orange;'class="btn btn-lg"href='#'>Sign Up</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                          <div class="panel-heading">
                            <h1>Full Bio-hack</h1>
                          </div>
                          <div class="panel-body">
                            <p><strong>1</strong> Intra-Veinous Injections</p>
                            <p><strong>1</strong> Reporting </p>
                            <p><strong>20</strong> Gold Membership </p>
                            <p><strong>1000's</strong> Social Influencers </p>
                            <p><strong>1</strong> Personal Meditation Kit </p>
                            <p><strong>Endless</strong> Access to your health data</p>
                          </div>
                          <div class="panel-footer">
                            <h3>£25+</h3>
                            <h4>per month</h4>
                            <a style='background-color: orange;'class="btn btn-lg"href='#'>Sign Up</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- close page content -->

      </div>
      <!-- /#wrapper -->
      <!--Footer-->
      <div class='row'>
        <div class='col-md-12'>
        <footer class="page-footer center-on-small-only" style='background-color:#d3d3d3'>

            <!--Footer Links-->
            <div class="container-fluid">
                <div class="row">

                    <!--First column-->
                    <div class="col-md-4">
                        <h3 class="title" style='color:black;font-family:Walsheim'>Nell Natural Elements</h3>
                        <p style='color:black'>We want to grow vital relationships, day by day invigorating your body and mind. Giving you all the elements you need, to be everything you can be</p>

                    </div>
                    <!--/.First column-->
                    <div class="col-md-4">
                        <!-- <h5 class="title">Nell Natural Elements</h5>
                    </div> -->
                    <img style='width:350px;    margin-left: 30px;  margin-top: -30px;'src='{{asset('img/Nell_Logo_Main_CMYK.png')}}'>
                  </div>
                    <!--Second column-->
                    <div class="col-md-4">
                        <h5 class="title"></h5>
                        <ul style='font-color:black;font-family:Walsheim;font-size: 22px;'>
                            <li><a style='color:black'class=''href="#!">About Nell</a></li>
                            <li><a style='color:black'href="#!">Customer Reviews</a></li>
                            <li><a style='color:black'href="#!">Vitamin Information</a></li>
                            <li><a style='color:black'href="#!">Analyse Bloods</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2015 Copyright: <a href="www.nell.co.uk"> Nell Natural Elements </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
      </div>
    </div>
      <!--/.Footer-->


      <!--close page wrapper -->
      </div>
      <!-- close page content -->
    </div>
    <!-- /#wrapper -->
    <script>
//get access code
var access_code = location.search.split('code=')[1];
console.log(access_code);
//call 23andme using ajax
$.ajax({
   dataType:'json',
   url: "curl 'https://api.23andme.com/3/profile/?account_id='"+account_id+"-H 'Authorization: Bearer" + access_code + "'",
   success: function(data){
      console.log(data);
    },
    error: function(error){
      console.log(error);
    }
 });
// $.ajax({
//    dataType:'jsonp',
//    url: "https://api.23andme.com/3/account/ -H 'Authorization: Bearer" + access_code + "'",
//    success: function(data){
//       console.log(data);
//       account_id = data['data']['id'];
//       $('#name').html(data['data']['first_name'] + ' ' + data['data']['last_name']);
//       $('#email').html(data['data']['email']);
//
//     },
//     error: function(error){
//       console.log(error);
//     }
//  });

</script>
</body>
</html>
