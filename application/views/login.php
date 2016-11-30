<div class="container center_div">
  <div class="row main panel panel-default">
    <div class="panel-heading">
       <div class="panel-title text-center">
          <h1 class="title">Sign In</h1>
        </div>
    </div> 
    <div class="main-login main-center panel-body">
      <form class="form-horizontal" method="post" action="#">
        
        <div class="form-group">
          <label for="name" class="cols-sm-2 control-label">Email</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-user"></span>
              <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
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
        <p class="text-center">
          <a href="<?php echo base_url(); ?>index.php/Form" class="btn btn-default btn-lg">Register</a>
          <button type="button" class="btn btn-primary btn-lg">Login</button>
        </p>
      </form>
    </div>
  </div>
</div>