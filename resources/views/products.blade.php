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
                          <h1 id='receipe'>DAILY HEALTH </h1>
                          <h3 id='benefitarea'> GENERAL HEALTH + OXIDATIVE STRESS </h3>
                        </div>
                        <div class="panel-body" id="product" style='height:350px;'>
                          <h3><i>Chocolate Cacao and Vanilla flavour</i></h3>
                          <h2> Ingredients </h2>
                          <p>Vitamin D				Powdered, Spirulina, White Button, Shitka, Oyster, Button, Porcini mushrooms
                            Selenium 				Ground walnut and ground Sunflower seeds
                            Riboflavin				Psyllium Husks or Inulin
                            Omega 3, Omega 6   			Ground Linseed, Ground FlaxSeed and whole chia seeds
                            Omega 9
                            linoleic acid  alpha-linoleic
                            Vitamin A, B Complex, 			Kelp / Spirulina / Broccoli powder
                            C,E,K
                            </p>
                          <h2>Recommendations </h2>
                          <p>
                          Mix with Water or milks (Normal Milk, Hazelnut, Cashew or Almond)
                          Great sprinkled on  Porridge
                          Add as a booster to your daily Smoothie rituals</p>
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
