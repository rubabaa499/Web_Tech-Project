function afterclicked()
{
    var a = document.getElementById("myinput").value;
    var b = document.getElementById("myprint");
    b.innerHTML= "the "+a+" was this";

}





function fnamecheck() {
    var fnameval=document.getElementById("name1").value;
    if(fnameval.length<5 || !isNaN(fnameval)){
        document.getElementById("fnameerror").innerHTML="First Name is not  correct";
        return false;
    }
    else if(fnameval==""){
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
  var age_reg =/^\d{2}$/;
  var ageval=document.getElementById("age1").value;

   //if age matches return true
    if(ageval.match(age_reg) && ageval!="" && ageval>=18){
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
  var email_reg =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  var emailval=document.getElementById("mail").value;
  if(emailval.match(email_reg)){
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
function checkmanagername() {
    var managerval=document.getElementById("manager").value;
    //check if admin name is empty
    if(managerval==""){
        document.getElementById("nameerror").innerHTML="Admin name cannot be empty";
        return false;
    }
    else{
        document.getElementById("nameerror").innerHTML="Admin name is correct";
        return true;
 
    }

}
function checkpass() {
  var pass_reg =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  var passval=document.getElementById("pass1").value;
  if(passval.match(pass_reg) && passval.length>=5 && passval!=""){
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
  if(fileval.match(file_regex) && fileval!=""){
    document.getElementById("fileerror").innerHTML="File is correct";
    return true;
  }
  else if(fileval==""){
    document.getElementById("fileerror").innerHTML="File cannot be empty";
    return false;
  }
  else{
    document.getElementById("fileerror").innerHTML="File is not correct";
    return false;
  }
}



function checkform() {
    if(fnamecheck()==true && lnamecheck()==true && agecheck()==true && checkgender()==true && checkmobile()==true && checkemail()==true && checkfile()==true && checkmanagername()==true && checkpass()==true && checkconpass()==true ){
        document.getElementById("error").innerHTML="All information is provided";
        return true;

    }
    else{
        document.getElementById("error").innerHTML="Please fill up all the fields";
        return false;

    }
}