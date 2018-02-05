<div class='body_reports' style='height:700px;'>
  <div class='row'>
    <!-- <canvas id='demo' style='width:200px;height:200px;'></canvas> -->
    <div class='col-md-4'>
      <div class="container">
        <!-- <h2>Simple Collapsible</h2> -->
        <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button> -->
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
    <!-- <svg id='path_to_weight'>
      <path  id='path_to_weight' class="path" stroke="#000000" stroke-width="5" d='M 0 0
                                                                                     0 100
                                                                                     300 100
                                                                                      300 0'>
    </svg> -->
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
          <!-- <h2>Simple Collapsible</h2> -->
          <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button> -->

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
