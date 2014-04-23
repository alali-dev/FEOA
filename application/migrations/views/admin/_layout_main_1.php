<?php $this->load->view('admin/components/page_head'); ?>
<?php $this->load->view('admin/components/header'); ?>
<?php
// Quick and dirty navigation.
$menu_item_default = 'index';
$menu_items = array(
  'index' => array(
    'label' => 'Dashboard',
    'desc' => 'dashboard',
  ),
  'add' => array(
    'label' => 'Pages',
    'desc' => 'pages',
  ),
);

// Determine the current menu item.
$menu_current = $menu_item_default;
// If there is a query for a specific menu item and that menu item exists...
if (@array_key_exists($this->uri->segment(2), $menu_items)) {
  $menu_current = $this->uri->segment(2);
}
?>

      
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <?php $this->load->view($subview); ?>
                </div>
                <div class="col-lg-3">
                    <section>
                        <h1>Hello World!</h1>
                        <?php echo mailto("alalibo@gmail.com","<i class='icon-user'></i> alalibo@gmail.com"); ?><br/>
                        <?php echo anchor("admin/user/logout","<i class='icon-off'></i> logout"); ?>
                    </section>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('admin/components/footer'); ?>       
<?php $this->load->view('admin/components/page_tail'); ?>       

       
       