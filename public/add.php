<?php
	// configuration
    require("../includes/config.php");

    // if we get called via POST containing a quote, then we pass it on
    // for display
    if (isset($_POST["add"]) && ($_POST["add"] > 0))
    {
    	query("UPDATE users SET cash = cash + ? WHERE id = ?", $_POST["add"], $_SESSION["id"]);
        query("INSERT INTO stocks (state, user_id, amount, price) VALUES ('W', ?, ?, 1.00)", $_SESSION["id"], $_POST["add"]);
        $msg = "Successfully added $".$_POST["add"]." to your Wallet!";
    	render("add.php", ["msg" => $msg, "title" => "Add To Wallet"]);
    }
    else if ((isset($_POST["add"])) && ($_POST["add"]<= 0))
    {
        $msg = "Please, add a positive whole number to your Wallet!";
        render("add.php", ["msg" => $msg, "title" => "Add To Wallet"]);
    }
    else 
    {
    	render("add.php", ["title" => "Add To Wallet"]);	
    }
?>