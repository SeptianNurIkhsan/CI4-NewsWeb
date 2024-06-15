<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <style>
    .register-link {
        text-align: right;
        font-size: 14px;
        margin-top: 10px;
        /* Sesuaikan margin atas */
        margin-bottom: 15px;
        /* Sesuaikan margin bawah */
    }

    .login-button {
        text-align: center;
        margin-top: 20px;
        /* Sesuaikan margin atas */
    }
    </style>
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Tech</b>Today</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Masuk Untuk Melanjutkan</p>
                <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <form action="<?= base_url('login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="role" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="pengelola">Pengelola</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-users"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Menggunakan kelas CSS baru untuk link pendaftaran -->
                    <div class="mt-3 register-link">
                        <a href="<?= base_url('/register') ?>">Belum Memiliki Akun? Daftar Disini</a>
                    </div>
                    <div class="login-button">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
</body>

</html>