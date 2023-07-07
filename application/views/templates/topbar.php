<?php
if ($this->session->userdata('level') == 1) {
    $user = 'superadmin';
} elseif ($this->session->userdata('level') == 2) {
    $user = 'admin';
}
?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw "></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">
                    <?php
                        $today = date('Y-m-d');
                        $additional = "tanggal_diterima = '$today'";
                        $additionalk = "tanggal_keluar = '$today'";
                        $jumlahsuratmasuk = $this->model_surat->countdatawithadd('suratmasuk', $additional) ->result();
                        $jumlahsuratkeluar = $this->model_surat->countdatawithadd('suratkeluar', $additionalk)->result();

                        $totalSuratMasuk = 0;
                        $totalSuratKeluar = 0;
                        
                        foreach ($jumlahsuratmasuk as $item) {
                            $totalSuratMasuk += $item->total;
                        }
                        
                        foreach ($jumlahsuratkeluar as $item) {
                            $totalSuratKeluar += $item->total;
                        }
                        
                        $total = $totalSuratMasuk + $totalSuratKeluar;
                        
                        echo "" . $total;

                    // foreach ( $jumlahsuratmasuk as $t) {
                    //     echo $t->total;
                    // }
                    ?>
                </span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Notifikasi, <?php echo date('d/m/Y') ?>
                </h6>
                <?php
                $sm_today_add = "tanggal_diterima='$today'";
                $sk_today_add = "tanggal_keluar='$today'";  
                $sm_today = $this->model_surat->getdatawithadd('suratmasuk', $sm_today_add)->result();
                $sk_today = $this->model_surat->getdatawithadd('suratkeluar', $sk_today_add)->result();
                // $idx_today = $this->model_surat->getdatawithadd('indeks', $idx_today_add)->result();
                foreach ($sm_today as $smt) : ?>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="font-weight-bold">
                            <span class="medium text-gray-600">Surat Masuk</span>
                            <div class="text-truncate"><?php echo $smt->no_suratmasuk ?></div>
                            <div class="small text-gray-500">
                                Pengirim : <?php echo $smt->asal_surat ?> ·
                                <?php $date = date_create($smt->tanggal_diterima);
                                echo date_format($date, 'd/m/Y'); ?></div>
                        </div>
                    </a>
                <?php endforeach; ?>
                <?php foreach ($sk_today as $skt) : ?>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="font-weight-bold">
                        <span class="medium text-gray-600">Surat Keluar</span>
                            <div class="text-truncate"><?php echo $skt->no_suratkeluar ?>.</div>
                            <div class="small text-gray-500">
                                Penerima : <?php echo $skt->tujuan ?> ·
                                <?php $date = date_create($skt->tanggal_keluar);
                                echo date_format($date, 'd/m/Y'); ?></div>
                        </div>
                    </a>
                <?php endforeach; ?>
                
                <!-- <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('admin/suratmasuk') ?>">Tampilkan Lebih...</a> -->
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-user-circle fa-2x"></span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('admin/profil') ?>">
                    <i class="fas fa-user fa-sm fa-fw my-3 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class=" fas fa-sign-out-alt fa-sm fa-fw my-3 text-gray-400"></i>
                    Logout
                </a>
                
            </div>
        </li>

    </ul>

</nav>