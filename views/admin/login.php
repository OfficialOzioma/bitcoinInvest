    <br /><br /><br />
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../images/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" >
                       <span class="ml-5 pl-5 mb-5 text-white text-center">
                           <h4 class="text-uppercase">Admin Login</h4>
                       </span>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control <?php echo $model->hasError('username') ? ' is-invalid' : '' ;?> input_user" value="<?php echo $model->username;?>" placeholder="username">
							<div class="invalid-tooltip">
                                <span style="font-size: 12pt; font-weight:bolder;">
                                    <?php echo $model->getFirstError('username'); ?>
                                </span>
                            </div>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control <?php echo $model->hasError('password') ? ' is-invalid' : '' ;?> input_pass" value="<?php echo $model->password;?>" placeholder="password">
							<div class="invalid-tooltip">
                                <span style="font-size: 12pt; font-weight:bolder;">
                                    <?php echo $model->getFirstError('password'); ?>
                                </span>
                            </div>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 			<button type="submit" name="button" class="btn login_btn">Login</button>
				   		</div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
    </div>
    