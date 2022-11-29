<section class="konten mt-2">
    <div class="container-fluid">

            <div class="card-header bg-dark text-white">
                <?= $title; ?>
                    <a href="<?= base_url('pasien'); ?>" class="btn btn-light btn-sm float-right text-black">Kembali</a>
            </div>
            <div class="card body">
                <form method="post" action="<?= base_url('pasien/insert'); ?>">
                        <div class="form-group">
                            <label for="">Nama Pasien</label>
                            <input type="text" name="nama_pasien" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis  Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control" required>
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" name="umur" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>