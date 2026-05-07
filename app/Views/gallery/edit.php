<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-3">Edit Data Gallery</h2>
        <div class="card">
            <div class="card-body">
                <form action="/gallery/update/<?= $gallery['id']; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="oldImage" value="<?= $gallery['image']; ?>">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $gallery['title']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"><?= $gallery['description']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar (Biarkan kosong jika tidak diubah)</label>
                        <input class="form-control" type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
                        <div class="mt-2">
                            <img src="/uploads/<?= $gallery['image']; ?>" class="img-thumbnail" width="150" alt="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/gallery" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
