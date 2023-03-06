<main>
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