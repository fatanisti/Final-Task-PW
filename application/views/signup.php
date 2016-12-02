<div class="container center_div">
  <div class="row main panel panel-default">
    <div class="panel-heading">
      <div class="panel-title text-center">
        <h1 class="title">Sign Up</h1>
      </div>
    </div> 
    <div class="main-login main-center panel-body">
      <form class="form-horizontal" method="post" action="#">

      <div class="form-group">
          <label for="name" class="cols-sm-2 control-label">Your Userame</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-user"></span>
              <input type="text" class="form-control" name="user_name" id="user_name"  placeholder="Enter your Name"/>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="name" class="cols-sm-2 control-label">First Name</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-user"></span>
              <input type="text" class="form-control" name="first_name" id="first_name"  placeholder="Enter your First Name"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="cols-sm-2 control-label">Last Name</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-user"></span>
              <input type="text" class="form-control" name="last_name" id="last_name"  placeholder="Enter your Last Name"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="cols-sm-2 control-label">Your Email</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-envelope"></span>
              <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="cols-sm-2 control-label">Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-lock"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-user"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
            </div>
          </div>
        </div>
        <p class="text-center">
          <a href="<?php echo base_url(); ?>index.php/login" class="btn btn-default btn-lg">Login</a>
          <button type="button" class="btn btn-primary btn-lg">Register</button>
        </p>
      </form>
    </div>
  </div>
</div>