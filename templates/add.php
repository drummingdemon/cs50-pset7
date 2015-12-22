<div>
	
<?php 
	if(isset($msg))
	{
		echo '<br/>'.$msg.'<br/>';
	}
?>

	<form action="/add.php" method="post">
	    <div class="input-group">
	      <input type="text" class="form-control" name="add" placeholder="Add amount to your Wallet..." autofocus>
	      <span class="input-group-btn">
	        <button class="btn btn-default" type="submit">Add To My Wallet</button>
	      </span>
	    </div><!-- /input-group -->
	</form>
		
</div>