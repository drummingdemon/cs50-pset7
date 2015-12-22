<?php
	// configuration
    require("../includes/config.php");

    if (isset($_POST["amount"]) && ($_POST["amount"] > 0))
    {   	
    	$currentCash = query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
    	$sellPrice = lookup(strtoupper($_POST["buy"]));

    	if ($currentCash[0]["cash"] - $sellPrice["price"]*$_POST["amount"] >= 0.0)
    	{
    		query("INSERT INTO stocks (state, user_id, symbol, amount, price) VALUES ('B', ?, ?, ?, ?)", $_SESSION["id"], strtoupper($_POST["buy"]), $_POST["amount"], $sellPrice["price"]);
    		query("UPDATE users SET cash = cash - ? WHERE id = ?", $sellPrice["price"]*$_POST["amount"], $_SESSION["id"]);
    		$msg = "Successful purchase!";
    		render("buy.php", ["msg" => $msg, "title" => "Buy"]);
    	}
    	else
    	{
    		$msg = "Sorry, not enough cash!";
    		render("buy.php", ["msg" => $msg, "title" => "Buy"]);
    	}    	
    }
    else if (isset($_POST["amount"]) && ($_POST["amount"] <= 0))
    {
	    // render buy page
	    $msg = "Must choose a positive whole amount of stocks!";
    	render("buy.php", ["msg" => $msg, "title" => "Buy"]);
    }
    else
    {
	    // render buy page
    	render("buy.php", ["title" => "Buy"]);    	
    }
    //preg_match("/^\d+$/", $_POST["shares"])
?>