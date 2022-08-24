function checkname1()
{
    var namevalue=document.getElementById("fname").value;
    if(!isNaN(namevalue) || namevalue==""|| namevalue==null || namevalue.match(/[0-9]/) || namevalue.length<4 )
    {
document.getElementById("nameError1").innerHTML="Name is not corect";
    }
    else
    {
document.getElementById("nameError1").innerHTML="OK";
    }
}
//name
function checkname2()
{
    var namevalue1=document.getElementById("lname").value;
    if(!isNaN(namevalue1) || namevalue1==""|| namevalue1==null || namevalue1.match(/[0-9]/) || namevalue1.length<4 )
    {
document.getElementById("nameError2").innerHTML="Name is not corect";
    }
    else
    {
document.getElementById("nameError2").innerHTML="OK";
    }
}
function ageval()
{
var age = document.getElementById("age").value;
if(isNaN(age) ||age<24||age>60)
{
    document.getElementById("ageerror").innerHTML="Please give a valid age";
}
else
{
    document.getElementById("ageerror").innerHTML="OK";
}

}
function getradioval()
{

    if(document.getElementById("male").checked == true)
    {
        document.getElementById("radiovalue").innerHTML="You Checked Male";
    }
    else if(document.getElementById("female").checked == true)
    {
        document.getElementById("radiovalue").innerHTML="You Checked Female";
    }
    else if(document.getElementById("other").checked == true)
    {
        document.getElementById("radiovalue").innerHTML="You Checked Other";
    }

    else
    {
        document.getElementById("radiovalue").innerHTML="PLease select Your Gender !";
    }
  
}
//address
function checkads()
{
  
    var ads= document.getElementById("ads").value;
     if(ads.length < 20 || ads.length > 100)
    {
        document.getElementById("Errorads").innerHTML=" Your textarea must be 20 to 100 characters"; 
    }
    else
    {
        document.getElementById("Errorads").innerHTML="Valid Address";
    }
}
//test
function emailValid()
{
    var mail = document.getElementById("email").value;

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var mailstat = validRegex.test(mail);

    if(mailstat)
    {
        document.getElementById("mailerror").innerHTML ="Email OK";
    }
    else
    {
        document.getElementById("mailerror").innerHTML="Error"
    }
}
//file

function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
       
        document.getElementById("file").innerHTML="Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
//split used
function checkSname()
{
    var Sname = document.getElementById("Sname").value;
    if(Sname.split(" ").length<2)
       {
        document.getElementById("errorSname").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       
       else
       {
        document.getElementById("errorSname").innerHTML= "ok";

       }
       

}
//pass
function checkpw()
{
    var p = document.getElementById('pass').value;
    var errors = []
  
    if (p.length < 8) {
      errors.push("Your password must be at least 8 characters")
    }
    if (p.search(/[a-z]/) < 0) {
      errors.push("Your password must contain at least one lowercase letter.")
    }
    if (p.search(/[A-Z]/) < 0) {
      errors.push("Your password must contain at least one uppercase letter.")
    }
    if (p.search(/[0-9]/) < 0) {
      errors.push("Your password must contain at least one digit.")
    }
    if(p.search(/[\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:\-]/) < 0) {
      errors.push("Your password must contain at least one special character.")
    }
      
    if (errors.length > 0) {
        document.getElementById("errors").innerHTML = errors.join("<br> ")
      return false;
    }
    else
    {
document.getElementById("errors").innerHTML="Password OK";
return true;
    }

}
function pwmatch()
{
    var password= document.getElementById("pass").value;
    var confirmpassword=document.getElementById("mpass").value;
    if(!(password==confirmpassword))
    {
      document.getElementById("errormatch").innerHTML= "*Password and confirm password have to be same";
    return false;
    }
    else {
      document.getElementById("errormatch").innerHTML= "Password Matched";
    }
}

function checkform_id() 
{
    if(checkname1()==true && checkname2()==true && ageval()==true && getradioval()==true && checkads()==true && emailValid()==true 
    && fileValidation()==true && checkSname()==true && checkpw()==true && pwmatch()==true )
    {
     
     document.getElementById("error").innerHTML="All information is provided";
  
     return true;
    }
    else
    {
  
        document.getElementById("error").innerHTML="Please input all info ";
        return false;
    }
}

