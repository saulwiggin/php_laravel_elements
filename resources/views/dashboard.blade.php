
@include('headers.header')


@include('sidenav.sidenav1')
<!-- Page Content -->
  <div id="main" class='toggled' style='width:100%' >
        <!-- Navigation -->
<!--
        <div class='row'>
          <div class='col-md-12'>
            <nav class="navbar navbar-fixed-top ">
              <div class="container-fluid header"style='background-color: white;'>
                <div class="navbar-header ">
                  <a href='http://www.nellnaturalelements.com'><img style='float:left;height:90px;'src='{{ asset('img/Nell_Logo_Main_CMYK.png') }}'}></a>
                  <div class='links' style='float:right;    margin-left: 700px;
    margin-top: 20px;'>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="/upload">Settings</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="http://www.nellelements.com">Logout</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Account</a>
                    <a style='font-family:GTWalsham;margin:10px;color:black;' class="navbar-brand" href="#">Cart</a>
                    <div class="dropdown">

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
        </script> -->
            <!-- Page Content -->

            <div class='page_content_wrapper' style='margin-top:70px;margin-bottom:-100px;'  >
              <div class='dashboard_container' style='position:relative;top:-70px;'>
                <div class="row slideanim" style='margin-top:100px;'>
                      <div class=" text-center">
                        <div class="">
                          <div class='col-md-4'>
                          <div class="card" style="height:350px;">
                            <img class="card-img-top" style='height:150px;'src="{{asset('/img/bottle.png')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Your Products</h5>
                              <p class="card-text">Your Product Recommendations.</p>
                              <a href="/products" style='margin:10px;'class="btn btn-primary">Enter</a>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-4'>
                          <div class="card" style="height:350px;">
                            <img class="card-img-top" style='height:150px;'src="{{asset('/img/brain.png')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Your Bloods</h5>
                              <p class="card-text">Access Your Blood Data.</p>
                              <a href="#" style='margin:10px;'class="btn btn-primary"data-toggle="modal" data-target="#GSCCModal">Enter</a>
                            </div>
                          </div>
                          </div>
                          <div class='col-md-4'>
                            <div class="card" style="height:350px;">
                              <img class="card-img-top" style='height:150px;'src="{{asset('/img/icons/Orange/Nell_Icons_Orange_CMYK-01.png')}}" alt="Card image cap">
                              <div class="card-body">
                                  <h5 class="card-title">Add Genome Data</h5>
                                <p class="card-text"> Collect Data From DNA Data. </p>
                                <a href="/data" style='margin:10px;'class="btn btn-primary">Enter</a>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="row slideanim">
                            <div class=" text-center">
                              <div class="">
                                <div class='col-md-4'>
                                <div class="card" style="height:350px;">
                                  <img class="card-img-top" style='height:150px;'src="{{asset('/img/icons/Orange/Nell_Icons_Orange_CMYK-04.png')}}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title">Devices</h5>
                                    <p class="card-text">Integrate Your FitBit, Oura Ring or Ova Ring</p>
                                    <a href="/products" style='margin:10px;'class="btn btn-primary">Enter</a>
                                  </div>
                                </div>
                              </div>
                              <div class='col-md-4'>
                                <div class="card" style="height:350px;">
                                  <img class="card-img-top" style='height:150px;'src="{{asset('/img/icons/Orange/Nell_Icons_Orange_CMYK-25.png')}}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title">Questionaires</h5>
                                    <p class="card-text">Tell Us More About Yourself To Improve Our Matching.</p>
                                    <a href="#" style='margin:10px;'class="btn btn-primary"data-toggle="modal" data-target="#GSCCModal">Enter</a>
                                  </div>
                                </div>
                                </div>
                                <div class='col-md-4'>
                                  <div class="card" style="height:350px;">
                                    <img class="card-img-top" style='height:150px;'src="{{asset('/img/icons/Orange/Nell_Icons_Orange_CMYK-16.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title"> Edit Your Customer Data </h5>
                                      <p class="card-text"> Collect Data From Personal Questionaires, Connected Devices, DNA Data and Bloods. </p>
                                      <a href="/data" style='margin:10px;'class="btn btn-primary">Enter</a>
                                    </div>
                                  </div>
                                </div>
                                </div>
                              </div>
                            </div>

                    </div>
                  </div>
                </div>

@include('sidenav.sidenav2');

@include('headers.footer');
