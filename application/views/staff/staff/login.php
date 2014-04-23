<?php $this->load->view('admin/components/page_head'); ?>
<section><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Login </h3>
        <p>Please log in with your credentials.</p>
      </div>
      <div class="modal-body">
          <?php echo validation_errors();?>
          <?php echo form_open(); ?>
          <table class="table" >
              <tr>
                  <td>Email</td>
                  <td><?php echo form_input("email") ?></td>
              </tr>
              <tr>
                  <td>Password</td>
                  <td><?php echo form_password("password") ?></td>
              </tr>
              <tr>
                  <td></td>
                  <td><?php echo form_submit("submit","Log in","class='btn btn-primary'") ?></td>
              </tr>
          </table>
          <?php echo form_close(); ?>
      </div>
<?php $this->load->view('admin/components/page_tail'); ?>
