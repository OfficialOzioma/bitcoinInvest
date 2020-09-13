

<div class="main-wrapper">

        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <?php use thecodeholic\phpmvc\Application; ?>
        <?php if (Application::$app->session->getFlash('success')): ?>
            <div class="alert alert-success">
                <p><h3><?php echo Application::$app->session->getFlash('success') ?></h3></p>
            </div>
        <?php endif; ?>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="/images/bitin.png" alt="homepage" class="light-logo" width="300" /></span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" id="loginform" method="post">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="text" class="form-control<?php echo $model->hasError('email') ? ' is-invalid' : '' ;?> form-control-lg" placeholder="Email" name="email" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $model->email;?>">
                                    <div class="invalid-feedback">
                                        <span style="font-size: 15pt;">
                                            <?php echo $model->getFirstError('email'); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="fa fa-eye-slash"></i></span>
                                    </div>
                                    <input type="password" class="form-control<?php echo $model->hasError('password') ? ' is-invalid' : '' ;?> form-control-lg" placeholder="Password" name="password" aria-label="Password" aria-describedby="basic-addon1" value="<?php echo $model->password;?>">
                                    <div class="invalid-feedback">
                                        <span style="font-size: 15pt;">
                                            <?php echo $model->getFirstError('password'); ?>
                                        </span>
                                    </div>
                                </div>
                                <i class="fa fa-reorder m-r-5"></i>
                                    <button class="btn btn-success btn-lg" style="width:100%;" type="submit"> <i class="fa fa-unlock-alt m-r-5"></i> Login</button>                                
                            </div>
                        </div>
                        
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                                        <span class="text-white ml-4"> OR </span>
                                        <a href="register">
                                            <button class="btn btn-secondary float-right" type="button">Register here</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="recoverform">
                    <div class="text-center">
                        <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="index.html">
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                                    <button class="btn btn-info float-right" type="button" name="action">Recover</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>