<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Berita</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <a href="<?= base_url('pengelola/posts/create') ?>" class="btn btn-primary mb-3">Tulis Berita</a>
                <table class="table table-bordered table-hover">
                    <thead class="thead-white">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?= $post['id'] ?></td>
                            <td><?= $post['title'] ?></td>
                            <td><?= substr($post['content'], 0, 100) ?>...</td>
                            <td>
                                <a href="<?= base_url('pengelola/posts/edit/' . $post['id']) ?>"
                                    class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>