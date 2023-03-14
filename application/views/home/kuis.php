<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="col-12 d-flex">
                        <div class="col-1">
                            <img src="<?= base_url() ?>assets/images/logotasik.png" alt="" class="col-12">
                        </div>
                        <div class="col-10 text-center">
                            <h2>KUESIONER SURVEI KEPUASAN MASYARAKAT <br> <?= $kuis['nama'] ?></h2>
                        </div>
                        <div class="col-1">
                            <img src="<?= base_url() ?>assets/images/akhlak2.png" alt="" class="col-12">
                            <img src="<?= base_url() ?>assets/images/bangga.png" alt="" class="col-12"> <br>
                        </div>
                    </div>


                    <!-- <h2 class="mb-2">
                        KUESIONER SURVEI KEPUASAN MASYARAKAT (SKM) <br> <?= $kuis['nama'] ?></h2> -->
                    <div class="custom-text-box">
                        <form action="<?= base_url() ?>kuisioner/kirim" method="post">
                            <p id="tanggal"> </p>

                            <h5 class="mb-3"> <i class="bi bi-people"> </i> Profile Responden</h5>

                            <div class="row mb-3">
                                <div class="form-group col-3">
                                    <label for="usia"> Usia</label>
                                    <input type="number" name="usia" id="usia" class="form-control">
                                    <input type="hidden" name="tanggal" value="<?= date('d-m-Y') ?>" class="form-control">
                                    <input type="hidden" name="id_soal" value="<?= $kuis['id_soal'] ?>" class="form-control">
                                </div>
                                <input type="hidden" name="kode" value="<?= $kuis['KODE_UNIT_KERJA'] ?>">
                                <div class="form-group col-3">
                                    <label for="pendidikan"> Pendidikan</label>
                                    <select name="pendidikan" id="pendidikan" class="form-control">
                                        <option value="SD"> SD</option>
                                        <option value="SMP"> SMP</option>
                                        <option value="SMA"> SMA</option>
                                        <option value="S1"> S1</option>
                                        <option value="S2"> S2</option>
                                        <option value="S3"> S3</option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="pekerjaan"> Pekerjaan</label>
                                    <select name="pekerjaan" id="pekerjaan" class="form-control">
                                        <option value="PELAJAR/MAHASISWA"> PELAJAR/MAHASISWA</option>
                                        <option value="ASN"> ASN</option>
                                        <option value="TNI"> TNI</option>
                                        <option value="POLRI"> POLRI</option>
                                        <option value="WIRASWASTA"> WIRASWASTA</option>
                                        <option value="WIRAUSAHA"> WIRAUSAHA</option>

                                    </select>
                                </div>

                                <div class="form-group col-3">
                                    <label for="jk"> Jenis Kelamin</label> <br>
                                    <input type="radio" name="jk" id="jk" value="L"> Laki-laki
                                    <input type="radio" name="jk" id="jk" value="P"> Perempuan
                                </div>

                            </div>
                            <div class="form-group col-3 mb-2">
                                <label for="hp"> NO HP/WA</label>
                                <input type="text" name="hp" id="hp" class="form-control">
                            </div>
                            <div class="form-group mb-5">
                                <label for="pelayanan"> Jenis Layanan Yang Diterima</label>
                                <input type="text" name="pelayanan" id="pelayanan" class="form-control">
                            </div>
                            <h5 class="mb-2"> <i class="bi bi-bag"> </i> Pendapat Responden</h5>

                            <div class="form-group mb-3">
                                <label for=""> 1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</label>
                                <br>
                                <input type="radio" name="u1" value="1"> Tidak sesuai <br>
                                <input type="radio" name="u1" value="2"> Kurang sesuai <br>
                                <input type="radio" name="u1" value="3"> sesuai <br>
                                <input type="radio" name="u1" value="4"> Sangat sesuai <br>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> 2. Bagaimana pemahaman Saudara tentang kemudahan
                                    prosedur pelayanan di unit ini?</label>
                                <br>
                                <input type="radio" name="u2" value="1"> Tidak mudah <br>
                                <input type="radio" name="u2" value="2"> Kurang mudah <br>
                                <input type="radio" name="u2" value="3"> mudah <br>
                                <input type="radio" name="u2" value="4"> Sangat mudah <br>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> 3. Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?</label>
                                <br>
                                <input type="radio" name="u3" value="1"> Tidak cepat<br>
                                <input type="radio" name="u3" value="2"> Kurang cepat <br>
                                <input type="radio" name="u3" value="3"> cepat <br>
                                <input type="radio" name="u3" value="4"> Sangat cepat<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> 4. Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan?</label>
                                <br>
                                <input type="radio" name="u4" value="1"> Sangat mahal<br>
                                <input type="radio" name="u4" value="2"> Cukup mahal <br>
                                <input type="radio" name="u4" value="3"> Murah <br>
                                <input type="radio" name="u4" value="4"> Gratis<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> 5. Bagaimana pendapat Saudara tentang kesesuaian
                                    produk pelayanan antara yang tercantum dalam
                                    standar pelayanan dengan hasil yang diberikan?</label>
                                <br>
                                <input type="radio" name="u5" value="1"> Tidak sesuai<br>
                                <input type="radio" name="u5" value="2"> Kurang sesuai <br>
                                <input type="radio" name="u5" value="3"> sesuai <br>
                                <input type="radio" name="u5" value="4"> Sangat sesuai<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> 6. Bagaimana pendapat Saudara tentang kompetensi/
                                    kemampuan petugas dalam pelayanan?</label>
                                <br>
                                <input type="radio" name="u6" value="1"> Tidak kompeten<br>
                                <input type="radio" name="u6" value="2"> Kurang kompeten <br>
                                <input type="radio" name="u6" value="3"> kompeten <br>
                                <input type="radio" name="u6" value="4"> Sangat kompeten<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> 7. Bagamana pendapat saudara perilaku petugas dalam
                                    pelayanan terkait kesopanan dan keramahan?</label>
                                <br>
                                <input type="radio" name="u7" value="1"> Tidak sopan & ramah<br>
                                <input type="radio" name="u7" value="2"> Kurang sopan & ramah <br>
                                <input type="radio" name="u7" value="3"> sopan & ramah <br>
                                <input type="radio" name="u7" value="4"> Sangat sopan & ramah<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> 8. Bagaimana pendapat Saudara tentang kualitas sarana
                                    dan prasarana?</label>
                                <br>
                                <input type="radio" name="u8" value="1"> Buruk<br>
                                <input type="radio" name="u8" value="2"> Cukup <br>
                                <input type="radio" name="u8" value="3"> Baik <br>
                                <input type="radio" name="u8" value="4"> Sangat Baik<br>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> 9. Bagaimana pendapat Saudara tentang penanganan
                                    pengaduan pengguna layanan?</label>
                                <br>
                                <input type="radio" name="u9" value="1"> Tidak ada.<br>
                                <input type="radio" name="u9" value="2"> Ada tetapi tidak berfungsi <br>
                                <input type="radio" name="u9" value="3"> Berfungsi kurang maksimal <br>
                                <input type="radio" name="u9" value="4"> Dikelola dengan baik<br>
                            </div>


                            <button class="btn btn-success" type="submit"> Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    const hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    const tanggal = new Date();
    const hariIni = hari[tanggal.getDay()];
    const tanggalIni = tanggal.getDate();
    const bulanIni = bulan[tanggal.getMonth()];
    const tahunIni = tanggal.getFullYear();

    document.getElementById("tanggal").innerHTML = `${hariIni}, ${tanggalIni} ${bulanIni} ${tahunIni}`;
</script>