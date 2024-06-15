<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Berita</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="<?= base_url('/pengelola/posts/update/' . $post['id']) ?>" method="post">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $post['title'] ?>" required>
            </div>
            <div class="form-group">
                <label for="content">Isi Berita</label>
                <textarea class="form-control" id="content" name="content" rows="5"
                    required><?= $post['content'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('/pengelola/posts') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
<?= $this->endSection() ?>