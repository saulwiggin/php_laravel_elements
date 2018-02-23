@include('headers.header')

@include('sidenav.sidenav1')
            <!-- Page Content -->

            <!--personal account information -->
            <div class='page_content_wrapper' style='margin-top:70px;'  >
              <div class='dashboard_container' >

                <!-- customer name -->
                <div class='customer_details' >
                  <div class="row slideanim" style='margin-top:100px;'>
                    <div class="panel panel-default text-center">
                      <div class="panel-heading">
                        <h1>Personal Details</h1>
                      </div>
                      <div class="panel-body" id="app">
                        @{{ message }}
                        <h3>Name</h3>
                        <input type='text' name='username' value=>
                      </div>
                      <div class="panel-footer">
                        <button type='submit' onclick='submit_delivery()'>Save</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Container (Devliery Options) -->

                <div class="row slideanim" style='margin-top:100px;'>
                  <div class=''>
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                          <h1>Delivery Address</h1>
                        </div>
                        <div class="panel-body">
                          <h3>Address 1</h3>
                          <input type='text' name='address1' value='{{ Auth::user()->name }} '>
                          <h3>Address 2</h3>
                          <input type='text' name='address2'>
                          <h3>City</h3>
                          <input type='text' name='city'>
                          <h3>Post Code</h3>
                          <input type='text' name='postcode'>
                        </div>
                        <div class="panel-footer">
                          <button type='submit' onclick='submit_delivery'>Save</button>
                        </div>
                    </div>
                  </div>
              </div>

                  <!-- credit card options -->
                  <div class='row'>
                    <div class="row slideanim" style='margin-top:100px;'>
                      <div class="panel panel-default text-center">
                        <div class="panel-heading">
                          <h1>Credit Card Information</h1>
                        </div>
                        <div class="panel-body">
                          <h3>Card Number</h3>
                          <input type='text' name='cardnumber'>
                          <h3>Sort Code</h3>
                          <input type='text' name='sortcode'>
                          <h3>CSV</h3>
                          <input type='text' name='csv'>
                        </div>
                        <div class="panel-footer">

                      </div>
                    </div>
                  </div>
                </div>


          <!-- close page content -->
        </div>
      </div>
      <!-- /#wrapper -->
      <!--Footer-->
@include('sidenav.sidenav2');

@include('headers.footer');
