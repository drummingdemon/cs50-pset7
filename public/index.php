<?php
    // configuration
    require("../includes/config.php");

  	// Gets the total amount of stocks per symbol, multiplies every instance with the corresponding amount
	// and sums it up, showing a grand total of all the owned symbols
	$list = query("SELECT symbol, SUM(amount) stocks, ROUND(SUM((amount * price)), 2) price 
					FROM stocks 
					WHERE user_id = ? AND state = 'B'
					GROUP BY symbol
					ORDER BY symbol", $_SESSION["id"]);

	$currentCash = query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);

    // render portfolio
    render("portfolio.php", ["cash" => $currentCash[0]["cash"], "title" => "Portfolio", "list" => $list]);
?>
