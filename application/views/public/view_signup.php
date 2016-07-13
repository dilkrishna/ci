<?php $this->load->view('public/public_header'); ?>
<div class="container">
    <?php echo form_open('signup/create',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend> Create Profile</legend>
    <div class="form-group">
      <label for="username" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-4">
          <?php echo form_input(['name'=>'username','type'=>'text','class'=>'form_control','placeholder'=>'Username','value'=>  set_value('username')]); ?>
      </div>      
      <div class="col-lg-4">
          <?php echo form_error('username') ?>
      </div>

    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-4">
          <?php echo form_input(['name'=>'password','type'=>'password','class'=>'form_fontrol','placeholder'=>'Password']); ?>
      </div>
      <div class="col-lg-4">
          <?php echo form_error('password') ?>
      </div>
    </div>
     <div class="form-group">
      <label for="fname" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-4">
          <?php echo form_input(['name'=>'fname','type'=>'text','class'=>'form_control','placeholder'=>'First Name','value'=>  set_value('fname')]); ?>
      </div>      
      <div class="col-lg-4">
          <?php echo form_error('fname') ?>
      </div>

    </div>
    <div class="form-group">
      <label for="lname" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-4">
          <?php echo form_input(['name'=>'lname','type'=>'text','class'=>'form_control','placeholder'=>'Last Name','value'=>  set_value('lname')]); ?>
      </div>      
      <div class="col-lg-4">
          <?php echo form_error('lname') ?>
      </div>

    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
          <?php echo form_reset(['name'=>'cancel','value'=>'Reset','class'=>'btn btn-primary']); ?>
        <?php echo form_submit(['name'=>'submit','value'=>'Sign up','class'=>'btn btn-primary']);?>
      </div>
    </div>
  </fieldset>
<?php echo form_close()?>
</div>
</body>
<?php $this->load->view('public/public_footer'); ?>
</body>
</html>


