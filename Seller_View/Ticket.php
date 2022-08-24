<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" href="../sellerCSS/Ticket.css">
</head>
<body>
    <h1 class="ticket">Ticket</h1>
   
<div class="tic">
<?php
echo "Ticket Name : " . $_SESSION["Customers_nam"];
echo"<br>";
echo"Ticket No : "  . rand(100,300);
echo"<br>";
echo "Seat No : " . (rand(1,30));
echo"<br>";
echo"Movie Name :" . $_SESSION["movie"]; 
echo"<br>";
echo "Movie Timing : " . $_SESSION["clock"];
echo"<br>";
echo"Hall :" . $_SESSION["hall"];
echo"<br>";
?>

</div>








    <a href="../Seller_View/Seller.php">
    <input type="button" name="OK" value="OK" id="submit">
</a>
</body>
</html>