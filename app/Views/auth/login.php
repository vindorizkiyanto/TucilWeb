<link rel="stylesheet" href="/css/stylelogin.css">
<div class="login-box text-center">
    <div class="conntainer h-100 pt-5">
        <div class="row align-middle align-items-center h-100">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <h1 class="login-box-msg">Login</h1>

                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-12">
                                <a class="btn btn-success btn-block" href="<?= site_url('auth/index') ?>">Login</a>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="large" href="<?php echo base_url('auth/register'); ?>" class="text-center">Create Account</a>
                    </div>
                    </hr>
                </div>
            </div>
        </div>
    </div>
</div>