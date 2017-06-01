<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Themes Lab - Creative Laborator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <link rel="shortcut icon" href="<?php echo base_url('/assets/global/images/favicon.png');?>">
        <link href="<?php echo base_url('/assets/global/css/style.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('/assets/global/css/ui.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('/assets/global/plugins/icheck/skins/all.css');?>" rel="stylesheet"/>
        <link href="<?php echo base_url('/assets/global/plugins/bootstrap-loading/lada.min.css');?>" rel="stylesheet">
    </head>
    <body class="account separate-inputs boxed" data-page="signup">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>
                        <form class="form-signup" action="<?php echo base_url('index.php/logmhs/tambah_user_aksi'); ?>" role="form" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="append-icon">
                                        <input type="text" name="nama" id="firstname" class="form-control form-white firstname" placeholder="Name" required autofocus>
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="append-icon">
                                        <input type="text" name="nrp" id="lastname" class="form-control form-white lastname" placeholder="NRP" required>
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="append-icon">
                                <input type="text" name="user" id="email" class="form-control form-white email" placeholder="Username" required>
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="append-icon">
                                <input type="password" name="pass" id="password" class="form-control form-white password" placeholder="Password" required>
                                <i class="icon-lock"></i>
                            </div>
                           
                            <tr>
                         
                            <td> <input type="hidden" name="jab" value="mahasiswa"> </td>
                            </tr>
                            <div class="terms option-group">
                                <label  for="terms" class="m-t-10">
                                <input type="checkbox" name="terms" id="terms" data-checkbox="icheckbox_square-blue" required/>
                                I agree with terms and conditions
                                </label>  
                            </div>
                            <button type="submit" id="submit-form" class="btn btn-lg btn-dark m-t-20" data-style="expand-left">Register</button>
                            <div class="social-btn">
                                <div class="row">
                                  
                                   
                                </div>
                            </div>
                            <div class="clearfix">
                                <p class="pull-right m-t-20"><a href="<?php echo base_url('') ?>">Already have an account? Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         
            <div id="account-builder">
                <form class="form-horizontal" role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-spin fa-gear"></i> 
                            <h3><strong>Customize</strong> Login Page</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Social Login</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="social-cb" type="checkbox" class="switch-input" checked>
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Boxed Form</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="boxed-cb" type="checkbox" class="switch-input" checked>
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Background Image</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="image-cb" type="checkbox" class="switch-input" checked>
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Background Slides</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="slide-cb" type="checkbox" class="switch-input">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Terms Checkbox</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="terms-cb" type="checkbox" class="switch-input" checked>
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">User Image</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="user-cb" type="checkbox" class="switch-input">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END LOCKSCREEN BOX -->
       <script src="/assets/global/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="/assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
        <script src="/assets/global/plugins/gsap/main-gsap.min.js"></script>
        <script src="/assets/global/plugins/tether/js/tether.min.js"></script>
        <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/global/plugins/icheck/icheck.min.js"></script>
        <script src="/assets/global/plugins/backstretch/backstretch.min.js"></script>
        <script src="/assets/global/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="/assets/global/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="/assets/global/plugins/jquery-validation/additional-methods.min.js"></script>
        <script src="/assets/global/js/plugins.js"></script>
        <script src="/assets/global/js/pages/login-v1.js"></script>
    </body>
</html>






