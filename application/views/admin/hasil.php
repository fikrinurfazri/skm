<main>

    <section class="section-padding" id="section_2">
        <div class="container">
            <div class="row">



                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Hasil Survei</h2>
                </div>
                <!-- <button class="btn btn-primary mb-3 col-2"><i class="bi bi-printer"></i></button> -->
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
                                            <th colspan="12">HASIL PENILAIAN TAHUN 2023</th>

                                        </tr>
                                        <tr>
                                            <th colspan="3">TRIWULAN 1</th>
                                            <th colspan="3">TRIWULAN 2</th>
                                            <th colspan="3">TRIWULAN 3</th>
                                            <th colspan="3">TRIWULAN 4</th>
                                        </tr>
                                        <tr>
                                            <th>RESPONDEN</th>
                                            <th>NILAI IKM</th>
                                            <th>MUTU PELAYANAN</th>
                                            <th>RESPONDEN</th>
                                            <th>NILAI IKM</th>
                                            <th>MUTU PELAYANAN</th>
                                            <th>RESPONDEN</th>
                                            <th>NILAI IKM</th>
                                            <th>MUTU PELAYANAN</th>
                                            <th>RESPONDEN</th>
                                            <th>NILAI IKM</th>
                                            <th>MUTU PELAYANAN</th>

                                        </tr>
                                    </thead>

                                    <tbody class="text-center">
                                        <?php
                                        $no = 1;
                                        foreach ($hasil as $hs) : ?>
                                            <tr class="align-middle">
                                                <td><?= $hs['RESPONDEN'] ?></td>
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

                                                <td><?= $hs['RESPONDEN2'] ?></td>
                                                <td><?= $hs['IKM2'] ?></td>

                                                <?php if ($hs['MUTU2'] == 'A') { ?>
                                                    <td class="bg-primary"><?= $hs['MUTU2'] ?></td>
                                                <?php } elseif ($hs['MUTU2'] == 'B') { ?>
                                                    <td class="bg-success"><?= $hs['MUTU2'] ?></td>
                                                <?php } elseif ($hs['MUTU2'] == 'C') { ?>
                                                    <td class="bg-warning"><?= $hs['MUTU2'] ?></td>
                                                <?php } else { ?>
                                                    <td class="bg-danger"><?= $hs['MUTU2'] ?></td>
                                                <?php } ?>

                                                <td><?= $hs['RESPONDEN3'] ?></td>
                                                <td><?= $hs['IKM3'] ?></td>

                                                <?php if ($hs['MUTU3'] == 'A') { ?>
                                                    <td class="bg-primary"><?= $hs['MUTU3'] ?></td>
                                                <?php } elseif ($hs['MUTU3'] == 'B') { ?>
                                                    <td class="bg-success"><?= $hs['MUTU3'] ?></td>
                                                <?php } elseif ($hs['MUTU3'] == 'C') { ?>
                                                    <td class="bg-warning"><?= $hs['MUTU3'] ?></td>
                                                <?php } else { ?>
                                                    <td class="bg-danger"><?= $hs['MUTU3'] ?></td>
                                                <?php } ?>




                                                <?php if ($hs['RESPONDEN4'] == 1) { ?>
                                                    <td>0</td>
                                                <?php } else { ?>
                                                    <td><?= $hs['RESPONDEN4'] ?></td>

                                                <?php } ?>
                                                <td><?= $hs['IKM4'] ?></td>

                                                <?php if ($hs['MUTU4'] == 'A') { ?>
                                                    <td class="bg-primary"><?= $hs['MUTU4'] ?></td>
                                                <?php } elseif ($hs['MUTU4'] == 'B') { ?>
                                                    <td class="bg-success"><?= $hs['MUTU4'] ?></td>
                                                <?php } elseif ($hs['MUTU4'] == 'C') { ?>
                                                    <td class="bg-warning"><?= $hs['MUTU4'] ?></td>
                                                <?php } elseif ($hs['MUTU4'] == 'D') { ?>
                                                    <td class="bg-danger"><?= $hs['MUTU4'] ?></td>
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

    <!-- <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

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
            </div>
        </div>
    </section> -->
</main>