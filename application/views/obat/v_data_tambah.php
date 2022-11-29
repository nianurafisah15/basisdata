<section class="konten mt-2">
    <div class="container-fluid">

            <div class="card-header bg-dark text-white">
                <?= $title; ?>
                    <a href="<?= base_url('obat'); ?>" class="btn btn-light btn-sm float-right text-black">Kembali</a>
            </div>
            <div class="card body">
                <form method="post" action="<?= base_url('obat/insert'); ?>">
                        <div class="form-group">
                            <label for="">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>