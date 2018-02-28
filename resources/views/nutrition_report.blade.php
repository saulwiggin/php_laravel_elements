<link href='myelements.css'>
<link href='{{asset('/css/nutrition_reports.css')}}'>

@include('headers.header')

@include('sidenav.sidenav1')
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6BWRVW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-56127953-2', 'auto');
  ga('require', 'GTM-W3KFLV2');
  ga('send', 'pageview');
</script>
<script src="https://unpkg.com/ideogram@0.14.0/dist/js/ideogram.min.js"></script>

<!-- <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
   </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Share <span class="glyphicon share"></a></li>
        <li><a href="#">Print <span class="glyphicon print"></a></li>
      </ul>
    </div>
  </div>
</nav> -->

<script>
function page_redirect(){
  location.replace("http://www.my-data.me/index.php/User/login");
}
</script>

<div class="jumbotron text-center">
  <h1>My Natural Elements</h1>
  <!-- <p>Your genetic information has been analysed and produced a report which is able to give you information on on your fundamental building blocks, your natural elements.</p> -->
  <!--<form class="form-inline">-->
  <!--  <input type="email" class="form-control" size="50" placeholder="Email Address" required>-->
  <!--  <button type="button" class="btn btn-danger">Subscribe</button>-->
  <!--</form>-->
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Vitamin B6</h2>
      <div id="container" style="margin-left:50px;min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
      <script>
      		// highcharts
      			Highcharts.chart('container', {
      	    chart: {
      	        type: 'bar'
      	    },
      	    title: {
      	        text: 'Vitamin B6 Blood Concentration'
      	    },
      	    subtitle: {
      	        text: 'Genotypes'
      	    },
      	    xAxis: {
      	        categories: ['CC','CT','TT'],
      	        title: {
      	            text: null
      	        }
      	    },
      	    yAxis: {
      	        min: -5,
                max: 0 ,
      	        title: {
      	            text: 'Concentration in the blood ',
      	            align: 'high'
      	        },
      	        labels: {
      	            overflow: 'justify'
      	        }
      	    },
      	    tooltip: {
      	        valueSuffix: ''
      	    },
      	    plotOptions: {
      	        bar: {
      	            dataLabels: {
      	                enabled: true
      	            }
      	        }
      	    },
      	    credits: {
      	        enabled: false
      	    },
      	    series: [{
      	        name: 'ng/mL',
      	        data: [-2.9, -1.45,0]
      	    }]
      	});
      </script>
      <br>
      <!--<h4>Your subscription to My Data can be used along with the dataloggers below to receive multiple sensor data from your areas in your production plant, for monitoring time variable signs and for use in conjuction with GPRS mobile to receive SMS messages and emails when alarms are breached. -->
      <p>The amount of vitamin B6 adults (19-64 years) need is about:
      1.4mg a day for men
      1.2mg a day for women	</p>
      <p> Vitamin B6, also known as pyridoxine, helps:
      allow the body to use and store energy from protein and carbohydrates in food
      form haemoglobin the substance in red blood cells that carries oxygen around the body
      </p>
    </div>
    <div class="col-sm-4 panel panel-body" style='border:none'>
      <div class="thumbnail">
        <div class='ideogram' style='margin-left:250px;'></div>
        <script>
            var config = {
              container: '.ideogram',
              organism: "human",
              chromosome: "17",
              chrHeight: 400,
              orientation: "vertical",
              annotations: [{
                "name": "BRCA1",
                "chr": "17",
                "start": 43044294,
                "stop": 43125482
              }]
            };

            var ideogram = new Ideogram(config);
        </script>

      </div>
    </div>
  </div>
