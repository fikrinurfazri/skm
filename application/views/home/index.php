<main>

    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url() ?>assets/images/slide/survei.jpg" class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>E-SKM</h1>

                                    <p>Aplikasi Instansi Penyelenggara <br> Pelayanan Pemerintah Survei Kepuasan <br> Masyarakat Terhadap Pelayanan Publik

                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="<?= base_url() ?>assets/images/slide/survei2.jpg" class="carousel-image img-fluid" alt="...">
                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>E-SKM</h1>

                                    <p>Aplikasi Instansi Penyelenggara <br> Pelayanan Pemerintah Survei Kepuasan <br> Masyarakat Terhadap Pelayanan Publik

                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="<?= base_url() ?>assets/images/slide/survei3.jpeg" class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>E-SKM</h1>

                                    <p>Aplikasi Instansi Penyelenggara <br> Pelayanan Pemerintah Survei Kepuasan <br> Masyarakat Terhadap Pelayanan Publik

                                    </p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="<?= base_url() ?>assets/images/list.jpg" class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Apa itu e-SKM?</h2>

                        <h5 class="mb-3">e-SKM Adalah</h5>

                        <p class="mb-0">Aplikasi Survei Kepuasan Masyarakat yang menghasilkan informasi unit pelayanan instansi pemerintah secara rutin.
                            Aplikasi ini diharapkan mampu memberikan gambaran mengenai kualitas pelayanan di instansi pemerintah kepada masyarakat.
                            Indeks tersebut diperoleh berdasarkan pendapat masyarakat,
                            yang dikumpulkan melalui Survei Kepuasan Masyarakat Terhadap Unit Pelayanan Publik</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">Tujuan</h5>
                                <p>Survei Kepuasan Masyarakat merupakan tolok ukur untuk menilai tingkat kualitas pelayanan yang diberikan oleh Unit Pelayanan publik. Survei ini dilakukan sebagai upaya untuk meningkatkan kualitas pelayanan publik dan mengetahui kinerja pelayanan aparatur pemerintah kepada masyarakat. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding" id="section_2">
        <div class="container">
            <div class="row">



                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Hasil Survei</h2>
                </div>
                <div class="card shadow-lg">
                    <br>
                    <div class="nav nav-tabs justify-content-center " id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <h2>2023</h2>
                        </button>

                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead class="align-middle text-center">
                                        <tr>
                                            <th rowspan="3">No</th>
                                            <th rowspan="3">UNIT KERJA</th>
                                            <th colspan="8">HASIL PENILAIAN TAHUN 2023</th>

                                        </tr>
                                        <tr>
                                            <th colspan="4">SEMESTER 1</th>
                                            <th colspan="4">SEMESTER 2</th>
                                        </tr>
                                        <tr>
                                            <th>RESPONDEN</th>
                                            <th>NILAI INDEX</th>
                                            <th>NILAI IKM</th>
                                            <th>MUTU PELAYANAN</th>
                                            <th>RESPONDEN</th>
                                            <th>NILAI INDEX</th>
                                            <th>NILAI IKM</th>
                                            <th>MUTU PELAYANAN</th>

                                        </tr>
                                    </thead>

                                    <tbody class="text-center">
                                        <?php foreach ($hasil as $hs) : ?>
                                            <tr class="align-middle">
                                                <td>1</td>
                                                <td><?= $hs['NAMA'] ?></td>
                                                <td><?= $hs['RESPONDEN'] ?></td>
                                                <td><?= $hs['N_INDEX'] ?></td>
                                                <td><?= $hs['IKM'] ?></td>

                                                <?php if ($hs['MUTU'] == 'A') { ?>
                                                    <td class="bg-primary"><?= $hs['MUTU'] ?></td>
                                                <?php } elseif ($hs['MUTU'] == 'B') { ?>
                                                    <td class="bg-success"><?= $hs['MUTU'] ?></td>
                                                <?php } elseif ($hs['MUTU'] == 'C') { ?>
                                                    <td class="bg-warning"><?= $hs['MUTU'] ?></td>
                                                <?php } else { ?>
                                                    <td class="bg-danger"><?= $hs['MUTU'] ?></td>
                                                <?php } ?>


                                                <?php if ($hs['RESPONDEN2'] == 1) { ?>
                                                    <td>0</td>
                                                <?php } else { ?>
                                                    <td><?= $hs['RESPONDEN2'] ?></td>

                                                <?php } ?>
                                                <td><?= $hs['N_INDEX2'] ?></td>
                                                <td><?= $hs['IKM2'] ?></td>

                                                <?php if ($hs['MUTU2'] == 'A') { ?>
                                                    <td class="bg-primary"><?= $hs['MUTU2'] ?></td>
                                                <?php } elseif ($hs['MUTU2'] == 'B') { ?>
                                                    <td class="bg-success"><?= $hs['MUTU2'] ?></td>
                                                <?php } elseif ($hs['MUTU2'] == 'C') { ?>
                                                    <td class="bg-warning"><?= $hs['MUTU2'] ?></td>
                                                <?php } elseif ($hs['MUTU2'] == 'D') { ?>
                                                    <td class="bg-danger"><?= $hs['MUTU2'] ?></td>
                                                <?php } else { ?>
                                                    <td></td>
                                                <?php } ?>



                                            </tr>
                                        <?php endforeach ?>
                                        <?php foreach ($hasilkota as $hsk) : ?>
                                            <tr class="align-middle">
                                                <td>1</td>
                                                <td><?= $hsk['NAMA'] ?></td>
                                                <td><?= $hsk['RESPONDEN'] ?></td>
                                                <td><?= $hsk['N_INDEX'] ?></td>
                                                <td><?= $hsk['IKM'] ?></td>

                                                <?php if ($hsk['MUTU'] == 'A') { ?>
                                                    <td class="bg-primary"><?= $hsk['MUTU'] ?></td>
                                                <?php } elseif ($hsk['MUTU'] == 'B') { ?>
                                                    <td class="bg-success"><?= $hsk['MUTU'] ?></td>
                                                <?php } elseif ($hsk['MUTU'] == 'C') { ?>
                                                    <td class="bg-warning"><?= $hsk['MUTU'] ?></td>
                                                <?php } else { ?>
                                                    <td class="bg-danger"><?= $hsk['MUTU'] ?></td>
                                                <?php } ?>


                                                <td><?= $hsk['RESPONDEN2'] ?></td>
                                                <td><?= $hsk['N_INDEX2'] ?></td>
                                                <td><?= $hsk['IKM2'] ?></td>

                                                <?php if ($hsk['MUTU2'] == 'A') { ?>
                                                    <td class="bg-primary"><?= $hsk['MUTU2'] ?></td>
                                                <?php } elseif ($hsk['MUTU2'] == 'B') { ?>
                                                    <td class="bg-success"><?= $hsk['MUTU2'] ?></td>
                                                <?php } elseif ($hsk['MUTU2'] == 'C') { ?>
                                                    <td class="bg-warning"><?= $hsk['MUTU2'] ?></td>
                                                <?php } elseif ($hsk['MUTU2'] == 'D') { ?>
                                                    <td class="bg-danger"><?= $hsk['MUTU2'] ?></td>
                                                <?php } else { ?>
                                                    <td></td>
                                                <?php } ?>



                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Berita dan Pengumuman</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap shadow">
                        <img src="<?= base_url() ?>assets/images/causes/berita1.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">RAPAT KOORDINASI DAN EVALUASI SATGAS TASIK RESIK KOTA TASIKMALAYA
                                </h5>
                                <!-- <p>Bertempat di Ruang Aula Balekota Tasikmalaya diadakan Rapat Koordinasi dan Evaluasi Satgas Tasik Resik Kota Tasikmalaya. </p> -->

                            </div>

                            <a href="donate.html" class="custom-btn btn">Lihat Berita</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>