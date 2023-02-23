<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="mb-2"><i class="bi bi-gear-fill"></i> Soal</h2>
                    <div class="custom-text-box">
                        <form action="<?= base_url() ?>admin/soal/add" method="post">
                            <div class="row mb-3">
                                <div class="form-group col-3">
                                    <label for="semester">Pilih semester</label>
                                    <select id="semester" name="semester" class="form-control">
                                        <option value="">-- Pilih semester --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>

                                    </select>

                                </div>
                                <div class="form-group col-3">
                                    <label for="tahun">Pilih tahun</label>
                                    <select id="tahun" name="tahun" class="form-control">
                                        <option value="">-- Pilih Tahun --</option>
                                        <?php
                                        for ($i = 2020; $i <= 2030; $i++) {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                            <h5 class="mb-2"><i class="bi bi-bag"></i> Pendapat Responden</h5>
                            <input type="hidden" value=" <?= $user['KODE_UNIT_KERJA'] ?>" name="KODE_UNIT_KERJA">
                            <input type="hidden" value=" <?= $user['NAMA'] ?>" name="nama">
                            <input type="hidden" value="1" name="status">

                            <div class="form-group mb-3">
                                <label for="">1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</label>
                                <br>
                                <input type="radio" name="u1">Tidak sesuai (1) <br>
                                <input type="radio" name="u1">Kurang sesuai (2)<br>
                                <input type="radio" name="u1">sesuai (3)<br>
                                <input type="radio" name="u1">Sangat sesuai (4)<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">2. Bagaimana pemahaman Saudara tentang kemudahan
                                    prosedur pelayanan di unit ini?</label>
                                <br>
                                <input type="radio" name="u2">Tidak mudah (1)<br>
                                <input type="radio" name="u2">Kurang mudah (2)<br>
                                <input type="radio" name="u2">mudah (3)<br>
                                <input type="radio" name="u2">Sangat mudah (4)<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">3. Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?</label>
                                <br>
                                <input type="radio" name="u3">Tidak cepat (1)<br>
                                <input type="radio" name="u3">Kurang cepat (2)<br>
                                <input type="radio" name="u3">cepat (3)<br>
                                <input type="radio" name="u3">Sangat cepat (4)<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">4. Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan?</label>
                                <br>
                                <input type="radio" name="u4">Sangat mahal (1)<br>
                                <input type="radio" name="u4">Cukup mahal (2)<br>
                                <input type="radio" name="u4">Murah (3)<br>
                                <input type="radio" name="u4">Gratis (4)<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">5. Bagaimana pendapat Saudara tentang kesesuaian
                                    produk pelayanan antara yang tercantum dalam
                                    standar pelayanan dengan hasil yang diberikan?</label>
                                <br>
                                <input type="radio" name="u5">Tidak sesuai (1)<br>
                                <input type="radio" name="u5">Kurang sesuai (2)<br>
                                <input type="radio" name="u5">sesuai (3)<br>
                                <input type="radio" name="u5">Sangat sesuai (4)<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">6. Bagaimana pendapat Saudara tentang kompetensi/
                                    kemampuan petugas dalam pelayanan?</label>
                                <br>
                                <input type="radio" name="u6">Tidak kompeten (1)<br>
                                <input type="radio" name="u6">Kurang kompeten (2)<br>
                                <input type="radio" name="u6">kompeten (3)<br>
                                <input type="radio" name="u6">Sangat kompeten (4)<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">7. Bagamana pendapat saudara perilaku petugas dalam
                                    pelayanan terkait kesopanan dan keramahan?</label>
                                <br>
                                <input type="radio" name="u7">Tidak sopan & ramah (1)<br>
                                <input type="radio" name="u7">Kurang sopan & ramah (2)<br>
                                <input type="radio" name="u7">sopan & ramah (3)<br>
                                <input type="radio" name="u7">Sangat sopan & ramah (4)<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">8. Bagaimana pendapat Saudara tentang kualitas sarana
                                    dan prasarana?</label>
                                <br>
                                <input type="radio" name="u8">Buruk (1)<br>
                                <input type="radio" name="u8">Cukup (2)<br>
                                <input type="radio" name="u8">Baik (3)<br>
                                <input type="radio" name="u8">Sangat Baik (4)<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">9. Bagaimana pendapat Saudara tentang penanganan
                                    pengaduan pengguna layanan?</label>
                                <br>
                                <input type="radio" name="u9">Tidak ada. (1)<br>
                                <input type="radio" name="u9">Ada tetapi tidak berfungsi (2)<br>
                                <input type="radio" name="u9">Berfungsi kurang maksimal (3)<br>
                                <input type="radio" name="u9">Dikelola dengan baik (4)<br>
                            </div>

                            <button class="btn btn-success" type="submit">Buat Survei</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>