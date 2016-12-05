<?php if (isset($_SESSION['message_display'])): ?>
  <?php if ($_SESSION['message_display'] === "Anda Berhasil Logout"): ?>
    <div class="alert alert-success text-center">
      <?php echo $_SESSION['message_display']; ?>
    </div>
  </div>
  <?php else: ?> 
    <div class="container">
      <div class="alert alert-danger text-center">
        <?php echo $_SESSION['message_display']; ?>
      </div>
    </div>
  <?php endif ?>
  <?php echo validation_errors(); ?>
  <?php session_destroy(); ?>  
<?php endif ?>
<div class="container center_div">
  <div class="row main panel panel-default">
    <div class="panel-heading">
       <div class="panel-title text-center">
          <h1 class="title">Sign In</h1>
        </div>
    </div>
    <?php echo form_open('User/user_login_process'); ?>
    <?php echo validation_errors(); ?>
    <div class="main-login main-center panel-body">
      <form class="form-horizontal" method="post" action="#">
        
        <div class="form-group">
          <label for="name" class="cols-sm-2 control-label">Username</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-user"></span>
              <input type="text" class="form-control" name="name" id="user_name"  placeholder="Enter your Username"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="cols-sm-2 control-label">Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-lock"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="password" id="user_pass"  placeholder="Enter your Password"/>
            </div>
          </div>
        </div>
        <p class="text-center">
        <br><br>
          <a href="<?php echo base_url(); ?>index.php/signup" class="btn btn-success btn-lg">Create an Account</a>
          <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </p>
      </form>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>