</div>

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

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>Products</h2>
  <h3>What we suggest</h3>
  <p>This product is recommended on a detailed analysis of your genomic data, bloods analysis and personal information. </p>
  <br>
  <div class="row slideanim">
    <div class="col-sm-2" style='width: 200px;  margin-left: 200px;'>
      <!--<span class="glyphicon glyphicon-off logo-small"></span>-->
	    <img alt='product' style='height:500px;'src='img/purple_bottle.png'></img>
      <h3></h3>
      <p>
	</p>
    </div>
    <div class="col-sm-6">
      <table class="table table-bordered" style='margin-left:200px'>
         <thead>
           <tr>
             <th>Supplement</th>
             <th>per 100ml</th>
             <th>% of RDA</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>Vitamin D</td>
             <td>5µg</td>
             <td>100%</td>
           </tr>
           <tr>
             <td>Vitamin E</td>
             <td>72mg</td>
             <td>603%</td>
           </tr>
           <tr>
             <td>Vitamin C</td>
             <td>86mg</td>
             <td>108%</td>
           </tr>
           <tr>
             <td>Thiamin</td>
             <td>2.4mg</td>
             <td>222%</td>
           </tr>
           <tr>
             <td>Riboflavin</td>
             <td>2.4mg</td>
             <td>175%</td>
           </tr>
           <tr>
             <td>Vitamin B6</td>
             <td>16.1mg</td>
             <td>1150%</td>
           </tr>
           <tr>
             <td>Folic Acid</td>
             <td>364µg</td>
             <td>182%</td>
           </tr>
           <tr>
             <td>Vitamin A</td>
             <td>341µg</td>
             <td>43%</td>
           </tr>
           <tr>
             <td>Iron</td>
             <td>15.6mg</td>
             <td>111%</td>
           </tr>
           <tr>
             <td>Zinc</td>
             <td>6.3mg</td>
             <td>63%</td>
           </tr>
           <tr>
             <td>Selenium</td>
             <td>56.3µg</td>
             <td>102%</td>
           </tr>
         </tbody>
       </table>
    </div>
  </div>
</div>

<!-- <!--  <!--Container (Portfolio Section) -->
<div id="biological_age" class="container-fluid text-center">
 <h2>Cell age</h2><br>
 <h3></h3>
 <div class="row text-center slideanim">
   <div class="col-sm-6">
     <div class="thumbnail">
       <img alt='' src="img/natural_age.png" alt="" style='height:200px;width:200px'>
       <p><strong>Natural Age</strong></p>
        <p></p>
      </div>
   </div>
   <div class='row slideanim'>
    <div class="col-sm-6">
     <div class="thumbnail">
        <img alt='' src="img/genetic_age.png" alt="" style='height:200px;width:200px'>
        <p><strong>Cell Age</strong></p>
      </div>
    </div>
  </div>
    <h2> How to interpret these results </h2>
   <p>The genetic age is calculated based on the analysis of your cell biology and DNA based on DNA methylation.</p>
   <p> This can be increased by smoking and drinking and poor health </p>
   <p> A poor biological age can be a signiture of early onset dementia </p>
 </div>
<br>


<!-- Container (Contact Section) -->
<div id="connect_devices" class="container-fluid ">
  <h2 class="text-center">Connect with your fitness devices</h2>
  <div class="row">
      <img src='img/nell_connected.png'>
  </div>
</div>

<div id="links" class="container-fluid text-center">
 <h2>Do more!</h2><br>
 <h3></h3>
 <div class="row text-center slideanim">
   <div class="col-sm-4">
     <div class="thumbnail">
       <a href=''> <img alt='' src="img/Thinking_Face_Emoji.png" alt="" style='height:200px;width:200px'>
       <p>Take survey</p>
     </a>
      </div>
   </div>
    <div class="col-sm-4">
     <div class="thumbnail">
       <a href=''>
        <img alt='' src="img/dna-strands-icon.jpg" alt="" style='height:200px;width:200px'>
        <p><strong>Your DNA Analysis</strong></p>
        </a>
      </div>
    </div>
   <div class="col-sm-4">
    <div class="thumbnail">
      <a href=''>
       <img alt='' src="img/discusson.png" alt="" style='height:200px;width:200px'>
       <p><strong>Discuss</strong></p>
       <p>Discuss in a curated forum your results</p></a>
     </div>
   </div>
 </div>
</div>
<br>
<!-- <div id="googleMap" style="height:400px;width:100%;"></div>
 -->
<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(52.5368384,-1.348366599999963);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:16,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--   <p>Bootstrap Theme Made By <a href="http://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
 --></footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

@include('sidenav.sidenav2');

@include('headers.footer');
