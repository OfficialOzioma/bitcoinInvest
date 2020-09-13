<?php use thecodeholic\phpmvc\Application; ?>
<?php if (Application::$app->session->getFlash('success')): ?>
    <div class="alert alert-success">
        <p><?php echo Application::$app->session->getFlash('success') ?></p>
    </div>
<?php endif; ?>


<div class="card text-left">
    <div class="ml-5 p-3">
        <h3>Profile Details</h3>
    </div>
    <div class="card-body p-5">
        <form method="post">
            <div class="form-group row">
                <label for="Fullname" class="col-sm-2 col-form-label">Your Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="<?php echo $admin->username; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="Email" class="col-sm-2 col-form-label">Your password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="password" value="<?php echo $admin->password; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">UPDATE DETAILS</button>
                </div>
            </div>
        </form>
    </div>
</div>
               