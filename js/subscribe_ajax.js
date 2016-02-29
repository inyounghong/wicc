$(document).ready(function(){
  $("#submit").click(function(event) {
    event.preventDefault();

    var netid = $("#netid").val();
    if (netid.length <= 2){
      $("#error").html("Please input a valid netID");
    } else{
      $.ajax({
        type: 'POST',
        url: $("form").attr('action'),
        data: $('form').serialize(),
        success: function(res){
          $("#error").html(res);
        }
      });
    }
  });
});