<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <style>
    .register-link {
        text-align: right;
        font-size: 14px;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .register-button {
        text-align: center;
        margin-top: 20px;
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
                <p class="login-box-msg">Daftar Akun Baru</p>
                <form action="<?= base_url('/register') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="role" class="form-control" required>
                            <option value="admin">Admin</option>
                            <option value="pengelola">Pengelola</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-users"></span>
                            </div>
                        </div>
                    </div>
                    <div class="register-button">
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </div>
                </form>
                <div class="register-link">
                    <a href="<?= base_url('/login') ?>">Sudah Memiliki Akun? Masuk Disini</a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
</body>

</html>