<?php
   // create short variable names
   $tireqty = $_POST['tireqty'];
   $oilqty = $_POST['oilqty'];
   $sparkqty = $_POST['sparkqty'];
   $find = $_POST['find'];
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Bob's Auto Parts - Order Results</title>
   </head>
   <body>
      <h1>Bob's Auto Parts</h1>
      <h2>Order Results</h2>
      <?php
         date_default_timezone_set('America/New_York');
         echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
         echo '<p>Your order is as follows: </p>';
         echo $tireqty.' tires<br />';
         echo $oilqty.' bottles of oil<br />';
         echo $sparkqty.' spark plugs<br />';
        $totalqty = 0;
        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "Items ordered: ".$totalqty."<br />";
        $totalamount = 0.00;
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
        $totalamount = $tireqty * TIREPRICE
                     + $oilqty * OILPRICE
                     + $sparkqty * SPARKPRICE;
        echo 'Subtotal: $'.number_format($totalamount,2).'<br />';
        $taxrate = 0.10;  // local sales tax is 10%
        $totalamount = $totalamount * (1 + $taxrate);
        echo 'Total including tax: $'.number_format($totalamount,2).'<br />';
		switch($find) {
			case 'a':
				echo 'Regular Customer';
			break;
			
			case 'b':
				echo 'TV Advert';
			break;
			
			case 'c':
				echo 'Phone';
			break;
			
			case 'd':
				echo 'Word of mouth';
			break;		
			
			
			
		}
      ?>
   </body>
</html>