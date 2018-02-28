<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
.parallax {
    /* The image used */
    background-image: url("img/background_subpage.jpg");

    /* Set a specific height */
    height: 500px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<!-- Container element -->
<div class="parallax" style=''>
  <div class="panel panel-default" style='position:relative;top:50px;margin-left:auto;margin-right:auto;width:400px;'>
      <div class="panel-heading"></div>
        <div class="panel-body">
          <div style='z-index:2;margin-left:auto;margin-right:auto;position:relative;'class="fulfilling-bouncing-circle-spinner">
        <div class="circle"></div>
        <div class="orbit"></div>
      </div>
    </div>
  </div>
</div>

</div>
<style>
.fulfilling-bouncing-circle-spinner, .fulfilling-bouncing-circle-spinner * {
      box-sizing: border-box;
    }

    .fulfilling-bouncing-circle-spinner {
      height: 60px;
      width: 60px;
      position: relative;
      animation: fulfilling-bouncing-circle-spinner-animation infinite 4000ms ease;
    }

    .fulfilling-bouncing-circle-spinner .orbit {
      height: 60px;
      width: 60px;
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 50%;
      border: calc(60px * 0.03) solid #ff1d5e;
      animation: fulfilling-bouncing-circle-spinner-orbit-animation infinite 4000ms ease;
    }

    .fulfilling-bouncing-circle-spinner .circle {
      height: 60px;
      width: 60px;
      color: #ff1d5e;
      display: block;
      border-radius: 50%;
      position: relative;
      border: calc(60px * 0.1) solid #ff1d5e;
      animation: fulfilling-bouncing-circle-spinner-circle-animation infinite 4000ms ease;
      transform: rotate(0deg) scale(1);
    }

    @keyframes fulfilling-bouncing-circle-spinner-animation {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes fulfilling-bouncing-circle-spinner-orbit-animation {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1);
      }
      62.5% {
        transform: scale(0.8);
      }
      75% {
        transform: scale(1);
      }
      87.5% {
        transform: scale(0.8);
      }
      100% {
        transform: scale(1);
      }
    }

    @keyframes fulfilling-bouncing-circle-spinner-circle-animation {
      0% {
        transform: scale(1);
        border-color: transparent;
        border-top-color: inherit;
      }
      16.7% {
        border-color: transparent;
        border-top-color: initial;
        border-right-color: initial;
      }
      33.4% {
        border-color: transparent;
        border-top-color: inherit;
        border-right-color: inherit;
        border-bottom-color: inherit;
      }
      50% {
        border-color: inherit;
        transform: scale(1);
      }
      62.5% {
        border-color: inherit;
        transform: scale(1.4);
      }
      75% {
        border-color: inherit;
        transform: scale(1);
        opacity: 1;
      }
      87.5% {
        border-color: inherit;
        transform: scale(1.4);
      }
      100% {
        border-color: transparent;
        border-top-color: inherit;
        transform: scale(1);
      }
    }
</style>
<script>
// Your application has indicated there's an error
   window.setTimeout(function(){

       // Move to a new location or you can do something else
       window.location.href = "/nutrition_report";

   }, 30000);
</script>
