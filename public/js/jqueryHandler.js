$(document).ready(function () {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $("#test").click(function() {
      $.ajax({
      url:"test",
      method:"put",
      data:{action:"testing"},
      success: function(message){
        alert(message);
      },
    })
    })
  })