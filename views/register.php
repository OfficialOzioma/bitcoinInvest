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
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div>
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="/images/bitin.png" alt="homepage" class="light-logo" width="300" /></span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20"  method="post">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control<?php echo $model->hasError('fullname') ? ' is-invalid' : '' ;?> form-control-lg" name="fullname" placeholder="Fullname" aria-label="Fullname" aria-describedby="basic-addon1" value="<?php echo $model->fullname;?>" required>
                                    <div class="invalid-feedback">
                                        <span style="font-size: 15pt;">
                                            <?php echo $model->getFirstError('fullname'); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa fa-at"></i></span>
                                    </div>
                                    <input type="text" class="form-control<?php echo $model->hasError('username') ? ' is-invalid' : '' ;?> form-control-lg" name="username" placeholder="Username" aria-label="username" aria-describedby="basic-addon1"  value="<?php echo $model->username;?>" required>
                                    <div class="invalid-feedback">
                                        <span style="font-size: 15pt;">
                                            <?php echo $model->getFirstError('username'); ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" class="form-control<?php echo $model->hasError('email') ? ' is-invalid' : '' ;?> form-control-lg" name="email" placeholder="Email Address" aria-label="Email" aria-describedby="basic-addon1"  value="<?php echo $model->email;?>" required>
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
                                    <input type="password" class="form-control<?php echo $model->hasError('password') ? ' is-invalid' : '' ;?> form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" value="<?php echo $model->password;?>" required>
                                    <div class="invalid-feedback">
                                        <span style="font-size: 15pt;">
                                            <?php echo $model->getFirstError('password'); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="fa fa-eye-slash"></i></span>
                                    </div>
                                    <input type="password" class="form-control<?php echo $model->hasError('passwordConfirm') ? ' is-invalid' : '' ;?> form-control-lg" name="passwordConfirm" placeholder=" Confirm Password" aria-label="Password" aria-describedby="basic-addon1"  value="<?php echo $model->passwordConfirm;?>" >
                                    <div class="invalid-feedback">
                                        <span style="font-size: 15pt;">
                                            <?php echo $model->getFirstError('passwordConfirm'); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Register</button>
                                    </div>
                                    <hr />
                                   <span class="text-white mt-5 pt-5">
                                        Already a user ?
                                        <a href="/login">
                                            <button type="button" class="btn btn-outline-info text-white">Login here</button>
                                        </a>
                                        
                                   </span>
                                   
                                </div>
                            </div>
                        </div>
                    </form>
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