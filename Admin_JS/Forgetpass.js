



$(document).ready(function(){
    $('#showpass').click(function(){
      var x=$('#newpass');
      var y=x.attr('type');
      if(y=='password'){
        x.attr('type','text');
        $(this).text('Hide Password');
      }
      else{
        x.attr('type','password');
        $(this).text('Show Password');
      }
    });
  });
  
  $(document).ready(function(){
    $('#showpass2').click(function(){
      var x=$('#conpass');
      var y=x.attr('type');
      if(y=='password'){
        x.attr('type','text');
        $(this).text('Hide Password');
      }
      else{
        x.attr('type','password');
        $(this).text('Show Password');
      }
    });
  });