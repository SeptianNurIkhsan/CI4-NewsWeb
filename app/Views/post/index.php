<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Berita</h1>
    <div class="row">
        <?php foreach ($posts as $key => $post): ?>
        <?php if ($key < 3): ?>
        <!-- Hanya tampilkan 3 berita utama -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?= base_url('post/' . $post['id']) ?>"><?= $post['title'] ?></a>
                    </h5>
                    <p class="card-text"><?= substr($post['content'], 0, 100) ?>...</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>

        <div class="text-center mt-4">
            <a href="<?= base_url('all-posts') ?>" class="btn btn-primary">Lihat Semua Berita</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>