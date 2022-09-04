<?php include(VIEWPATH . 'inc/header.php') ?>
<div class="container">

<?php if(validation_errors() ==TRUE){?>
  <div class="mt-2">
<div class="alert alert-danger" role="alert">
<?php echo validation_errors()?>
</div>
  </div>
<?php }?>
  <h1>User Signup</h1>
  <div class="mt-4" style="align-content: center;margin: 0 auto;">
    <form method="post" action="<?php echo base_url('users/signup')?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username" class="form-label mt-4 required">Username</label>
        <input type="username" class="form-control " name="username" id="username" placeholder="Username" value="">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4 required">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="">
      </div>
      <div class="form-group">
        <label for="profile" class="form-label mt-4">Profile</label>
        <input type="file" class="form-control" id="profile" name="profile" placeholder="Profile" value="">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4 required">Password</label>
        <input type="password" class="form-control " id="exampleInputPassword1" name="password" placeholder="Password" value="">
      </div>
      <div class="form-group">
        <label for="confpwd" class="form-label mt-4 required">Password Conf</label>
        <input type="password" class="form-control" id="confpwd" name="confpwd" placeholder="Password Again" value="">
      </div>
      <div class="form-group">
    <button class="btn btn-primary mt-2">Signup</button>  
    </div>
    </form>
  </div>
</div>
<?php include(VIEWPATH . 'inc/footer.php') ?>