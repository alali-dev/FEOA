<?php $this->load->view('admin/components/page_head'); ?>
<?php $this->load->view('admin/components/header'); ?>
<section>
    <h2>Users</h2>
    <?php echo anchor("admin/user/edit","<i class='icon icon-edit'></i>Add User"); ?>
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
            <?php if(count($users)): foreach ($users as $user): ?>
            <tr>
                <td><?php echo anchor("admin/user/edit/".$user->id,$user->email);?></td>
                <td><?php echo btn_edit("admin/user/edit/".$user->id);?></td>
                <td><?php echo btn_delete("admin/user/delete/".$user->id);?></td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
</section>
<?php $this->load->view('admin/components/footer'); ?>
<?php $this->load->view('admin/components/page_tail'); ?>
