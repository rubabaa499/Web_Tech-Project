
function fnamecheck() {
    var fnameval=document.getElementById("name1").value;
    if(fnameval.length<5 || !isNaN(fnameval)){
        document.getElementById("fnameerror").innerHTML="First Name is not  correct";
        return false;
    }
    else if(fnameval===""){
        document.getElementById("fnameerror").innerHTML="First Name cannot be empty";
        return false;
    }
    else{
        document.getElementById("fnameerror").innerHTML="First Name is  correct";
        return true;
      
    }
}
function lnamecheck() {
    var lnameval=document.getElementById("name2").value;
    if(lnameval.length<5 || !isNaN(lnameval)){
        document.getElementById("lnameerror").innerHTML="Last Name is not correct";
        return false;
    }
    else if(lnameval==""){
        document.getElementById("lnameerror").innerHTML="Last Name cannot be empty";
        return false;
    }
    else{
        document.getElementById("lnameerror").innerHTML="Last Name is correct";
        return true;
   
    }

}
function agecheck() {
  var age_regex =/^\d{2}$/;
  var ageval=document.getElementById("age1").value;

   //if age matches return true
    if(ageval.match(age_regex) && ageval!="" && ageval>=18){
        document.getElementById("ageerror").innerHTML="Age is correct";
        return true;
    
    }
    
    else if(ageval==""){
        document.getElementById("ageerror").innerHTML="Age cannot be empty";
        return false;
    }
    else{
        document.getElementById("ageerror").innerHTML="Age is not correct";
        return false;
    }

}
//radio
function checkgender() {
  if (document.getElementById("M").checked == true) {
    document.getElementById("radioerror").innerHTML = "Male is checked";
    return true;
 
  } else if (document.getElementById("F").checked == true) {
    document.getElementById("radioerror").innerHTML = "Female is checked";
    return true;

  } else if (document.getElementById("other").checked == true) {
    document.getElementById("radioerror").innerHTML = "Others is checked";
    return true;

  } else {
    document.getElementById("radioerror").innerHTML =
      "Please select a radioButton";
    return false;
  }
}
function checkmobile() {
    var mobileval=document.getElementById("mob").value;
    if(mobileval.length>=11 && !mobileval==""){
        document.getElementById("Mobilerror").innerHTML="Mobile is correct";
        return true;
    
    }
    //cannot start with +88
    else if(mobileval.startsWith("+88")){
        document.getElementById("Mobilerror").innerHTML="Mobile cannot start with +88";
        return false;
    }
    else{
        document.getElementById("Mobilerror").innerHTML="Mobile is not correct";
        return false;
    }

}

function checkemail() {
  var email_regex =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  var email_regex_aiub = /^w+([-+.']w+)*@[A-Za-zd]+.admin.com$/;
  var emailval=document.getElementById("mail").value;
  if(emailval.match(email_regex) || emailval.match(email_regex_aiub)){
    document.getElementById("emailerror").innerHTML="Email is correct";
    return true;
  }
  else if(emailval==""){
    document.getElementById("emailerror").innerHTML="Email cannot be empty";
    return false;
  }
  else{
    document.getElementById("emailerror").innerHTML="Email is not correct";
    return false;
  }
}
function checkadminname() {
    var adminval=document.getElementById("admin").value;
    //check if admin name is empty
    if(adminval==""){
        document.getElementById("nameerror").innerHTML="Admin name cannot be empty";
        return false;
    }
    else if(!adminval.startsWith(adminval.charAt(0).toUpperCase())){
        document.getElementById("nameerror").innerHTML="Admin name must start with capital letter";
        return false;
    }
    else{
        document.getElementById("nameerror").innerHTML="Admin name is correct";
        return true;
 
    }

}
function checkpass() {
  var pass_regex =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  var passval=document.getElementById("pass1").value;
  if(passval.match(pass_regex) && passval.length>=5 && passval!=""){
    document.getElementById("passerror").innerHTML="Password is correct";
    return true;
  }
  //check password is empty
    else if(passval==""){
        document.getElementById("passerror").innerHTML="Password cannot be empty";
        return false;
    }

  else{
    document.getElementById("passerror").innerHTML="Password must contain at least one uppercase, one digit and one special character";
    return false;
  }
}
function checkconpass() {
    //check if password is same as confirm password
    var passval=document.getElementById("pass1").value;
    var conpassval=document.getElementById("cpass").value;
    if(passval==conpassval){
        document.getElementById("conpasserror").innerHTML="Password Matched";
        return true;
    }
    else if(conpassval==""){
        document.getElementById("conpasserror").innerHTML="Confirm Password cannot be empty";
        return false;
    }
    else{
        document.getElementById("conpasserror").innerHTML="Password is not Matched! Try Again!";
        return false;
    }

}
//file validation for images using regex
function checkfile() {
  var file_regex =/^.*\.(jpg|jpeg|png|gif)$/;
  var fileval=document.getElementById("f1").value;
  if(fileval.match(file_regex) ){
    document.getElementById("fileerror").innerHTML="File is correct";
    return true;
  }

  else{
    document.getElementById("fileerror").innerHTML="File is not correct";
    return false;
  }
}



function checkform() {
    if(fnamecheck()==true && lnamecheck()==true && agecheck()==true && checkgender()==true && checkmobile()==true && checkemail()==true && checkfile()==true && checkadminname()==true && checkpass()==true && checkconpass()==true ){
        document.getElementById("error").innerHTML="All information is provided";
        return true;

    }
    else{
        document.getElementById("error").innerHTML="Please fill up all the fields";
        return false;

    }
}

//ajax
function myAJAXname(){
  
  var adminval=document.getElementById("admin").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxresponse").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "http://localhost/Final_project/Admin_Control/checkname.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("admin="+adminval);
 
}





//jquery

$(document).ready(function(){
  $('#showpass').click(function(){
    var x=$('#pass1');
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
    var x=$('#cpass');
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

