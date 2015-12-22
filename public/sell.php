<?php
	// configuration
    require("../includes/config.php");
   
    if(isset($_POST["sell"]))
    {	
    	// get the user's cash and increment it by the amount of sell
    	$money = query("SELECT convert(SUM(price), decimal(4,2)) as price FROM stocks WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["sell"]);

     	query("UPDATE users SET cash = cash + ? WHERE id = ?", $money[0]["price"], $_SESSION["id"]);

     	$count = query("SELECT SUM(amount) FROM stocks WHERE user_id = ? AND state = 'B' AND symbol = ?", $_SESSION["id"], $_POST["sell"]);

   		// required for History - sets the BOUGHT stocks to status X - meaning that they are sold and should not be counted
   		// B - bought, usable
   		// S - sold (this holds the date of selling)
   		// X - sold, seen in history as BOUGHT as it is needed for historical purposes
    	query("UPDATE stocks SET state = \"X\" WHERE user_id = ? AND symbol = ? AND state = 'B'", $_SESSION["id"], $_POST["sell"]);

   		query("INSERT INTO stocks (state, user_id, symbol, amount, price) VALUES ('S', ?, ?, ?, ?)", $_SESSION["id"], strtoupper($_POST["sell"]), $count[0]["SUM(amount)"], $money[0]["price"]);

		// gets the symbols that are marked as BOUGHT by the user
		$list = query("SELECT DISTINCT(symbol)
						FROM stocks 
						WHERE user_id = ? AND state = 'B'
						ORDER BY symbol", $_SESSION["id"]);

    	render("sell.php", ["title" => "Sell", "list" => $list, "msg" => $_POST["sell"], "price" => $money[0]["price"]]);	
    }
    else
    {	    
		// gets the symbols that are marked as BOUGHT by the user
		$list = query("SELECT DISTINCT(symbol)
						FROM stocks 
						WHERE user_id = ? AND state = 'B'
						ORDER BY symbol", $_SESSION["id"]);

	    // render selling page
	    render("sell.php", ["title" => "Sell", "list" => $list]);
	}
?>