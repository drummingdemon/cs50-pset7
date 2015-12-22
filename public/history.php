<?php
	// configuration
    require("../includes/config.php");

	// Gets the total amount of stocks per symbol, multiplies every instance with the corresponding amount
	// and sums it up, showing a grand total of all the owned symbols
	$list = query("SELECT state, time, symbol, amount, convert(price, decimal(4,2)) as price
					FROM stocks 
					WHERE user_id = ?
					ORDER BY time DESC", $_SESSION["id"]);
    
    // render quote
    render("history.php", ["title" => "History", "list" => $list]);
?>