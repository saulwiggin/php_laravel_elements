<script>
function submit_delivery(){
  $.ajax({
   dataType:'json',
   type: "POST",
   url: '/settings/account',
   data: {username: username},
    success: function(data){
    	console.log(data);
    },
    error: function(error){
    	console.log(error);
    },
  });
}
</script>
