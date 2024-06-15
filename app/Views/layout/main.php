<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'TechToday' ?></title>
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= $this->include('layout/navbar') ?>
        <?= $this->include('layout/sidebar') ?>
        <div class="content-wrapper">
            <?= $this->renderSection('content') ?>
        </div>
        <?= $this->include('layout/footer') ?>
    </div>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
</body>

</html>