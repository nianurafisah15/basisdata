        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-0">
                    <i class="fas fa-fw fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Klinik Pacar Jeno</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <div class="sidebar-heading">
                    Klinik
                </div>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('dashboard');?>">
            <i class="fas fa-home"></i>
            Dashboard</a>
        </li>
        <hr class="sidebar-divider">
            <div class="sidebar-heading">
                    Data
                </div>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('users');?>">
            <i class="fas fa-user"></i>
            Data Pengguna</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('dokter');?>">
            <i class="fas fa-stethoscope"></i>
            Data Dokter</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('pasien');?>">
            <i class="fas fa-user-injured"></i>
            Data Pasien</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('obat'); ?>">
            <i class="fas fa-tablets"></i>
            Data obat</a>
        </li>
        <hr class="sidebar-divider">
            <div class="sidebar-heading">
                        Kunjungan
                    </div>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kunjungan'); ?>">
            <i class="fas fa-procedures"></i>
            Berobat</a>
        </li>
        <hr class="sidebar-divider">
            <div class="sidebar-heading">
                        laporan
                    </div>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('laporan/data_dokter');?>">
            <i class="fas fa-book-medical"></i>
            Laporan Dokter</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('laporan/data_pasien');?>">
            <i class="fas fa-copy"></i>
            Laporan Pasien</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('laporan/data_kunjungan');?>">
            <i class="fas fa-book-open"></i>
            Laporan kunjungan</a>    
        </li>
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            Keluar</a>
        </li>
        </ul>
    </div>
    </nav>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->