<?php $this->load->view('components/page_head');?>
<?php $this->load->view('components/header');?>

 <div class="container">
 	<div class="row">
 		<!-- Main content -->
 <?php $this->load->view('templates/' . $subview); ?>
 	</div>
 </div>
<?php $this->load->view('components/footer');?>
<?php $this->load->view('components/page_tail');?>