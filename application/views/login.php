<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $this->lang->line('login'). ' | ' . SMS;  ?></title>
    
    <?php if($this->global_setting->favicon_icon){ ?>
        <link rel="icon" href="<?php echo UPLOAD_PATH; ?>/logo/<?php echo $this->global_setting->favicon_icon; ?>" type="image/x-icon" />             
    <?php }else{ ?>
        <link rel="icon" href="<?php echo IMG_URL; ?>favicon.ico" type="image/x-icon" />
    <?php } ?>
    
    <!-- Bootstrap -->
    <!-- <link href="<?php echo VENDOR_URL; ?>bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo VENDOR_URL; ?>bootstrap/bootstrap5.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo VENDOR_URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <!-- <link href="<?php echo CSS_URL; ?>custom.css" rel="stylesheet"> -->
    <?php $this->load->view('layout/new-login'); ?>
</head>    
<body class="login">            
<!-- New Login Page -->
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5 col-sm-12">
            <img src="<?php echo base_url('./assets/images/login_page_image.webp'); ?>" class="img-fluid" alt="Sample image">                  
        </div>
        <div class="col-md-8 p-5 col-lg-6 col-xl-4 offset-xl-1 rounded m-4" style="background-color:rgba(105, 214, 134, 0.4)">
            <section>
                <h1 class="h2 text-center"><?php echo $this->lang->line('login'); ?></h1>
            </section>
            <section class="container text-center">
                <?php  if(UPLOAD_PATH.'logo/'.$this->global_setting->brand_logo){ ?>
                    <img  src="<?php echo UPLOAD_PATH.'logo/'.$this->global_setting->brand_logo; ?>" style="" alt="">
                <?php }else{ ?>
                    <img  width="100" height="100" src="<?php echo IMG_URL; ?>/sms-logo.png">
                <?php } ?>
            </section>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p class="red" style="color: #fff;"><?php echo $this->session->flashdata('error'); ?></p>
                <p class="green"  style="color: #fff;"><?php echo $this->session->flashdata('success'); ?></p>
            </div>
            <?php echo form_open(site_url('auth/login'), array('name' => 'login', 'id' => 'login'), ''); ?>
                <!-- Email input -->                  
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="floatingInput" placeholder="<?php echo $this->lang->line('username'); ?>">
                    <label for="floatingInput">Enter Username</label>
                </div>
                    <!-- Password input -->
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="<?php echo $this->lang->line('password'); ?>">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                <!-- Checkbox -->
                    <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value=""/>
                        <label class="form-check-label" for="form2Example3">Remember me</label>
                    </div>
                    <a href="<?php echo site_url('forgot') ?>" class="text-body"><?php echo $this->lang->line('lost_your_password'); ?></a>
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <input class="btn btn-primary login-button" type="submit" name="submit" value="<?php echo $this->lang->line('login'); ?>"/>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
            <!-- New Login Page -->

        <!-- javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
