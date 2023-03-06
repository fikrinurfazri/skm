<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">


                <div class="col-lg-12 col-12">
                    <div class="row">
                        <div class="row mb-3">
                            <div class="col-lg-12 col-md-12 mb-4 col-12">
                                <a href="<?= base_url() ?>admin/berita/add" class="btn btn-primary mb-3"><i class="bi bi-plus"></i>Tambah</a>
                                <div class="custom-text-box mb-lg-0">
                                    <!-- id="tabel-data" -->
                                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Tanggal rilis</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($berita as $br) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $br['JUDUL'] ?></td>
                                                    <td><?= $br['ISI'] ?></td>
                                                    <td><a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                                                </tr>
                                            <?php endforeach ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</main>