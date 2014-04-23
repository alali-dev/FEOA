<?php $this->load->view('gallery/components/page_head'); ?>
<?php $this->load->view('gallery/components/header'); ?>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
<?php $this->load->view('components/footer');?>
<?php $this->load->view('components/page_tail');?>
