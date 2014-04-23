<?php $this->load->view('admin/components/page_head'); ?>
<?php //$this->load->view('admin/components/header'); ?>
<section>
    <h2>Staff</h2>
    <?php echo anchor("admin/staff/edit","<i class='icon icon-edit'></i>Add Staff"); ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Email
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($staffs)): foreach ($staffs as $staff): ?>
            <tr>
                <td><?php echo anchor("admin/staff/edit/".$staff->id,$staff->email);?></td>
                <td><?php echo btn_edit("admin/staff/edit/".$staff->id);?></td>
                <td><?php echo btn_delete("admin/staff/delete/".$staff->id);?></td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
</section>
<?php $this->load->view('admin/components/footer'); ?>
<?php $this->load->view('admin/components/page_tail'); ?>
