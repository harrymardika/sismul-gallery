<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h2 class="mb-3">Daftar Gallery</h2>
        <a href="/gallery/create" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($galleries as $g) : ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="/uploads/<?= $g['image']; ?>" class="card-img-top" alt="<?= $g['title']; ?>" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $g['title']; ?></h5>
                            <p class="card-text text-truncate"><?= $g['description']; ?></p>
                        </div>
                        <div class="card-footer bg-white border-top-0 d-flex justify-content-between">
                            <a href="/gallery/detail/<?= $g['id']; ?>" class="btn btn-info btn-sm text-white">Detail</a>
                            <div>
                                <a href="/gallery/edit/<?= $g['id']; ?>" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="/gallery/delete/<?= $g['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if(empty($galleries)): ?>
            <div class="alert alert-warning mt-3">Belum ada data gallery.</div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection(); ?>
