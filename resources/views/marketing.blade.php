<html>
<head>
  <title>My Elements</title>
  <meta charset="utf-8">
  <!-- responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

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


 <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('semanticUI/dist/semantic.min.css')}}">

</head>
<body ng-app='app' style='width:100%' class='container'>
  <div id="wrapper" class='toggled' style='width:100%'>
        <!-- Navigation -->
        <div class='row'>
          <div class='col-md-12'>
            <nav class="navbar navbar-fixed-top container-fluid white" style='height:inherit;'>
              <div class=" header white">
                <div class="navbar-header ">
                  <img style='float:left;height:90px;'src='{{ asset('img/Nell_Logo_Main_CMYK.png') }}'}>
                  <div class='links' style='float:right;
    margin-top: 20px;'>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="https://nell.co.uk/collections/all">Shop</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="{{url('theScience')}}">The Science</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="https://nell.co.uk/pages/community">Who We Are</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="{{ url('login') }}">Login</a>
                    <!-- <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Account</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Cart</a> -->
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

            <div class='page_content_wrapper fluid-container' style='margin-top:70px;'>
              <div class='mission_statement_container w3-container container-fluid' style='width:100%;     margin-top: -100px;'>
                <div class="slideanim row fluid-container">
                  <div class="col-md-12">
                    <div class="panel  text-center">
                      <div class="panel-body">
                        <div class="overlay"style='z-index:-11;position:relative;top:200px;width:10%'><h1>Overlay Text</h1></div>
                        <a href='#knowledge_bomb_container' style='position:relative;top:300px;margin-left:500px' class="button button--tamaya button--round-l button--text-thick button--border-medium button--text-upper button--size-s button--inverted" data-text="Enter"><span>Enter</span></a>

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
                                  <img style='width:100%' src="{{ asset('img/the_science_of_feeling_great.jpg') }}" alt="">

                              </div>
                              <div class="item">
                                  <img style='width:100%'src="{{asset('img/leafimage.jpg')}}" alt="">
                              </div>
                              <div class="item">
                                  <img style='width:100%'src="{{asset('img/healthy_greens.jpg')}}" alt="">
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
                  <!-- <div class='col-md-12' >
                    <div style='width:100%;height:0px' href='#knowledge_bomb_container' >-->
                      <!-- <div class="panel panel-default text-center" style='position:relative;top:200px;height:100px;'>
                        <div class="panel-body"> -->

                          <!-- <div style=''>
                          <a href='#knowledge_bomb_container' class=' btn btn-block' style='height:70px;' >
                            <div class='form-inline'>
                           <img id='img1'style='height:90px'src='{{asset('img/icons/Yellow/Nell_Icons_Yellow_CMYK-19.png')}}'>
                              <div class="label" id='button_content' style='font-size:2vw;font-family:GTWalsham_med;position:relative;top:5px;'>The Elements Effect Your Anatomy</div>
                         <img id='img2'style='height:90px'src='{{asset('img/icons/Yellow/Nell_Icons_Yellow_CMYK-05.png')}}'>
                            </span>
                          </div>
                        </a>
                        </div> -->
                      <!-- </div>
                    </div> -->
                  <!-- </div>
                </div> -->
              </div>
            </div>
            <div id='knowledge_bomb_container'class='knowledge_bomb_container fluid-container' style='height:600px;width:100%;     margin-top: -10px;'>
                <div class="row slideanim" style='margin-top:-200px;'>
                  <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center"  style='height: 225px;'   >
                      <img style='height:120px;'src='{{asset('img/brain.png')}}'>
                      <p style='font-size:22px;font-family:walsheim'>We welcome you to a world of vital knowledge, centered on a network of professionals.</p>

                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center" style='height: 225px;'>
                      <img style='height:120px;'src='{{asset('img/icons/Orange/Nell_Icons_Orange_CMYK-06.png')}}'>
                      <p style='font-size:22px;font-family:walsheim'>We all need a unique blend of elements and nourishment to flourish and thrive.</p>

                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center" style='height: 225px;'>
                      <img style='height:120px;'src='{{asset('img/leaves.png')}}'>
                      <p style='font-size:22px;font-family:walsheim'>We make getting the best of natures ingredients simple.</p>
                    </div>
                  </div>
                </div>
                <div class="row slideanim">
                  <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center" style='height: 225px;'>
                      <img style='height:120px;'src='{{asset('img/bottle.png')}}'>
                      <p style='font-size:22px;font-family:walsheim'>We create little shots of natural goodness. Uniquely designed for your needs.</p>
                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center" style='height: 225px;'>
                      <img style='height:120px;'src='{{asset('img/letter.png')}}'>
                      <p style='font-size:22px;font-family:walsheim'>Delivered to your door, we bring you what you need for a healthy living.</p>

                    </div>
                  </div>
                    <div class="col-sm-4 col-xs-12">
                      <div class="panel panel-default text-center" style='height: 225px;'>
                      <img style='height:120px;'src='{{asset('img/bubbles.png')}}'>
                      <p style='font-size:22px;font-family:walsheim'>We guide our community day by day, shot by shot, towards a healthier future.</p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>

                <div class='row'>
                  <div id="pricing" class="container-fluid">
                    <div class="text-center">
                      <div class="jumbotron white">
                        <h1>Pricing</h1>
                        <h3>Choose a Health plan that works for you</h3>
                      </div>
                    </div>
                    <div class="row slideanim">
                      <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                          <div class="panel-heading white">
                            <h1>Free</h1>
                          </div>
                          <div class="panel-body" style='font-family:GTWalshamRegular;font-size:22px;height:400px'>
                            <p> A Full Health Questionaire </p>
                            <p> Option to Purchase a Nell Health Test </p>
                            <p> Access to Nell Advisors </p>
                            <p> Sign Up For the Beta Test </p>
                            <p> Enter the Nell Ecosystem </p>
                          </div>
                          <div class="panel-footer white">
                            <h3>Free</h3>
                            <h4>For You</h4>
                            <form action="/dashboard" method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_3nUr5h2yoTpdKcphemA1wcMv"
                                data-amount="0"
                                data-name="nell"
                                data-description="Membership"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-currency="gbp">
                              </script>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                          <div class="panel-heading white">
                            <h1> Standard </h1>
                          </div>
                          <div class="panel-body"  style='font-family:GTWalshamRegular;font-size:22px;height:400px'>
                            <p><strong>1</strong> Upload Your Genome Using 23andme. </p>
                            <p> A Nutrition Report Based on Your Genetic Analysis. </p>
                            <p> Connect with Other Devices. </p>
                            <p> Store Your Data At Our Central Repository. </p>
                            <p> Have A Personalised Product Assigned To You. </p>
                          </div>
                          <div class="panel-footer white">
                            <h3>£25</h3>
                            <h4>per month</h4>
                            <form action="/medium" method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_3nUr5h2yoTpdKcphemA1wcMv"
                                data-amount="2500"
                                data-name="nell"
                                data-description="Membership"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-currency="gbp">
                              </script>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                          <div class="panel-heading white">
                            <h1>Full Bio-hack</h1>
                          </div>
                          <div class="panel-body" style='font-family:GTWalshamRegular;font-size:22px;height:400px'>
                            <p> Intra-Veinous Injections. </p>
                            <p> Gold Membership. </p>
                            <p> Social Influencers </p>
                            <p> Personal Meditation Kit. </p>
                            <p> The AI Brain will analyse your data to glean insights on your record. </p>
                          </div>
                          <div class="panel-footer white">
                            <h3>£50</h3>
                            <h4>per month</h4>
                            <form action="/stripe/full" method="POST">
                              <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_DcsFIYQ9hFp0CLKgxNxy9xzH"
                                data-amount="5000"
                                data-name="nell"
                                data-description="Full Membership"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-currency="gbp">
                              </script>
                            </form>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>

          <!-- close page content -->
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
