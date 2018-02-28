@include('headers.header')

@include('sidenav.sidenav1')
<!-- Page Content -->
  <div id="main" class='toggled' style='width:100%' >
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
                </div>

@include('sidenav.sidenav2');

@include('headers.footer');
