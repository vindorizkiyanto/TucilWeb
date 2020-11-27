<link rel="stylesheet" href="/css/stylelogin.css">
<div class="login-box">
    <div class="conntainer h-100 pt-5">
        <div class="row align-middle align-items-center h-100">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <h1 class="regist-box-msg">Create Account</h1>

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="Username" class="form-control form-control-user" id="Username" name="Username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="Email" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-12">
                                <a class="btn btn-success btn-block" href="<?= site_url('auth/login') ?>">Create</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>