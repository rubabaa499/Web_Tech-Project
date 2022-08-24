function checkfname() {

    var f_name = document.getElementById("f_name").value;

    if (f_name == "") {
        document.getElementById("fnameerr").innerHTML = "Please enter your first name";

    }
    //check if the string has n0 numbers
    else if (!f_name.match(/^[a-zA-Z]+$/)) {
        document.getElementById("fnameerr").innerHTML = "Please enter a valid first name";
    }
    else {
        document.getElementById("fnameerr").innerHTML = "Name inserted";
    }
}

function checklname() {

    var l_name = document.getElementById("l_name").value;

    if (l_name == "") {
        document.getElementById("lnameerr").innerHTML = "Please enter your last name";

    }
    //check if the string has n0 numbers
    else if (!l_name.match(/^[a-zA-Z]+$/)) {
        document.getElementById("lnameerr").innerHTML = "Please enter a valid last name";
    }
    else {
        document.getElementById("lnameerr").innerHTML = "Name inserted";
    }
}

function radiocheck() {
    if (document.getElementById("male").checked == true) {
        document.getElementById("radioerr").innerHTML = "Male selected";
    }
    else if (document.getElementById("female").checked == true) {
        document.getElementById("radioerr").innerHTML = "Female selected";
    }
    else if (document.getElementById("others").checked == true) {
        document.getElementById("radioerr").innerHTML = "Others selected";
    }
    else {
        document.getElementById("radioerr").innerHTML = "Please select your gender";
    }
}



function mobcheck() {
    var mob = document.getElementById("mobile").value;
    if (mob == "") {
        document.getElementById("moberr").innerHTML = "Please enter your mobile number";
    }
    else if (!mob.match(/^[0-9]{11}$/)) {
        document.getElementById("moberr").innerHTML = "Please enter a valid mobile number";
    }
    else {
        document.getElementById("moberr").innerHTML = "Mobile number inserted";
    }
}

function emailcheck() {
    var email = document.getElementById("email").value;
    if (email == "") {
        document.getElementById("emailerr").innerHTML = "Please enter your email";
    }
    else if (!email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)) {
        document.getElementById("emailerr").innerHTML = "Please enter a valid email";
    }

    else {
        document.getElementById("emailerr").innerHTML = "Email inserted";
    }
}

function addcheck() {
    var add = document.getElementById("address").value;
    if (add == "") {
        document.getElementById("adderr").innerHTML = "Please enter your address";
    }
    else {
        document.getElementById("adderr").innerHTML = "Address inserted";
    }
}

function passcheck() {
    var pass = document.getElementById("pass").value;
    if (pass == "") {
        document.getElementById("passerr").innerHTML = "Please enter your password";
    }
    else if (!pass.match(/^[a-zA-Z0-9]{8,}$/)) {
        document.getElementById("passerr").innerHTML = "Please enter a 8 word password";
    }
    else {
        document.getElementById("passerr").innerHTML = "Password inserted";
    }
}

function concheck() {
    //confirm password check
    var pass = document.getElementById("pass").value;
    var conpass = document.getElementById("con").value;
    if (conpass == "") {
        document.getElementById("conerr").innerHTML = "Please confirm your password";
    }
    else if (pass != conpass) {
        document.getElementById("conerr").innerHTML = "Passwords do not match";
    }
    else {
        document.getElementById("conerr").innerHTML = "Password confirmed";
    }

}
function submit() {
    if (checkfname() == true && checklname() == true && radiocheck() == true && mobcheck() == true && emailcheck() == true && addcheck() == true && passcheck() == true) {
        document.write("ok");
        return true;
    }
    else {
        document.write(" not ok");
        return false;
    }
}
