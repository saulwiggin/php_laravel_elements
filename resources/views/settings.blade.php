@include('headers.header')

@include('sidenav.sidenav1')
            <!-- Page Content -->

            <!--personal account information -->
            <div class='page_content_wrapper' style='margin-top:70px;'  >
              <div class='dashboard_container' >

                <!-- customer name -->
                <div class='customer_details' >
                  <div class="row slideanim" style='margin-top:100px;'>
                    <form method='post' action='/accountupdate'>
                      {{ csrf_field() }}
                    <div class="panel panel-default text-center" style='    width: 550px;
  position: relative;
  margin-left: auto;
  margin-right: auto;'>
                        <div class="panel-heading">
                          <h1>Personal Details</h1>
                        </div>
                        <div class="panel-body">
                            <h3>Name</h3>
                            <input style='font-size:16px'type='text' name='username' value='{{ $account->username}}'>
                        </div>
                        <div class="panel-footer">
                          <button type='submit' onclick=''style='border-radius: 50%;
    height: 40px;
    width: 95px;'>Save</button>
                      </div>
                    </form>
                  </div>
                </div>

              <script>
                function submit_delivery(){
                  console.log(submit);
                }
              </script>
              <!-- Container (Devliery Options) -->

                <div class="row slideanim" style='margin-top:100px;'>
                  <div class=''>
                    <form method='post'action='/form_submission'>
                      {{ csrf_field() }}
                      <div class="panel panel-default text-center" style='    width: 550px;
    position: relative;
    margin-left: auto;
    margin-right: auto;'>
                          <div class="panel-heading">
                            <h1>Delivery Address</h1>
                          </div>
                          <div class="panel-body">
                            <h3>Address 1</h3>
                            <input style='font-size:16px'type='text' name='address1' value='{{ $delivery->Address_1 }} '>
                            <h3>Address 2</h3>
                            <input style='font-size:16px'type='text' name='address2' value='{{ $delivery->Address_2 }}'>
                            <h3>City</h3>
                            <input style='font-size:16px'type='text' name='city' value='{{ $delivery->city }}'>
                            <h3>Post Code</h3>
                            <input style='font-size:16px'type='text' name='postcode' value='{{ $delivery->Postcode }}'>
                          </div>
                          <div class="panel-footer">
                            <button type='submit' onclick='submit_delivery'style='border-radius: 50%;
      height: 40px;
      width: 95px;'>Save</button>
                          </div>
                      </div>
                    </form>
                  </div>

                  <!-- credit card options -->
                  <div class='row'>
                    <div class="row slideanim" style='margin-top:100px;'>
                      <form method='post'action='/credit_card'>
                        {{ csrf_field() }}
                      <div class="panel panel-default text-center" style='    width: 550px;
    position: relative;
    margin-left: auto;
    margin-right: auto;'>

                        <div class="panel-heading">
                          <h1>Credit Card Information</h1>
                        </div>
                        <div class="panel-body">
                          <h3>Card Number</h3>
                          <input style='font-size:16px'type='text' name='cardnumber' value='{{ $payment->card_number }}'>
                          <h3>Sort Code</h3>
                          <input style='font-size:16px'type='text' name='sortcode' value='{{ $payment->expiry_date }}'>
                          <h3>CSV</h3>
                          <input style='font-size:16px'type='text' name='csv' value='{{ $payment->csv }}'>
                        </div>
                        <div class="panel-footer">
                          <button type='submit' onclick='submit_delivery'style='border-radius: 50%;
    height: 40px;
    width: 95px;'>Save</button>

                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

      <!-- /#wrapper -->
      <!--Footer-->
@include('sidenav.sidenav2');

@include('headers.footer');
