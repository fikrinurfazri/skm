<body id="section_1">

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="<?= base_url() ?>assets/images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <!-- <span>
                    E-SKM
                    <small>Elektronik Survei Kepuasan Masyarakat</small>
                </span> -->
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= $this->router->class == 'dashboard' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/dashboard">
                            Dashboard</a>

                    </li>
                    <?php if ($user['LEVEL'] == 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $this->router->class == 'user' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/user">
                                User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $this->router->class == 'unit_kerja' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/unit_kerja">
                                Unit Kerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $this->router->class == 'unsur_skm' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/master/unsur_skm">
                                Unsur SKM</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link <?= $this->router->class == 'nilai' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/master/nilai">
                                Nilai Unsur</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link <?= $this->router->class == 'pertanyaan' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/master/pertanyaan">
                                Pertanyaan</a>
                        </li>

                    <?php } elseif ($user['LEVEL'] == 2) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $this->router->class == 'subadmin' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/subadmin">
                                Sub Admin
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= $this->router->class == 'soal' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/soal">
                                Kuisioner</a>
                        </li>
                    <?php } else { ?>

                        <li class="nav-item">
                            <a class="nav-link <?= $this->router->class == 'soal' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/soal">
                                Kuisioner</a>
                        </li>

                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $this->router->class == 'hasil' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/hasil">
                            Hasil Survei</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= $this->router->class == 'berita' ? 'active' : ''; ?> " href="<?= base_url() ?>admin/berita">
                            Berita</a>

                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-people"> </i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('admin/profile') ?>"><i class="bi bi-gear-fill"></i>
                                    Profile</a></li>

                            <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                    <i class="bi bi-exclamation-circle-fill"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>