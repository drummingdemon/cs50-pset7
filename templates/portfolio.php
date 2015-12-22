<div>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Symbol</th>
        <th>Amount</th>
        <th>Price</th>
      </tr>
    </thead>
	    <tbody>
		<?php
			foreach ($list as $item) {
				echo '<tr>';
				echo '<td>'.strtoupper($item["symbol"]).'</td>';
				echo '<td>'.$item["stocks"].'</td>';
				echo '<td>$'.$item["price"].'</td>';
				echo '</tr>';
			}
		?>
		<?php if (isset($cash)) { echo '<tr><td>Total Cash:</td><td>'.$cash.'</td><td></td></tr>';} ?>
		</tbody>
	</table>
</div>
<div>
    <a href="logout.php">Log Out</a>
</div>
