
?>
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
              <input type="text" class="form-control" name="user_name" id="user_name"  placeholder="Enter your Username"/>
              <input type="text" class="form-control" name="name" id="user_name"  placeholder="Enter your Name"/>
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
          <a href="<?php echo base_url(); ?>index.php/signup" class="btn btn-default btn-lg">Create an Account</a>
          <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </p>
      </form>
      <?php
        echo "<div class='alert alert-danger'>";
        if (isset($error_message)) {
          echo $error_message;
        }
        echo validation_errors();
        echo "</div>";
      ?> 
      <?php echo form_close(); ?>
    </div>
  </div>
</div>