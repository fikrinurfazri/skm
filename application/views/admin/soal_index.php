<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="mb-2"><i class="bi bi-gear-fill"></i> List Kuisioner</h2>
                    <a href="<?= base_url() ?>admin/soal/kuisioner" class="btn btn-success mb-1"><i class="bi bi-plus"></i>Tambah</a>
                    <div class="custom-text-box">
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <th>NO</th>
                                <th>Link</th>
                                <th>Tanggal dibuat</th>
                                <th>Tahun</th>
                                <th>Semester</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kuis as $k) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><a href="<?= base_url() ?>kuisioner-responden<?= $k['id_soal'] ?>"><?= base_url() ?>kuisioner-responden<?= $k['id_soal'] ?></a></td>
                                        <td><?= $k['tanggal_dibuat'] ?></td>
                                        <td><?= $k['TAHUN'] ?></td>
                                        <td><?= $k['SEMESTER'] ?></td>
                                        <td><?= $k['status'] ?></td>
                                        <td><a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
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