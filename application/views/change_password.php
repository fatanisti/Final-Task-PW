<div class="container center_div">
  <div class="row main panel panel-default">
    <div class="panel-heading">
      <div class="panel-title text-center">
        <h1 class="title">Change Password</h1>
      </div>
    </div> 
    <?php echo form_open('User/change_pass'); ?>
    <div class="main-login main-center panel-body">
      <form class="form-horizontal" method="post" action="#">
        <div class="form-group">
          <label for="email" class="cols-sm-2 control-label">Email</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-envelope"></span>
              <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your email"/>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="old" class="cols-sm-2 control-label">Old Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-envelope"></span>
              <input type="password" class="form-control" name="old" id="old"  placeholder="Enter your old password"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="new" class="cols-sm-2 control-label">New Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-lock"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="new" id="new"  placeholder="Enter your new password"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-user"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your new password"/>
            </div>
          </div>
        </div>
        <p class="text-center">
          <a href="<?php echo base_url(); ?>index.php/coba1" class="btn btn-danger btn-lg">Cancel</a>
          <button type="submit" class="btn btn-success btn-lg">Change Password</button>
        </p>
      </form>
      <?php echo form_close(); ?>
    </div>
    <?php if (validation_errors()): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo validation_errors(); ?>
      </div>
    <?php endif ?>
    <?php if (isset($error)): ?>
      <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
    <?php endif ?>
  </div>
</div>