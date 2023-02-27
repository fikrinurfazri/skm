<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="mb-2"><i class="bi bi-gear-fill"></i> Berita</h2>
                    <div class="custom-text-box">
                        <form action="<?= base_url() ?>admin/berita/simpan" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="form-group col-12 mb-2">
                                    <!-- <input type="hidden" value=" <?= $user['KODE_UNIT_KERJA'] ?>" name="KODE_UNIT_KERJA"> -->
                                    <input type="hidden" value=" <?= $user['NAMA'] ?>" name="nama">
                                    <label for="semester">JUDUL</label>
                                    <input type="text" class="form-control" name="judul">
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-12 mb-2">
                                        <label for="isi">ISI</label>
                                        <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-12 mb-2">
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>