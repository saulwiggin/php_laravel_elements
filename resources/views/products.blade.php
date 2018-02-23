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
                          <h1>RECIPE 1  (DAILY HEALTH) </h1>
                          <h3> BENEFIT AREAS: GENERAL HEALTH + OXIDATIVE STRESS </h3>
                        </div>
                        <div class="panel-body" id="product" style='height:350px;'>
                          <h2>Flavours </h2>
                          <h3>Chocolate Cacao and Vanilla flavour</h3>
                          <h2>Recommendations </h2>
                          <h5>
                          Must be able to mix with Water or milks (Normal Milk, Hazelnut, Cashew or Almond)
                          Great sprinkled on  Porridge
                          Add as a booster to your daily Smoothie rituals</h5>
                        </div>
                        <div class="panel-footer">
                          <a href='reports' class='btn btn-default'type='submit' onclick='submit_delivery()'>Nutrition Report</a>
                          <a href='dispatch' class='btn btn-default'type='submit' onclick='order()'>Order</a>
                      </div>
                    </div>
                </div>
              </div>
              <!-- </div> -->

          <!-- close page content -->

<!-- product page javascript -->
          <script src="/js/welcome.js"></script>

        </div>
      <!-- /#wrapper -->
      <!--Footer-->
@include('sidenav.sidenav2');

@include('headers.footer');
