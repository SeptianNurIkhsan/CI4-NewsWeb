<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-lg-8 mt-4">
        <h1 class="display-4 mb-4 text-center"><?= $post['title'] ?></h1>
        <p class="lead"><?= $post['content'] ?></p>
        <div class="text-left mt-10">
            <a href="<?= base_url('/') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>