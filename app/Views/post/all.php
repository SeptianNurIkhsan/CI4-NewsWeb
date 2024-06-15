<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Semua Berita</h1>
    <div class="row">
        <?php foreach ($posts as $post): ?>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?= base_url('post/' . $post['id']) ?>"><?= $post['title'] ?></a>
                    </h5>
                    <p class="card-text"><?= substr($post['content'], 0, 100) ?>...</p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>