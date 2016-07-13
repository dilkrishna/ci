<?php $this->load->view('public/public_header'); ?>

<div class="container">
    <?php echo form_open('login/admin_login',['class'=>'form-horizontal']); ?>
    <!--<form class="form-horizontal" action="admin/login">-->
  <fieldset>
    <legend> Admin Login</legend>
    <div class="form-group">
      <label for="username" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-4">
          <?php echo form_input(['name'=>'username','type'=>'text','class'=>'form_control','placeholder'=>'Username','value'=>  set_value('username')]); ?>
      </div>      
      <div class="col-lg-4">
          <?php echo form_error('username','<p class="text-danger"></p>') ?>
      </div>

    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-4">
          <?php echo form_input(['name'=>'password','type'=>'password','class'=>'form_fontrol','placeholder'=>'Password']); ?>
      </div>
      <div class="col-lg-4">
          <?php echo form_error('password','<p class="text-danger"></p>') ?>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
          <?php echo form_reset(['name'=>'cancel','value'=>'Cancel','class'=>'btn btn-primary']); ?>
        <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']);?>
      </div>
    </div>
  </fieldset>
<?php echo form_close()?>
</div>
<?php $this->load->view('public/public_footer'); ?>
</body>
</html>
