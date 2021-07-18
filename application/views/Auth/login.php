<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('asset') ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('asset') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?= base_url('asset') ?>/plugins/iziToast/dist/css/iziToast.min.css">

    <link href="<?= base_url('asset/') ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Sistem Informasi Pendakian Gunung</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <p class="text-center mt-4">Selamat Datang</p>
            <div class="card-body login-card-body">
                <form action="<?= base_url('auth/login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('asset') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('asset') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('asset') ?>/dist/js/adminlte.min.js"></script>

    <script src="<?= base_url('asset') ?>/plugins/iziToast/dist/js/iziToast.min.js"></script>

    <?php if ($this->session->flashdata('warning')) : ?>
        <script type="text/javascript">
            iziToast.warning({
                message: '<?= $this->session->flashdata('warning') ?>',
                position: 'topRight'
            });
        </script>
    <?php endif; ?>

    <!-- izitoast -->
    <?php if ($this->session->flashdata('success')) : ?>
        <script type="text/javascript">
            iziToast.success({
                message: '<?= $this->session->flashdata('success') ?>',
                position: 'topRight'
            });
        </script>
    <?php endif; ?>



</body>

</html>