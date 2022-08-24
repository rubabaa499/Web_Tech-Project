
let popup=document.getElementById("popup");
let bookPopup=document.getElementById("bookPopup");
let histPopup=document.getElementById("histPopup");
let email=document.getElementById("email");

function openPopup(){
    popup.classList.add("openPopup");
}
function closePopup(){
    popup.classList.remove("openPopup");
}

function openBook()
{
   bookPopup.classList.add("openBook");
}
function closeBook()
{
   bookPopup.classList.remove("openBook");
}

function hawa()
{
    document.getElementById("mname").value="Hawa";
}

function poran()
{
    document.getElementById("mname").value="Poran";
}

function bullet()
{
    document.getElementById("mname").value="Bullet Train";
}

function love()
{
    document.getElementById("mname").value="Love and Thunder";
}

function openHist()
{
    histPopup.classList.add("openHist");
}
function closeHist()
{
    histPopup.classList.remove("openHist");
}



