 <?php 
 $menu = $this->uri->segment(1)
 ?>
 <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>KASBUKU</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    
                    <div class="ms-3">
                        <h6 class="mb-0"><?= $this->session->userdata('nama') ?></h6>
                        <span><?= $this->session->userdata('level') ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?= base_url('home') ?>" class="nav-item nav-link <?php if($menu == 'home'){echo 'active';}?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="<?= base_url('pemasukan') ?>" class="nav-item nav-link <?php if($menu == 'pemasukan'){echo 'active';}?>"><i class="fa fa-th me-2"></i>Pemasukan</a>
                    <a href="<?= base_url('pengeluaran') ?>" class="nav-item nav-link <?php if($menu == 'pengeluaran'){echo 'active';}?>"><i class="fa fa-keyboard me-2"></i>Pengeluaran</a>
                    <?php if($this->session->userdata()!='Admin'){ ?>
                        <a href="<?= base_url('user') ?>" class="nav-item nav-link <?php if($menu == 'user'){echo 'active';}?>"><i class="fa fa-table me-2"></i>User</a>
                    <?php } ?>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
