<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title"><?php echo empty($user->id)?"Add a new User":"Edit User ".$user->name; ?></h3>
      </div>
      <div class="modal-body">
          <?php echo validation_errors();?>
          <?php echo form_open(); ?>
          <table class="table" >
              <tr>
                  <td>Name</td>
                  <td><?php echo form_input('name', set_value('name', $user->name)); ?></td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td><?php echo form_input('email', set_value('email', $user->email)); ?></td>
              </tr>
              <tr>
		<td>Password</td>
		<td><?php echo form_password('password'); ?></td>
                </tr>
                <tr>
                    <td>Confirm password</td>
                    <td><?php echo form_password('password_confirm'); ?></td>
                </tr>
              <tr>
                  <td></td>
                  <td><?php echo form_submit("submit","Save","class='btn btn-primary'") ?></td>
              </tr>
          </table>
          <?php echo form_close(); ?>
      </div>