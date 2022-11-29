<section class="konten mt-2">
    <div class="container-fluid">
            <div class="card-header bg-dark text-white">
                <?= $title; ?>
                    <a href="<?= base_url('dokter'); ?>" class="btn btn-light btn-sm float-right text-black">Kembali</a>
                </div>
                <div class="card body">
                    <form method="post" action="<?= base_url('dokter/update'); ?>">
                        <input type="hidden" name="id" value="<?= $r['id_dokter']; ?>">
                        <div class="form-group">
                            <label for="">Nama Dokter</label>
                            <input type="text" name="nama_dokter" value="<?= $r ['nama_dokter']; ?>" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>