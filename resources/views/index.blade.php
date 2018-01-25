</html>
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
<!-- <script src="https://code.highcharts.com/highcharts.src.js"></script>
 -->
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!--<script src="http://maps.googleapis.com/maps/api/js"> </script>-->
<!-- <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
 -->

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel="stylesheet" type='text/css'>


  <!-- Custom CSS -->
  <link href="simple-sidebar.css" rel="stylesheet">
  {{ URL::asset('css/simple-sidebar.css') }}
  <link src='myelements.css'>
  {{ URL::asset('css/myelements.css') }}
  <script src='script.js'></script>
<!-- no Ui Slider -->

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
            <nav class="navbar navbar-inverse navbar-fixed-top" style='background-color: 000000;'>
              <div class="container-fluid">
                <div class="navbar-header">
                  <a style='font-family:GTWalsham' class="navbar-brand" href="#">My Elements - A Platform to Analyse your Health</a>
                </div>
                <!-- <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav">
                </ul> -->
                <ul class='nav navbar-nav navbar-right'>
                  <li >
                    <a class="btn btn-default btn-sm" href="AI.html" style='font-size:12px;float:right;colour:red'>
                        <span class='glyphicon glyphicon-user'style='font-family:GTWalsham'> AI Doctor</span>
                    </a>
                  </li>
                  <!-- <li >
                    <a class="btn btn-default btn-sm" href="reports.html" style='font-size:12px;float:right;colour:red'>
                        <span class='glyphicon glyphicon-user'style='font-family:GTWalsham'> Nutrition Report </span>
                    </a>
                  </li> -->
                  <li>
                    <a class="btn btn-default btn-sm" href="http://nellelements.com/" style='font-size:12px;float:right;colour:red'>
                        <span class='glyphicon glyphicon-log-in'style='font-family:GTWalsham'> Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
            <!-- /.navbar-top-links -->
            <!-- Sidebar -->
            <div id="sidebar-wrapper" style='top:60px;'>
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
                        <a href="reports.html"> <img style='height:40px'src='images/Nell_Icons_Green-06.png'> My Vitamins</a>
                    </li>
                    <li>
                        <a href="#"> <img style='height:40px'src='images/Nell_Icons_Green-01.png'> My DNA </a>
                    </li>
                    <li>
                        <a href="http://77.68.72.205/"> <img style='height:40px'src='images/Nell_Icons_Green-02.png'> Upload your genome </a>
                    </li>
                    <li>
                        <a href="#"><img style='height:40px'src='images/Nell_Icons_Green-03.png'> My Blood</a>
                    </li>
                    <li>
                        <a href="#"><img style='height:40px'src='images/Nell_Icons_Green-04.png'> My Worries</a>
                    </li>
                     <li>
                        <a href="#"><img style='height:40px'src='images/Nell_Icons_Green-05.png'>  My Priorities</a>
                    </li>

                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->

            <div class='page_content_wrapper' style='margin-top:70px;'>
              <!-- container (landing page - welcome or Questionaire) -->

              <!-- container (chart - welcome) -->
              <div class='chart_container'>
                <div class="row slideanim">
                  <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                      <div class="panel-heading">
                        <h1>Nutrition</h1>
                      </div>
                      <div class="panel-body">
                        <div ng-controller='chartController'>

                          <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                        </div>
                      </div>
                      <div class="panel-footer">
                        <a style='background-color: orange;'class="btn btn-lg"href='index.html#pricing'>Next Step</a>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- Container (Pricing Options) -->
              <div class='row'>
              <div id="pricing" class="container-fluid">
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
                        <a style='background-color: orange;'class="btn btn-lg"href='analyse.html'>Sign Up</a>
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
                        <a style='background-color: orange;'class="btn btn-lg"href='analyse_bloods.html'>Sign Up</a>
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
                        <a style='background-color: orange;'class="btn btn-lg"href='analyse.html'>Sign Up</a>
                      </div>
                    </div>
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
   dataType:'jsonp',
   url: "https://api.23andme.com/3/account/ -H 'Authorization: Bearer" + access_code + "'",
   success: function(data){
      console.log(data);
      account_id = data['data']['id'];
      $('#name').html(data['data']['first_name'] + ' ' + data['data']['last_name']);
      $('#email').html(data['data']['email']);
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
    },
    error: function(error){
      console.log(error);
    }
 });

</script>
</body>
</html>
