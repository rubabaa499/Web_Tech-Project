<?php
include("../manager_controller/ticketprocess.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Board</title>
    

</head>

<body>

<form action="" method="POST">

    <fieldset>
        <fieldset>
            <h2 align="center">Star Cineplex</h2>
            <h4 align="center">Grab The Tickets For Entertainment</h4>

        
        </fieldset>
        <fieldset>
    <p><a href="#">Book Ticket</a>
     | <a href="https://www.facebook.com/rubaba.rahman.319/">Contact with manager</a>
     |<a href="../manager_view/updateview.php">Update Hall</a>
     |<a href="../manager_view/ajax.php">Employee info</a>
    | <a href="../manager_view/loginview.php">Logout</a>
    
    
 </p>
 </fieldset>
 
   

        <fieldset>
            <h3>
            Customer's Name : 
            <input type="text" name="Customers_nam" placeholder="Customers_nam">
         <?php
             echo $invalid_customer_name;
         ?>
            </h3>
        </fieldset>
    </fieldset>
    <br><br>
     <marquee behavior="" direction=""><mark> সকল দর্শকদের অবগতির জন্য জানানো যাচ্ছে যে প্রতি সপ্তাহের মঙ্গলবার সাপ্তাহিক বন্ধ থাকবে</mark></marquee>
   <br>
    <br><br><br>
   
<center>

 
        <img src="../images/intrusion.jpg" srcset="" width="20%"><br> 
        <input type="radio" name="movie" value="Intrusion"><a href="https://en.wikipedia.org/wiki/Intrusion_(film)#:~:text=Intrusion%20is%20a%202021%20American,Intrusion">
        Intrusion <br>
        <b>Director:</b>  <a href="https://www.imdb.com/name/nm1270069/">Adam Salky</a></p>
        <p> <b>Cast:</b>  Freida Pinto, Logan Marshall-Green, Robert John Burke, Sarah Minnich, Clint Obenchain</p>
        <p> <b>Genre:</b> Thriller </p>
        <h3>Movie Timetable</h3>
        
        <input type="radio" name="clock" value="Thursday at 2 PM" >Thursday 2:00 PM
        <input type="radio" name="clock" value="Tuesday at 8 PM">Tuesday 8:00 PM


        
    <br><br>


        <img src="../images/topgun.jpg" srcset="" width="20%"><br>
        <input type="radio" name="movie" value="Topgun"> <a href="https://en.wikipedia.org/wiki/Top_Gun:_Maverick">
        Topgun
        <p><b>Director:</b> <a href="https://en.wikipedia.org/wiki/Tony_Scott">Tony Scott</a></p>
       <p><b>Cast:</b> Tom Cruise, Miles Teller, Jon Hamm , Glen Powell </p>
       <p><b>Genre:</b> Action</p> 
        <h3>Movie Timetable</h3>
        
        <input type="radio" name="clock" value="Wednesday at 2 PM">Wednesday 2:00 PM
        <input type="radio" name="clock" value="Thursday at 8 PM">Thursday 8:00 PM


        <!-- <?php
        //echo $invalid_clock; 
        ?> -->
   <br><br>
        <img src="../images/strange.jpg" srcset="" width="20%"><br>
       
            
        <input type="radio" name="movie" value="Strange"> 
        <a href="https://en.wikipedia.org/wiki/Doctor_Strange_in_the_Multiverse_of_Madness">Strange
        <p><b>Director:</b>  <a href="https://en.wikipedia.org/wiki/Scott_McQuillan">Scott McQuillan</a></p>
       <p><b> Cast:</b> Elizabeth Olsen, Chiwetel Ejiofor, Benedict Wong, Michael Stuhlbarg</p>
       <p><b> Genre:</b> Superhero</p>
        <h3>Movie Timetable</h3>
    
        <input type="radio" name="clock" value="Friday at 2 PM">Friday 2:00 PM
        <input type="radio" name="clock" value="Monday at 8 PM">Monday 8:00 PM
        <br><br>

</center>

<fieldset>
    <h2>Select a Hall : </h2>
    <input type="radio" name="hall" value="Hall X">Hall X
    <input type="radio" name="hall" value="Hall Z">Hall Z
    <?php
echo  $invalid_hall;
    ?>
    
</fieldset>

 <h3>Please Inform us your comments or issues:</h3>

 <textarea name="comment">
     <?php echo  $comment;
     ?>
    </textarea>
 <h2>
     <br>
 Contact Us:
 Phone: *023455678 <br>
 email: 
 <a href="https://www.google.com/gmail/about/">Starcineplex@gmail.com</a>

 </h2>
<br><br>
<center>
<input type="submit" name="submit" value="DONE">
</center>
</form>
</body>
</html>