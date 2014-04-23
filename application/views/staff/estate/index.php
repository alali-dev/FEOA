<section>
	<h2>Estate</h2>
	<?php echo anchor('staff/estate/edit', '<i class="icon-plus"></i> Add an estate'); ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Location</th>
				<th>Created</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
<?php if(count($estates)): foreach($estates as $estate): ?>	
		<tr>
			<td><?php echo anchor('staff/estate/edit/' . $estate->id, $estate->location); ?></td>
			<td><?php echo $estate->created; ?></td>
			<td><?php echo btn_edit('staff/estate/edit/' . $estate->id); ?></td>
			<td><?php echo btn_delete('staff/estate/delete/' . $estate->id); ?></td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">We could not find any estates.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>
</section>