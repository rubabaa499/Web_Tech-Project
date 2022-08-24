<?php

session_start();
include("../sellerModel/db.php");
if(empty($_SESSION["Seller_name"]) && empty($_SESSION["Seller_pass"])){
    header("Location: ../Seller_View/Seller_Login.php");
}
include("../Seller_Control/process.php");



echo "<h3 class='sname'>Seller Name : <span class='spanclass'>".$_SESSION["Seller_name"]."</span></h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Board</title>
    <link rel="stylesheet" href="../sellerCSS/Home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../sellerJS/Jquery.js"></script>

</head>
<body>
<form action="" method="POST">
 
    
<div class="header">          
                     <h2>Star Cineplex</h2>
            Grab The Tickets For Entertainment
            </div> 
       
        <div class="sticky">
  <div class="topnav">
     <!-- | <a href="#">Book ticket</a> -->

    | <a href="../Seller_View/Aboutus.php"><h3>ABOUT US</h3></a>
    | <a href="../Seller_View/Ticket.php"><h3>TICKET</h3></a>
    |<a href="../Seller_View/Update.php"><h3>UPDATE AND PROCESS</h3></a>
    | <a href="https://github.com/RomonaSarkar16"><h3>CONTACT SELLER</h3></a>
    | <a href="../Seller_View/SellerNotice.php"><h3>SELLER NOTICE BOARD</h3></a>
    | <a href="../Seller_Control/Seller_Logout.php"><h3>LOGOUT</h3></a>
    </div>

    </div>
 
   

  
         <div class="Cnam">
            Customer's Name : 
            <input type="text" name="Customers_nam" placeholder="Customers name">
            </div>
         <?php
             echo $invalid_customer_name;
         ?>
           
         
   
  



 <div class="parent">
     <div class="child">
        <img src="../Images/poran.jpg" srcset="" width="10px"><br> 
        <input type="radio" name="movie" value="Poran"><a href="https://en.wikipedia.org/wiki/Intrusion_(film)#:~:text=Intrusion%20is%20a%202021%20American,Intrusion">
        Poran<br>
 
     
        <b>Director:</b>  <a href="https://www.imdb.com/name/nm1270069/">Adam Salky</a></p>
        <p> <b>Cast:</b>  Freida Pinto, Logan Marshall-Green, Robert John Burke, Sarah Minnich, Clint Obenchain</p>
        <p> <b>Genre:</b> Thriller </p>
        <h3>Movie Timetable</h3>
        
        <input type="radio" name="clock" value="Thursday at 2 PM" >Thursday 2:00 PM
        <input type="radio" name="clock" value="Tuesday at 8 PM">Tuesday 8:00 PM
        

        </div>
        
    <br><br>

<div class="child">
        <img src="../Images/p.jpg" srcset="" width="10%"><br>
        <input type="radio" name="movie" value="Pushpa"> <a href="https://en.wikipedia.org/wiki/Top_Gun:_Maverick">
        Pushpa
        <p><b>Director:</b> <a href="https://en.wikipedia.org/wiki/Tony_Scott">Tony Scott</a></p>
       <p><b>Cast:</b> Tom Cruise, Miles Teller, Jon Hamm , Glen Powell </p>
       <p><b>Genre:</b> Action</p> 
        <h3>Movie Timetable</h3>
        
        <input type="radio" name="clock" value="Wednesday at 2 PM">Wednesday 2:00 PM
        <input type="radio" name="clock" value="Thursday at 8 PM">Thursday 8:00 PM

        </div>
        <!-- <?php
        //echo $invalid_clock; 
        ?> -->
   <br><br>
   <div class="child">
        <img src="../Images/spiderman.jpg" srcset="" width="10%"><br>
       
            
        <input type="radio" name="movie" value="Spiderman"> 
        <a href="https://en.wikipedia.org/wiki/Doctor_Strange_in_the_Multiverse_of_Madness">Spider Man
        <p><b>Director:</b>  <a href="https://en.wikipedia.org/wiki/Scott_McQuillan">Scott McQuillan</a></p>
       <p><b> Cast:</b> Elizabeth Olsen, Chiwetel Ejiofor, Benedict Wong, Michael Stuhlbarg</p>
       <p><b> Genre:</b> Superhero</p>
        <h3>Movie Timetable</h3>
    
        <input type="radio" name="clock" value="Friday at 2 PM">Friday 2:00 PM
        <input type="radio" name="clock" value="Monday at 8 PM">Monday 8:00 PM
        <br><br>
        </div>
   <br><br>
   <div class="child">
        <img src="../Images/hawa.jpg" srcset="" width="10%"><br>
       
            
        <input type="radio" name="movie" value="Hawa"> 
        <a href="https://en.wikipedia.org/wiki/Doctor_Strange_in_the_Multiverse_of_Madness">Hawa
        <p><b>Director:</b>  <a href="https://en.wikipedia.org/wiki/Scott_McQuillan">Scott McQuillan</a></p>
       <p><b> Cast:</b> Elizabeth Olsen, Chiwetel Ejiofor, Benedict Wong, Michael Stuhlbarg</p>
       <p><b> Genre:</b> Superhero</p>
        <h3>Movie Timetable</h3>
    
        <input type="radio" name="clock" value="Friday at 2 PM">Friday 2:00 PM
        <input type="radio" name="clock" value="Monday at 8 PM">Monday 8:00 PM
        <br><br>
        </div>
</div>



    <div id="hall">
    <h2>Select a Hall : </h2>
    <input type="radio" name="hall" value="Hall X">Hall X
    <input type="radio" name="hall" value="Hall Z">Hall Z
    </div>
    <?php
echo  $invalid_hall;
    ?>
   
   <div id="flip">Top 3 Movies Coming Soon</div>
<div id="panel">

 <div class="parent1">
     <div class="movie">
     <img src="../Images/vio.jpg" srcset="" width="10px">
     </div>
     <div class="movie">
     <img src="../Images/pus.png" srcset="" width="10px">
     </div>
     <div class="movie">
     <img src="../Images/am.jpg" srcset="" width="10px">
     </div>
 </div>

</div>

<div class="footer">
 <h3>Please Inform us your comments or any issues:</h3>

 Contact Us: <br>
 Phone: *023455678 <br>
 email: 
 <a href="https://www.google.com/gmail/about/">Starcineplex@gmail.com</a>


</div>

<input type="submit" name="submit" value="DONE">

</form>



</body>
</html>