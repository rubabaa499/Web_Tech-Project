function passval(){
    var pass_regex =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var passval=document.getElementById("adpass").value;
    if(passval.match(pass_regex) && passval.length>=5 && passval!=""){
      document.getElementById("passworderror").innerHTML="Password is correct";
      return true;
    }
   
      else if(passval==""){
          document.getElementById("passworderror").innerHTML="Password cannot be empty";
          return false;
      }
  
    else{
      document.getElementById("passworderror").innerHTML="Password must contain at least one uppercase, one digit and one special character";
      return false;
    }
}
function adminnameval(){
    var adminval=document.getElementById("admin_id").value;
  
    if(adminval==""){
        document.getElementById("adminerror").innerHTML="Admin name cannot be empty";
        return false;
    }
    else{
        document.getElementById("adminerror").innerHTML="Admin name is correct";
        return true;
 
    }
    
}

function checkform(){
    if(adminnameval()==true && passval()==true){
        return true;
    }
    else{
        return false;
    }

}


$(document).ready(function(){
    $('#showpass').click(function(){
      var x=$('#adpass');
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