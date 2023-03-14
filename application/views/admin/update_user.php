<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">


                    <div class="custom-text-box">
                        <form action="<?= base_url() ?>admin/user/simpanupdate" method="post">
                            <p id="tanggal"> </p>

                            <h5 class="mb-3"> <i class="bi bi-people"> </i> Update User</h5>

                            <div class="row mb-3">
                                <div class="form-group col-8">
                                    <label for="nama"> Unit Kerja</label>
                                    <input type="hidden" name="id" id="nama" value="<?= $admin['ID_ADMIN'] ?>" class="form-control">
                                    <input type="text" name="nama" id="nama" value="<?= $admin['NAMA'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-3">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" value="<?= $admin['USERNAME'] ?>" class="form-control">
                                </div>
                                <div class="form-group col-3">
                                    <label for="kode">Kode Unit Kerja</label>
                                    <input type="text" name="kode" id="kode" value="<?= $admin['KODE_UNIT_KERJA'] ?>" readonly class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-6">
                                    <label for="password"> Password</label>
                                    <input type="text" class="form-control" value="<?= $admin['PASSWORD'] ?>" name="password" id="">
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