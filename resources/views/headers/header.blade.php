@section('header')
<!DOCTYPE html>
<html>
<head>
  <title>My Elements</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="./img/favicon-32x32.png" type="image/x-icon">
  <link rel="icon" href="./img/favicon-32x32.png" type="image/x-icon">
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

<!--css-->
<!-- <link href="{{asset('./css/dashboard.css')}}" rel="stylesheet"> -->
<link href="{{asset('./css/simple-sidebar.css')}}" rel="stylesheet">

<!--scripts-->
<script src='{{asset('js/jquery.colorbox-min.js')}}'></script>

</head>
<script>
.dashboard{
  background-image: url('{{asset('img/background_dashboard_small.jpg')}}');
}
</script>
<body ng-app='app' id='dashboard' class='container'    style=' background-size: 1400px 1200px;
    background-image: url(img/background_dashboard.jpg);
    width: 100%;
    height: 100%;'>
@show
