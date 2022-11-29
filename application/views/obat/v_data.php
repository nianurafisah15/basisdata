<section class="konten mt-2">
    <div class="container-fluid">


        <div class ="card shadow mb-4">
            <div class="card-header py-3 bg-dark text-white">
                <h6 class="m-0 font-waight-bold text-white"><?= $title; ?></h6>
                </div>
            </div>
            <div class="card body">
                    <div clas="col-md-6">
                    <a href="<?= base_url('obat/tambah'); ?>" class="btn btn-dark mb-3" 
                    class="btn btn-dark btn-sm rounded"><span class="fas fa-fw fa-plus"></span>Tambah Data</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>No.</th>
                            <th>Nama Obat</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($obat as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['nama_obat']; ?></td>
                                    <td>
                                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdown1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i></button>
                                        <div class="dropdown-menu">

                                        <a href="<?= base_url().'obat/edit/'.$r['id_obat']; ?>" class="dropdown-item has-icon">
                                        <span class="fas fa-fw fa-edit"></span>Edit</span></a>
                                        <a href="<?= base_url().'obat/hapus/'.$r['id_obat']; ?>" class="dropdown-item has-icon">
                                        <span class="fas fa-fw fa-trash-alt"></span>Delete</span></a>
                                    </td>
                                </tr>
                            <?php $no++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>