@include('headers.header')

@include('sidenav.sidenav1')
            <!-- Page Content -->

            <div class='page_content_wrapper' style='margin-top:70px;'>
              <!-- container (landing page - welcome or Questionaire) -->


            <!-- container product -->
              <div class='products_container' style=''>
                  <div class='row'>
                    <div class='col-md-2'>
                      <img src='{{asset('img/purple_bottle.png')}}'>

                    </div>
                    <div class='col-md-offset-6'>
                      <div class="panel panel-default text-center">
                        <div class="panel-heading">
                          <h1>Title</h1>
                        </div>
                        <div class="panel-body" id="app">
                          @{{ message }}
                          <h3>Benefit Areas</h3>

                          <h3>Personlisation</h3>
                        </div>
                        <div class="panel-footer">
                          <button type='submit' onclick='submit_delivery()'>Nutrition Report</button>
                          <button type='submit' onclick='order()'>Order</button>
                      </div>
                    </div>
                </div>
              </div>
              <!-- </div> -->

          <!-- close page content -->


        </div>
      <!-- /#wrapper -->
      <!--Footer-->
@include('sidenav.sidenav2');

@include('headers.footer');
