<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome</title>

    <link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('theme/js/jquery-3.6.1.min.js') ?>"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CLOTHFORRENT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-flex">
                <?php  var_dump($this->session->userdata('userdata'))?>
              <p class=""><a class="navbar-brand" href="<?php echo base_url('users/login')?>">Login</a>|<a class="navbar-brand" href="<?php echo base_url('users/signup')?>">&nbsp;&nbsp;Signup</a></p>
            </div>
        </div>
        </div>
    </nav>