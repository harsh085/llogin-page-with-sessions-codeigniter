<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <title> LOGIN PAGE</title>

</head>
<body style="background-image: url('http://tinytidbits.in/wp-content/uploads/2018/04/best-books-book-youll-ever-read.jpg')">
</br></br></br><div class="container">
<div class="well" style="background-color:#F4F06F;">
  <center><h1 class="jumbtron" style="color:white; text-shadow: 2px 2px 8px #FF0000;" >PLEASE LOGIN</h1></center></br>

        <form action="<?php echo base_url('main/login_validation'); ?>" method="post"></br>
        Enter username:<input type="text" name="usr" class="form-control" placeholder="username here">
        <span class="text-danger"><?php echo form_error("usr");?></span></br>
        Enter password:<input type="password" name="pass" class="form-control" placeholder="password here">
        <span class="text-danger"><?php echo form_error("pass");?></span></br>
        <button type="submit" class="btn btn-primary">Sign in</button>
    <!--  <div class="btn btn-primary" >
        <a style="color:white;" href="<?php// echo base_url() ?>main/sign_up">Sign up
        </a>
      </div>-->
        <?php

        echo $this->session->flashdata('error'); ?>
        </form><br/>
</div>
</div>
<footer style="color: white;">all right reserved.copyright 2018</footer>
</body>
</html>
