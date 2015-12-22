<div>

<?php 
	if (isset($msg))
	{
		echo '<br/>'.$msg.'!<br/>';
	}
	else
	{
		echo '<br/>Please, enter a valid symbol!<br/>';
	}
?>
	<form action="/buy.php" method="post">
	    <div class="input-group">
	    	<input type="text" class="form-control" name="buy" placeholder="Enter stock symbol to buy..." autofocus>
	    	<input type="text" class="form-control" name="amount" placeholder="How much?">
	    </div><!-- /input-group -->
	    <span class="input-group-btn">
	        <button class="btn btn-default" type="submit">Buy</button>
	    </span>
	</form>
</div>