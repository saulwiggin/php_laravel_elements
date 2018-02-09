<!DOCTYPE html>
<html>
<head>
  <title>My Elements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery.imagemapster.1.1.3b5.js"></script>

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
<!-- <script src="https://code.highcharts.com/highcharts.src.js"></script>
 -->
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

<!--material design inp[uts -->
  <!-- Custom CSS -->
  <!-- <link href="simple-sidebar.css" rel="stylesheet"> -->
  <link src='myelements.css'>
  <script src='script.js'></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

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
<body ng-app='app' >
  <div id="wrapper" class='toggled'>
        <!-- Navigation -->
            <nav class="navbar navbar-fixed-top white" style='height:70px;'>
              <div class="container-fluid">
                <div class="navbar-header">
                  <img style='float:left;height:70px;'src='{{asset('img/Nell_Logo_Main_CMYK.png')}}'>
                  <a style='font-family:GTWalsham;margin:10px;color:black' class="navbar-brand" href="#">The Elements</a>
                  <a style='font-family:GTWalsham;margin:10px;color:black' class="navbar-brand" href="#">Get In Touch</a>
                  <a style='font-family:GTWalsham;margin:10px;color:black' class="navbar-brand" href="#">Formulas</a>
                  <a style='font-family:GTWalsham;margin:10px;color:black' class="navbar-brand" href="#">Get In Touch</a>

                </div>

                <!-- <ul class='nav navbar-nav navbar-right'>
                  <li >
                    <a class="btn btn-default btn-sm" href="chatbot-master/demo/demo-webknox.html" style='font-size:12px;float:right;colour:red'>
                        <span style='font-family:GTWalsham'> AI Doctor</span>
                    </a>
                  </li>
                  <li>
                    <a class="btn btn-default btn-sm" href="http://nellelements.com/" style='font-size:12px;float:right;colour:red'>
                        <span style='font-family:GTWalsham'> Logout</span>
                    </a>
                  </li>
                </ul> -->
              </div>
            </nav>
            <!-- /.navbar-top-links -->
            <!-- Sidebar -->
            <!-- <div id="sidebar-wrapper" style='top:60px;'>
                <ul class="sidebar-nav" id='slide-out'>
                     <li><div class="user-view">
                          <div class="background">
                            <img style='margin:10px;background: black;margin-top: 70;'width=180 class="circle" src="Nell_Logo.png">
                          </div>
                          <a href="#!user"></a>
                          <a href="#!name"><span id='name' class="white-text name"></span></a>
                          <a href="#!email"><span id='email' class="white-text email"></span></a>
                        </div>
                    </li>
                    <li>
                        <a href="intellegence_report.html"><img style='height:40px'src='images/Nell_Icons_Green_CMYK-12.png'> My Intellegence</a>
                    </li>
                    <li>
                        <a href="#"><img style='height:40px'src='images/Nell_Icons_Green-04.png'> My Worries</a>
                    </li>
                     <li>
                        <a href="pdf_nutrition_report.html"><img style='height:40px'src='images/Nell_Icons_Green-05.png'> My Nutrition </a>
                    </li>
                    <li>
                       <a href="pdf_nutrition_report.html"><img style='height:40px'src='images/Nell_Icons_Green_CMYK-07.png'> My Age </a>
                   </li>
                   <li>
                      <a href="pdf_nutrition_report.html"><img style='height:40px'src='images/Nell_Icons_Green_CMYK-08.png'> My Muscles </a>
                  </li>
                  <li>
                     <a href="pdf_nutrition_report.html"><img style='height:40px'src='images/Nell_Icons_Green_CMYK-09.png'> My Weight </a>
                 </li>
                 <li>
                    <a href="pdf_nutrition_report.html"><img style='height:40px'src='images/Nell_Icons_Green_CMYK-10.png'> My Sleep </a>
                </li>
                <li>
                   <a href="pdf_nutrition_report.html"><img style='height:40px'src='images/Nell_Icons_Green_CMYK-11.png'> My Energy </a>
               </li>
                </ul>
            </div> -->
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->

            <div class='page_content_wrapper' style='margin-top:70px;width:100%'>
              <!-- container (landing page - welcome or Questionaire) -->

              <!-- <div class='chart_container'>
                <div class="row slideanim" style='float:left'>
                  <div class="col-md-12">
                    <div class="panel panel-default text-center">
                      <div class="panel-body">

                        <img style='wdith:500px; height:500px;'src='images/Nell_Logo_Alone_CMYK.png'>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            <!-- container (chart - welcome) -->
               <div class='chart_container'>
                <div class="row slideanim fluid-container">
                  <div class='mission_statement_container w3-container' style='width:100%;margin-top:-10px;'>
                    <div class="slideanim row">
                      <div class="col-md-12">
                        <div class="panel  text-center">
                          <div class="panel-body">
                            <!-- <button class='btn btn-default'> Click Me </button> -->
                            <div id="carousel-example-generic w3-container" class="carousel slide" data-ride="carousel" style='height:600px;'>
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                      <img src="{{ asset('img/the_science_of_feeling_great.jpg') }}" alt="">
                                      <div class="carousel-caption">
                                        <div class="carousel-caption">
                                          <div class="carousel-caption">
                                            <h3>header</h3>
                                            <p>Details of Slide 3. Lorem Ipsum Blah Blah Blah....</p>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <img style='height:860px'src="{{asset('img/leafimage.jpg')}}" alt="">
                                  </div>
                                  <div class="item">
                                      <img style='height:860px'src="{{asset('img/healthy_greens.jpg')}}" alt="">
                                  </div>
                              </div>

                              <!-- Controls -->
                              <a style='background: none;'class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                              </a>
                              <a style='background: none;'class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                              </a>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- container nutritional report -->
              <div class='knowledge_bomb_container'>
                <div class="row slideanim fluid-container">
                  <div class="">
                    <div class="panel panel-default text-center">
                      <div class="panel-heading">
                        <h1></h1>
                      </div>
                      <div class="panel-body">
                        <ul>
                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Container (Pricing Options) -->
              <div class='pricing_container' style='background-color:#FFA300'>
              <div class='row'>
              <div id="pricing" class="container-fluid">
                <div class="text-center">
                  <div class="jumbotron" >
                    <a href='https://nell.co.uk/products/genetic-test' type='button' class='btn btn-default'>Take Genetic Test</a>
                    <!-- <h2>Pricing</h2>
                    <h4>Choose a Health plan that works for you</h4> -->
                  </div>
                </div>
                <div class="row slideanim">
                   <div class="col-sm-4 col-xs-12">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- close page content -->

      </div>
      <!-- /#wrapper -->
      <div class="footer">
      <!-- 	<div class="container">
      		&copy; 2016 Warwick Wireless</a> All rights reserved.
      	</div> -->
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
