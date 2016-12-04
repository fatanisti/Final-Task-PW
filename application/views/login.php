<?php
if (isset($logout_message)) {
  echo "<div class='message'>";
  echo $logout_message;
  echo "</div>";
}
?>
<?php
if (isset($message_display)) {
  echo "<div class='message'>";
  echo $message_display;
  echo "</div>";
}
?>
<div class="container center_div">
  <div class="row main panel panel-default">
    <div class="panel-heading">
       <div class="panel-title text-center">
          <h1 class="title">Sign In</h1>
        </div>
    </div>
    <?php echo form_open('User/user_login_process'); ?>
    
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
        <a href="#" class="btn-btn-link">Lupa Password</a>
        <p class="text-center">
          <a href="<?php echo base_url(); ?>index.php/signup" class="btn btn-success btn-md">Create an Account</a>
          <button type="submit" class="btn btn-primary btn-md">Login</button>
        </p>
      </form>
      <?php
        if (isset($error_message)) {
          echo "<div class='alert alert-danger'>";
          echo $error_message;
        } 
        echo validation_errors();
        echo "</div>";
      ?> 
      <?php echo form_close(); ?>
    </div>
  </div>
</div>