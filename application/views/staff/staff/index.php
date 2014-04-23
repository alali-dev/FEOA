<?php $this->load->view('admin/components/page_head'); ?>
<?php //$this->load->view('admin/components/header'); ?>
<section>
    <h2>Staff</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Email
                </th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($staffs)): foreach ($staffs as $staff): ?>
            <tr>
                <td><?php echo $staff->email;?></td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
</section>
<?php $this->load->view('staff/components/page_tail'); ?>
