<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <!-- <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="<?= base_url() ?>assets/images/list.jpg" class="custom-text-box-image img-fluid" alt="">
                </div> -->

                <div class="col-lg-12 col-12">

                    <h2 class="mb-2">Daftar user</h2>
                    <div class="custom-text-box">
                        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i> Tambah</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="<?= base_url() ?>admin/user/simpan" method="post">
                                        <div class="modal-body">
                                            <div class="form-group mb-2">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" id="nama" class="form-control">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="kode_unker">Unit Kerja</label>
                                                <select name="kode_unker" id="kode_unker" class="form-control">
                                                    <?php foreach ($unker as $unit) : ?>
                                                        <option value="<?= $unit['KODE'] ?>"><?= $unit['UNIT_KERJA'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="level">Level</label>
                                                <select name="level" id="level" class="form-control">
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin OPD</option>
                                                    <option value="3">UPTD</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="password">Password</label>
                                                <input type="text" name="password" id="password" class="form-control">
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
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($getall as $get) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $get['NAMA'] ?></td>
                                        <td><?= $get['USERNAME'] ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>admin/user/update/<?= $get['ID_ADMIN'] ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <a href="<?= base_url() ?>admin/user/delete/<?= $get['ID_ADMIN'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>

                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>


                </div>

            </div>
        </div>
    </section>
</main>