<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">


                    <h2 class="mb-2"> KUESIONER SURVEI KEPUASAN MASYARAKAT (SKM)</h2>
                    <div class="custom-text-box">
                        <form action="" method="post">
                            <p id="tanggal"></p>

                            <h5 class="mb-3"><i class="bi bi-people"></i> Profile Responden</h5>

                            <div class="row mb-3">
                                <div class="form-group col-3">
                                    <label for="usia">Usia</label>
                                    <input type="number" name="usia" id="usia" class="form-control">
                                </div>
                                <div class="form-group col-3">
                                    <label for="pendidikan">Pendidikan</label>
                                    <select name="pendidikan" id="pendidikan" class="form-control">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <select name="pekerjaan" id="pekerjaan" class="form-control">
                                        <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                        <option value="ASN">ASN</option>
                                        <option value="TNI">TNI</option>
                                        <option value="POLRI">POLRI</option>
                                        <option value="WIRASWASTA">WIRASWASTA</option>
                                        <option value="WIRAUSAHA">WIRAUSAHA</option>

                                    </select>
                                </div>

                                <div class="form-group col-3">
                                    <label for="jk">Jenis Kelamin</label> <br>
                                    <input type="radio" name="jk" id="jk"> Laki-laki
                                    <input type="radio" name="jk" id="jk"> Perempuan
                                </div>

                            </div>
                            <div class="form-group mb-5">
                                <label for="pelayanan">Jenis Layanan Yang Diterima</label>
                                <input type="text" name="pelayanan" id="pelayanan" class="form-control">
                            </div>
                            <h5 class="mb-2"><i class="bi bi-bag"></i> Pendapat Responden</h5>

                            <div class="form-group mb-3">
                                <label for="">1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</label>
                                <br>
                                <input type="radio" name="u1">Tidak sesuai <br>
                                <input type="radio" name="u1">Kurang sesuai <br>
                                <input type="radio" name="u1">sesuai <br>
                                <input type="radio" name="u1">Sangat sesuai <br>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">2. Bagaimana pemahaman Saudara tentang kemudahan 
prosedur pelayanan di unit ini?</label>
                                <br>
                                <input type="radio" name="u2">Tidak mudah <br>
                                <input type="radio" name="u2">Kurang mudah <br>
                                <input type="radio" name="u2">mudah <br>
                                <input type="radio" name="u2">Sangat mudah <br>
                            </div>

                            <button class="btn btn-success" type="submit">Kirim</button>
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