<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <!-- <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="<?= base_url() ?>assets/images/list.jpg" class="custom-text-box-image img-fluid" alt="">
                </div> -->

                <div class="col-lg-12 col-12">

                    <h2 class="mb-2"><i class="bi bi-gear-fill"></i> Nilai Unsur</h2>
                    <div class="custom-text-box">
                        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i> Tambah</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-plus"></i> Pengaturan User</h5> -->
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="<?= base_url() ?>admin/master/nilai/simpan" method="post">
                                        <div class="modal-body">
                                            <div class="form-group mb-2">
                                                <label for="unsur">Unsur SKM</label>
                                                <select name="id_unsur" id="id_unsur" class="form-control">
                                                    <?php foreach ($getunsur as $get) : ?>
                                                        <option value="<?= $get['ID_UNSUR'] ?>"><?= $get['UNSUR_SKM'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>
                                            <div class="form-group d-flex mb-2">
                                                <div class="col-10">
                                                    <label for="nilai">Penilaian</label>
                                                    <input type="text" name="nilai" id="nilai" class="form-control">
                                                </div>
                                                &nbsp;
                                                <div class="col-2">
                                                    <label for="bobot">Bobot</label>
                                                    <input type="number" name="bobot" id="bobot" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>PENILAIAN</th>
                                    <th>BOBOT</th>
                                    <th>UNSUR</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($getall as $get) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $get['PENILAIAN'] ?></td>
                                        <td><?= $get['BOBOT'] ?></td>
                                        <td><?= $get['UNSUR_SKM'] ?></td>
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