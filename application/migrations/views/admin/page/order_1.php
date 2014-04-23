<section>
	<h2>Order pages</h2>
	<p class="alert alert-info">Drag to order pages and then click 'Save'</p>
        <div id="orderResult">
        </div>
	<input type="button" id="save" value="Save" class="btn btn-primary" />
</section>

<script>
$(function() {
        jQuery.ajax({type:"POST",url:"<?php echo site_url('admin/page/order_ajax'); ?>",data:"",success:function(result) {
                jQuery("#orderResult").html(result);
        }});
	jQuery('#save').click(function(){
		oSortable = jQuery('.sortable').nestedSortable('toArray');

		jQuery('#orderResult').slideUp(function(){
			jQuery.post('<?php echo site_url('admin/page/order_ajax'); ?>', { sortable: oSortable }, function(data){
				jQuery('#orderResult').html(data);
				jQuery('#orderResult').slideDown();
			});
		});
		
	});
});
</script>