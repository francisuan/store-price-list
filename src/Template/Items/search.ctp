<?php if(isset($items)): ?>
<?php if( $items->count() == 0){ ?>
<p class="alert alert-warning">No results.</p>
<?php }else{ ?>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>name</th>
			<th>Category</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
<?php
	foreach($items as $item){
?>
		<tr>
			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->category->name; ?></td>
			<td style="text-align:right;">&#8369; <?php echo number_format($item->price[0]->price,2,".",",") ?></td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
<?php } ?>
<?php else: ?>
	<p class="alert alert-danger">Please type in an item</p>
<?php endif; ?>