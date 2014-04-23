<h3><?php echo empty($estate->id) ? 'Add a new estate' : 'Edit estate  ' . $estate->location; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	
	<tr>
		<td>Location</td>
		<td><?php echo form_input('location', set_value('location', $estate->location)); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php echo form_input('slug', set_value('slug', $estate->slug)); ?></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><?php echo form_textarea('description', set_value('description', $estate->description), 'class="tinymce"'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>

<script>
$(function() {
	jQuery('.datepicker').datepicker({ format : 'yyyy-mm-dd' });
});
</script>