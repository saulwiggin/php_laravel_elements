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
                  <img style='float:left;height:90px;'src='{{ asset('img/Nell_Logo_Main_CMYK.png') }}'}>
                  <div class='links' style='float:right;    margin-left: 470px;
    margin-top: 20px;'>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="https://nell.co.uk/collections/all">Shop</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Ingredients</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Who We Are</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="{{ url('login') }}">Login</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Account</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Cart</a>
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
              <!-- <div class='landing_container' style='height:600px;width:100%;     margin-top: 100px;'>
                <div class="slideanim row">
                  <div class="col-md-12">
                    <div class="panel  text-center">
                      <div class="panel-body">

                      </div>
                    </div>
                  </div>
                  <div class='col-md-12'>
                    <a style='margin-top:-200px;margin-left:auto;margin-right:auto;width:350px;'class='btn btn-default btn-block' href='https://nell.co.uk/collections/all'>Shop</a>
                  </div>
                </div>
              </div> -->

            <div class='body_reports' style='height:700px;'>
              <div class='row'>
                <div class='col-md-4'>
                  <div class="container">
                    <div id="weight" class="collapse">
                      <h2> Weight Report </h2>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['table']});
                        google.charts.setOnLoadCallback(drawTable1);

                        function drawTable1() {
                          var data = new google.visualization.DataTable();
                          data.addColumn('string', 'Vitamin');
                          data.addColumn('string', 'Gene');
                          data.addColumn('string', 'Genotype');
                          data.addColumn('string', 'Description');
                          data.addRows([
                            ['Vitamin B6', 'rs429358', 'CT','1.45 ng/mL lower Vitamin B6 blood concentration.'],
                            ['Vitamin B9', 'rs1801131','AC','Possibly impaired folate metabolism. Take more folic acid.'],
                            ['Vitamin D','rs12794714','AA',  'you tend to have higher vitamin D levels.'],
                            ['Vitamin D',   'rs12794714', 'AC', 'Possibly impaired folate metabolism. Take more folic acid.'],
                            ['Vitamin A', 'rs7501331', 'TT','Reduced conversion of beta-carotene to retinol. Take more vitamin A.'],
                            ['Vitamin B12','rs602662','GG',  'Lower vitamin B12 levels. Take more B12.'],
                            ['Riboflavin', 'rs267606683','TT','Brown-Vialetto-Van Laere Syndrome; riboflavin treatment recommended.'],
                            ['Folic Acid',   'rs4988235', 'TT', 'homozygous for C677T of MTHFR = 10-20% efficiency in processing folic acid = high homocysteine, low B12 and folate levels.'],
                            ['Iron',   'rs855791', 'CT', '0.1 g/dL lower hemoglobin on average. Take more Iron.']

                          ]);

                          var table = new google.visualization.Table(document.getElementById('table_div_weight'));

                          table.draw(data, {showRowNumber: true, width: '400px', height: '600px'});
                        }
                      </script>
                      <div id="table_div_weight"></div>
                    </div>
                    <div id="sleep" class="collapse">
                      <h2> Sleep Report </h2>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['table']});
                        google.charts.setOnLoadCallback(drawTable2);

                        function drawTable2() {
                          var data = new google.visualization.DataTable();
                          data.addColumn('string', 'Vitamin');
                          data.addColumn('string', 'Gene');
                          data.addColumn('string', 'Genotype');
                          data.addColumn('string', 'Description');
                          data.addRows([
                            ['Vitamin B6', 'rs429358', 'CT','1.45 ng/mL lower Vitamin B6 blood concentration.'],
                            ['Vitamin B9', 'rs1801131','AC','Possibly impaired folate metabolism. Take more folic acid.'],
                            ['Vitamin D','rs12794714','AA',  'you tend to have higher vitamin D levels.'],
                            ['Vitamin D',   'rs12794714', 'AC', 'Possibly impaired folate metabolism. Take more folic acid.'],
                            ['Vitamin A', 'rs7501331', 'TT','Reduced conversion of beta-carotene to retinol. Take more vitamin A.'],
                            ['Vitamin B12','rs602662','GG',  'Lower vitamin B12 levels. Take more B12.'],
                            ['Riboflavin', 'rs267606683','TT','Brown-Vialetto-Van Laere Syndrome; riboflavin treatment recommended.'],
                            ['Folic Acid',   'rs4988235', 'TT', 'homozygous for C677T of MTHFR = 10-20% efficiency in processing folic acid = high homocysteine, low B12 and folate levels.'],
                            ['Iron',   'rs855791', 'CT', '0.1 g/dL lower hemoglobin on average. Take more Iron.']

                          ]);

                          var table = new google.visualization.Table(document.getElementById('table_div_sleep'));

                          table.draw(data, {showRowNumber: true, width: '400px', height: '600px'});
                        }
                      </script>
                      <div id="table_div_sleep"></div>
                    </div>
                    <div id="energy" class="collapse">
                      <h2> Energy Report </h2>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['table']});
                        google.charts.setOnLoadCallback(drawTable3);

                        function drawTable3() {
                          var data = new google.visualization.DataTable();
                          data.addColumn('string', 'Vitamin');
                          data.addColumn('string', 'Gene');
                          data.addColumn('string', 'Genotype');
                          data.addColumn('string', 'Description');
                          data.addRows([
                            ['Vitamin B6', 'rs429358', 'CT','1.45 ng/mL lower Vitamin B6 blood concentration.'],
                            ['Vitamin B9', 'rs1801131','AC','Possibly impaired folate metabolism. Take more folic acid.'],
                            ['Vitamin D','rs12794714','AA',  'you tend to have higher vitamin D levels.'],
                            ['Vitamin D',   'rs12794714', 'AC', 'Possibly impaired folate metabolism. Take more folic acid.'],
                            ['Vitamin A', 'rs7501331', 'TT','Reduced conversion of beta-carotene to retinol. Take more vitamin A.'],
                            ['Vitamin B12','rs602662','GG',  'Lower vitamin B12 levels. Take more B12.'],
                            ['Riboflavin', 'rs267606683','TT','Brown-Vialetto-Van Laere Syndrome; riboflavin treatment recommended.'],
                            ['Folic Acid',   'rs4988235', 'TT', 'homozygous for C677T of MTHFR = 10-20% efficiency in processing folic acid = high homocysteine, low B12 and folate levels.'],
                            ['Iron',   'rs855791', 'CT', '0.1 g/dL lower hemoglobin on average. Take more Iron.']

                          ]);

                          var table = new google.visualization.Table(document.getElementById('table_div_energy'));

                          table.draw(data, {showRowNumber: true, width: '400px', height: '600px'});
                        }
                      </script>
                      <div id="table_div_energy"></div>
                    </div>
                  </div>
                </div>

                  <div class='col-md-4'>
                    <div class='circle' id="circle-demo trigger"></div>
                    <script>
                    $( "#trigger" ).click(function() {
                      document.getElementById("path_to_weight").beginElement();
                    });
                    </script>
                    <div id="circle-intellegence"></div>
                    <div id="circle-sleep"></div>
                    <div id="circle-energy"></div>
                    <div id="circle-weight"></div>
                    <h3> Click Your Body To Discover Your Vitals </h3>
                     <img src="{{ asset('img/human_profile.png') }}" usemap="#shapes"
                          alt="Four shapes are available: a red hollow box, a green circle, a blue triangle, and a yellow four-pointed star.">
                     <map name="shapes">
                       <area class='area' shape=circle href="#demo" coords="200,75,50" data-toggle="collapse" alt="Green circle.">
                       <area class='area' shape=poly coords="325,25,262,125,388,125" data-toggle="collapse"  href="#intellegence" alt="Blue triangle.">
                       <area class='area' shape=circle coords="260, 200, 50"
                             href="#sleep" alt="gut" data-toggle="collapse" >
                      <area class='area' shape=circle href ='#energy' data-toggle="collapse" alt='hand' coords="360,270,50">
                      <area class='area' shape=circle coords="290,400,50" href="#weight"  alt="leg" data-toggle="collapse">
                     </map>
                    </p>
                  </div>
                  <script>
                  $('.area').click( function(e) {
                      $('.collapse').collapse('hide');
                  });
                  </script>
                  <div class='col-md-4'>
                    <div class="container">

                      <div id="intellegence" class="collapse">
                        <h2> Intellegence Report </h2>
                        <script type="text/javascript">
                          google.charts.load('current', {'packages':['table']});
                          google.charts.setOnLoadCallback(drawTable4);

                          function drawTable4() {
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Vitamin');
                            data.addColumn('string', 'Gene');
                            data.addColumn('string', 'Genotype');
                            data.addColumn('string', 'Description');
                            data.addRows([
                              ['Vitamin B6', 'rs429358', 'CT','1.45 ng/mL lower Vitamin B6 blood concentration.'],
                              ['Vitamin B9', 'rs1801131','AC','Possibly impaired folate metabolism. Take more folic acid.'],
                              ['Vitamin D','rs12794714','AA',  'you tend to have higher vitamin D levels.'],
                              ['Vitamin D',   'rs12794714', 'AC', 'Possibly impaired folate metabolism. Take more folic acid.'],
                              ['Vitamin A', 'rs7501331', 'TT','Reduced conversion of beta-carotene to retinol. Take more vitamin A.'],
                              ['Vitamin B12','rs602662','GG',  'Lower vitamin B12 levels. Take more B12.'],
                              ['Riboflavin', 'rs267606683','TT','Brown-Vialetto-Van Laere Syndrome; riboflavin treatment recommended.'],
                              ['Folic Acid',   'rs4988235', 'TT', 'homozygous for C677T of MTHFR = 10-20% efficiency in processing folic acid = high homocysteine, low B12 and folate levels.'],
                              ['Iron',   'rs855791', 'CT', '0.1 g/dL lower hemoglobin on average. Take more Iron.']

                            ]);

                            var table = new google.visualization.Table(document.getElementById('table_div_intellegence'));

                            table.draw(data, {showRowNumber: true, width: '400px', height: '600px'});
                          }
                        </script>
                        <div id="table_div_intellegence"></div>
                      </div>
                      <div id="demo" class="collapse">
                        <h2> Nutrition Report </h2>
                        <script type="text/javascript">
                          google.charts.load('current', {'packages':['table']});
                          google.charts.setOnLoadCallback(drawTable6);

                          function drawTable6() {
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Vitamin');
                            data.addColumn('string', 'Gene');
                            data.addColumn('string', 'Genotype');
                            data.addColumn('string', 'Description');
                            data.addRows([
                              ['Vitamin B6', 'rs429358', 'CT','1.45 ng/mL lower Vitamin B6 blood concentration.'],
                              ['Vitamin B9', 'rs1801131','AC','Possibly impaired folate metabolism. Take more folic acid.'],
                              ['Vitamin D','rs12794714','AA',  'you tend to have higher vitamin D levels.'],
                              ['Vitamin D',   'rs12794714', 'AC', 'Possibly impaired folate metabolism. Take more folic acid.'],
                              ['Vitamin A', 'rs7501331', 'TT','Reduced conversion of beta-carotene to retinol. Take more vitamin A.'],
                              ['Vitamin B12','rs602662','GG',  'Lower vitamin B12 levels. Take more B12.'],
                              ['Riboflavin', 'rs267606683','TT','Brown-Vialetto-Van Laere Syndrome; riboflavin treatment recommended.'],
                              ['Folic Acid',   'rs4988235', 'TT', 'homozygous for C677T of MTHFR = 10-20% efficiency in processing folic acid = high homocysteine, low B12 and folate levels.'],
                              ['Iron',   'rs855791', 'CT', '0.1 g/dL lower hemoglobin on average. Take more Iron.']

                            ]);

                            var table = new google.visualization.Table(document.getElementById('table_div_nutrition'));

                            table.draw(data, {showRowNumber: true, width: '400px', height: '600px'});
                          }
                        </script>
                        <div id="table_div_nutrition"></div>
                      </div>
                    </div>
                  </div>
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
                    <img style='width:350px; margin-top: -30px;'src='{{asset('img/Nell_Logo_Main_CMYK.png')}}'>
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
