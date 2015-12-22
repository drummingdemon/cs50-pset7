<?php

?>

<div>
	<table class="table table-striped">
    <thead>
      <tr>
      	<th>Transaction</th>
        <th>Time</th>
        <th>Symbol</th>
        <th>Amount</th>
        <th>Price</th>
      </tr>
    </thead>
	    <tbody>
		<?php
			foreach ($list as $item) {
				echo '<tr>';
				echo '<td>';
				switch ($item["state"]) {
					case 'B':
						echo 'BOUGHT';
						break;

					case 'S':
						echo 'SOLD';
						break;
					
					case 'X':
						echo 'BOUGHT';
						break;

					case 'W':
						echo 'WALLET';
						break;

					default:
						echo '???';
						break;
				}

				echo '</td>';
				echo '<td>'.$item["time"].'</td>';
				echo '<td>'.strtoupper($item["symbol"]).'</td>';
				echo '<td>'.$item["amount"].'</td>';
				echo '<td>$'.$item["price"].'</td>';
				echo '</tr>';
			}
		?>
		</tbody>
	</table>
</div>
<div>
    <a href="logout.php">Log Out</a>
</div>
