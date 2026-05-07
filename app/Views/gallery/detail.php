<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-3">Detail Gallery</h2>
        <div class="card mb-3">
            <img src="/uploads/<?= $gallery['image']; ?>" class="card-img-top" alt="<?= $gallery['title']; ?>">
            <div class="card-body">
                <h4 class="card-title"><?= $gallery['title']; ?></h4>
                <p class="card-text"><?= nl2br($gallery['description']); ?></p>
                <p class="card-text"><small class="text-muted">Diunggah: <?= $gallery['created_at']; ?></small></p>
                <a href="/gallery" class="btn btn-secondary">Kembali</a>
                <a href="/gallery/edit/<?= $gallery['id']; ?>" class="btn btn-warning text-white">Edit</a>
                <a href="/gallery/delete/<?= $gallery['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
