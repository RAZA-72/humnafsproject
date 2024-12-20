<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Wrapper -->
    <div class="hk-wrapper hk-pg-auth" data-footer="simple">
        <!-- Main Content -->
        <div class="hk-pg-wrapper pt-0 pb-xl-0 pb-5">
            <div class="hk-pg-body pt-0 pb-xl-0">
                <!-- Container -->
                <div class="container-xxl">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-10 position-relative mx-auto">
                            <div class="auth-content py-5">
                                <form class="w-100" action="userlogin" method="post">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-7 col-sm-10 mx-auto">
                                            <div class="text-center mb-5">
                                                <a class="navbar-brand me-0" href="index.html">
                                                    <img class="brand-img w-50 d-inline-block"
                                                        src="<?= base_url(''); ?>/assets/images/11.png" alt="Humnafas">
                                                </a>
                                            </div>
                                            <div class="card card-lg card-border">
                                                <div class="card-body">
                                                    <h4 class="mb-4 text-center">Sign in to your account</h4>
                                                    <div class="row gx-3">
                                                        <div class="form-group col-lg-12">
                                                            <div class="form-label-group">
                                                                <label>User Name</label>
                                                            </div>
                                                            <input class="form-control" name="loginid"
                                                                placeholder="Enter username or email ID" value=""
                                                                type="text">
                                                        </div>
                                                        <div class="form-group col-lg-12">
                                                            <div class="form-label-group">
                                                                <label>Password</label>
                                                            </div>
                                                            <div class="input-group password-check">
                                                                <input class="form-control" name="password"
                                                                    placeholder="Enter your password" value=""
                                                                    type="text">

                                                                <a href="#" class="input-suffix text-muted">
                                                                    <span class="feather-icon"><i class="form-icon"
                                                                            data-feather="eye"></i></span>
                                                                    <span class="feather-icon d-none"><i
                                                                            class="form-icon"
                                                                            data-feather="eye-off"></i></span>
                                                                </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button
                                                        class="btn btn-primary btn-uppercase btn-block">Login</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Page Body -->
            <!-- Page Footer -->
            <div class="hk-footer border-0">
                <footer class="container-xxl footer">
                    <div class="row">
                        <div class="col-xl-8 text-center">
                            <p class="footer-text pb-0"><span class="copy-text">Humnafs India © 2022 All rights
                                    reserved.</span> </p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- / Page Footer -->

        </div>
        <!-- /Main Content -->
    </div>
    <!-- /Wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>