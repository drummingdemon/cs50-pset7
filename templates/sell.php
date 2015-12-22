<div>
	
<?php 
	if(isset($msg))
	{
		echo '<br/><center>You have successfully sold all your '.$msg.' stocks for $'.$price.'!</center><br/>';
	}
?>

	<div class="form-group">
	  <label for="sel1">Select stock symbol to sell: </label>
	  <select class="form-control" id="sel1" name="sell" form="sell">
	    <?php 
	    	foreach ($list as $symbol)
	    	{
	    		echo '<option>'.strtoupper($symbol["symbol"]).'</option>';
	    	}
	    ?>
	  </select>
	</div>
	
	<form action="/sell.php" method="post" id="sell">
		<span class="input-group-btn">
	        <button class="btn btn-default" type="submit">Sell Stock</button>
	    </span>
	</form>
		
</div>