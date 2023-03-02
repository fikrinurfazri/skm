<main>

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

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <!-- <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="<?= base_url() ?>assets/images/list.jpg" class="custom-text-box-image img-fluid" alt="">
                </div> -->

                <div class="col-lg-12 col-12">
                    <h2 class="mb-2">Hasil Survei <?= $user['NAMA'] ?></h2>
                    <div class="row">
                        <div class="row mb-3">

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb d-flex">
                                        <table class="table table-bordered">
                                            <tr class="text-center">
                                                <td>
                                                    <b>NILAI IKM</b>
                                                </td>
                                                <td><?= $user['KODE_UNIT_KERJA'] ?></td>
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="align-middle text-center" rowspan="2">
                                                    <h1><?= number_format($ikm, 2, '.', ',') ?></h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>JUMLAH : <?= $responden ?> Orang</li>
                                                        <li>JENIS KELAMIN : L P</li>
                                                        <li>PENDIDIKAN
                                                            <ul>
                                                                <li>SD</li>
                                                                <li>SMP</li>
                                                                <li>SMK</li>
                                                                <li>S1</li>
                                                            </ul>
                                                        </li>
                                                        <li>Periode Survei = 01/01/2022 - 01/01/2023</li>

                                                    </ul>

                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-4 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <!-- id="tabel-data" -->
                                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Responden</th>
                                                <th>Unsur 1</th>
                                                <th>Unsur 2</th>
                                                <th>Unsur 3</th>
                                                <th>Unsur 4</th>
                                                <th>Unsur 5</th>
                                                <th>Unsur 6</th>
                                                <th>Unsur 7</th>
                                                <th>Unsur 8</th>
                                                <th>Unsur 9</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php
                                                    $no = 1;
                                                    foreach ($getnilai as $get) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $get['U1'] ?></td>
                                                    <td><?= $get['U2'] ?></td>
                                                    <td><?= $get['U3'] ?></td>
                                                    <td><?= $get['U4'] ?></td>
                                                    <td><?= $get['U5'] ?></td>
                                                    <td><?= $get['U6'] ?></td>
                                                    <td><?= $get['U7'] ?></td>
                                                    <td><?= $get['U8'] ?></td>
                                                    <td><?= $get['U9'] ?></td>
                                                </tr>
                                            <?php endforeach ?> -->
                                            <tr>
                                                <td><b> RATA RATA</b></td>
                                                <?php foreach ($unsur as $u) : ?>
                                                    <td><?= $u ?></td>
                                                <?php endforeach ?>
                                            </tr>

                                            <tr>
                                                <td><b> NRR Tertimbang</b></td>
                                                <?php foreach ($nrrt as $nilai) : ?>
                                                    <td><?= number_format($nilai, 3, '.', ',') ?></td>
                                                <?php endforeach ?>
                                            </tr>
                                            <tr>
                                                <td colspan="9"><b>NILAI IKM</b></td>
                                                <td><?= number_format($ikm, 3, '.', ',') ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="9"><b>NILAI INDEX</b></td>
                                                <td><?= number_format($index, 3, '.', ',') ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</main>