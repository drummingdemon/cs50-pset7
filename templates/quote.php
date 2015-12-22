<div>

<?php 

	if (isset($quote))
	{
		if ($quote != "") echo '<br/>Currently, a share of '.$quote["name"].' ('.strtoupper($quote["symbol"]).') costs <b>$'.preg_replace('/(?<=\d{2})0+$/', '',number_format($quote["price"], 4)).'</b><br/>';
	}
	else
	{
		echo '<br/>Please, enter a valid symbol!<br/>';
	}
?>

	<form action="/quote.php" method="post">
	    <div class="input-group">
	      <input type="text" class="form-control" name="quote" placeholder="Search for a quote..." autofocus>
	      <span class="input-group-btn">
	        <button class="btn btn-default" type="submit">Get Quote</button>
	      </span>
	    </div><!-- /input-group -->
	</form>
</div>