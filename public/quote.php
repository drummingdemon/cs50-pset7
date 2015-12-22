<?php
	// configuration
    require("../includes/config.php");

    // if we get called via POST containing a quote, then we pass it on
    // for display
    if (isset($_POST["quote"]))
    {
    	$quote = lookup($_POST["quote"]);
    	render("quote.php", ["title" => "Quote", "quote" => $quote]);
    }

    // otherwise simply render the form and purge the $quote variable if it exists
    else 
    {
    	if (isset($quote)) unset($quote);
    	render("quote.php", ["title" => "Quote"]);	
    }
?>