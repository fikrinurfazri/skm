<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">


                    <h2 class="mb-2"><i class="bi bi-people"></i> Profile</h2>
                    <div class="custom-text-box">
                        <form action="<?= base_url() ?>kuisioner/kirim" method="post">
                            <p id="tanggal"> </p>

                            <h5 class="mb-3"> <i class="bi bi-people"> </i> Profile Admin</h5>

                            <div class="row mb-3">
                                <div class="form-group col-3">
                                    <label for="usia"> Unit Kerja</label>
                                    <input type="text" name="usia" id="usia" value="<?= $user['NAMA'] ?>" class="form-control">
                                </div>

                                <div class="form-group col-3">
                                    <label for="usia"> Username</label>
                                    <input type="text" name="usia" id="usia" value="<?= $user['USERNAME'] ?>" class="form-control">
                                </div>


                            </div>
                            <div class="row mb-3">

                                <div class="form-group col-3">
                                    <label for="pekerjaan"> Kode Unit Kerja</label>
                                    <input type="text" class="form-control" name="" id="" value="<?= $user['KODE_UNIT_KERJA'] ?>">
                                </div>
                                <div class="form-group col-3">
                                    <label for="pekerjaan"> Pekerjaan</label>
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>

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