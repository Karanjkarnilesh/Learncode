<?php include(VIEWPATH . 'inc/header.php') ?>
<div class="container">
<?php if(validation_errors() ==TRUE){?>
  <div class="mt-2">
<div class="alert alert-danger" role="alert">
<?php echo validation_errors()?>
</div>
  </div>
<?php }?>
  <h1>User Login</h1>
  <div class="mt-4" style="align-content: center;margin: 0 auto;">
    <form action="<?php echo base_url('users/login')?>" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="">
      </div>
      <div class="form-group">
    <button class="btn btn-primary mt-2">Login</button>  
    </div>
    </form>
  </div>
</div>
<?php include(VIEWPATH . 'inc/footer.php') ?>