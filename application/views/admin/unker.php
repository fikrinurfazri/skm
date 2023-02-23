<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="mb-2"><i class="bi bi-gear-fill"></i>Unit Kerja</h2>
                    <div class="custom-text-box">
                        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>KODE UNIT KERJA</th>
                                    <th>UNIT KERJA</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($unker as $get) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $get['KODE'] ?></td>
                                        <td><?= $get['UNIT_KERJA'] ?></td>
                                        <td>
                                            <button class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </td>

                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>

                        <!-- <h5 class="mb-3">e-SKM Adalah</h5>

                        <p class="mb-0">Aplikasi Survei Kepuasan Masyarakat yang menghasilkan informasi unit pelayanan instansi pemerintah secara rutin.
                            Aplikasi ini diharapkan mampu memberikan gambaran mengenai kualitas pelayanan di instansi pemerintah kepada masyarakat.
                            Indeks tersebut diperoleh berdasarkan pendapat masyarakat,
                            yang dikumpulkan melalui Survei Kepuasan Masyarakat Terhadap Unit Pelayanan Publik</p> -->
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="2009" data-speed="1000"></span>
                                        <span class="counter-number-text"></span>
                                    </div>

                                    <span class="counter-text">Jumlah User</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="2009" data-speed="1000"></span>
                                        <span class="counter-number-text"></span>
                                    </div>

                                    <span class="counter-text">Jumlah User</span>
                                </div>

                                <!-- <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="120" data-speed="1000"></span>
                                        <span class="counter-number-text">B</span>
                                    </div>

                                    <span class="counter-text">Donations</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>