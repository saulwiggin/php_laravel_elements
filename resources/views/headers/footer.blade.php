@section('footer')
<!-- /#wrapper -->
<!--Footer-->
<div class='row' style='margin-left:240px'>
  <div class='col-md-12'>
  <footer class="page-footer center-on-small-only" style='background-color:white'>

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
              <img style='width:250px;    margin-left: 30px;  margin-top: -30px;'src='{{asset('img/Nell_Logo_Main_CMYK.png')}}'>
            </div>
              <!--Second column-->
              <div class="col-md-2">
                  <h5 class="title"></h5>
                  <ul style='font-color:black;font-family:Walsheim;font-size: 18px;'>
                      <li><a style='color:black'class=''href="#!">About Nell</a></li>
                      <li><a style='color:black'href="#!">Customer Reviews</a></li>
                      <li><a style='color:black'href="#!">Investor Relations</a></li>
                      <li><a style='color:black'href="#!">FAQ</a></li>
                  </ul>
              </div>
              <!--/.Second column-->
          </div>
      </div>
      <!--/.Footer Links-->

      <!--Copyright-->
      <div class="footer-copyright">
          <div class="container-fluid" style='color:black'>
              © 2017 Copyright: <a href="http://www.nell.co.uk"> Nell Natural Elements </a>

          </div>
      </div>
      <!--/.Copyright-->

  </footer>
</div>
</div>
<!--/.Footer-->


<!--close page wrapper -->
</div>
<!-- close page content -->
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
@show
