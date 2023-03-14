<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style type="text/css">
        p {
            margin: 5px 0 0 0;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
            display: block;
        }

        .bold {
            font-weight: bold;
        }

        #footer {
            clear: both;
            position: relative;
            height: 40px;
            margin-top: -40px;
        }
    </style>
</head>

<body style="font-size: 12px">
    <br><br><br>
    <table style="border: 1px solid black;border-collapse: collapse;font-size: 11px" width="100%" align="center">

        <br>
        <tr>
            <td>

                <p>
                <table>
                    <br><br>
                    <p align="center">
                        <span style="font-size: 20px"><b>INDEKS KEPUASAN MASYARAKAT (IKM)</b></span> <br>
                        <span style="font-size: 20px"><b><?= strtoupper($ikm['NAMA']) ?></b></span> <br>
                        <span style="font-size: 20px"><b>PEMERINTAH KOTA TASIKMALAYA</b></span> <br>
                        <span style="font-size: 20px"><b>TRIWULAN 3 TAHUN 2023</b></span> <br>
                    </p>

                </table>
                </p>
                <br><br>
                <p>
                <table style="border: 1px solid black;border-collapse: collapse;font-size: 11px" width="80%" align="center">
                    <tr>
                        <th rowspan="1" style="border: 1px solid black; font-size: 20px">NILAI IKM</th>
                        <th colspan="3" style="border: 1px solid black; font-size: 15px">LAYANAN <?= $ikm['NAMA'] ?></th>

                    </tr>

                    <tr style="margin: 5px">
                        <td rowspan="8" style="border: 1px solid black; font-size: 130px; height:250px" align="center" width="60%">
                            <b>
                                <?= $ikm['IKM3'] ?>

                            </b>
                        </td>

                    </tr>
                    <tr>
                        <td align="center" colspan="3" style="font-size: 15px">RESPONDEN</td>
                    </tr>
                    <tr style="font-size: 15px">
                        <br>
                        <td width="40%">Jumlah : <?= $ikm['RESPONDEN3'] ?> orang</td>
                    </tr>
                    <tr style="font-size: 15px">
                        <td>Jenis Kelamin
                            <ul>
                                <?php foreach ($jk as $j) : ?>
                                    <li>
                                        <?= $j->JK ?> : <?= $j->jumlah ?> orang
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </td>
                    </tr>
                    <tr style="font-size: 15px">
                        <td>Pendidikan
                            <ul>
                                <?php foreach ($pendidikan as $pnd) : ?>
                                    <li>
                                        <?= $pnd->PENDIDIKAN ?> &nbsp;: <?= $pnd->jumlah ?> orang
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </td>
                    </tr>
                    <tr style="font-size: 15px">
                        <td>Periode : Triwulan 3 / Juli s.d September</td>
                    </tr>
                </table>


                </p>

                <br>

                <h3 align=" center">
                    TERIMAKASIH ATAS PENILAIAN YANG TELAH ANDA BERIKAN
                    <br>
                    MASUKAN ANDA SANGAT BERMANFAAT UNTUK KEMAJUAN UNIT KAMI AGAR TERUS MEMPERBAIKI
                    <br>
                    DAN MENINGKATKAN KUALITAS PELAYANAN BAGI MASYARAKAT
                </h3>
                <br><br>
                <p>
                <table width="100%" style="font-size: 15px">
                    <tr>
                        <td align="right">
                            Tasikmalaya, <?= date('d-m-Y') ?><br>
                            Kepala <?= $ikm['NAMA'] ?><br><br><br><br><br><?= $ikm['KEPALA'] ?>
                        </td>
                        <td align="center"> </td>
                    </tr>
                </table>
                </p>



                <p class="footer">
                    <small><?= $ikm['NAMA'] ?></small>
                </p>
            </td>
        </tr>
    </table>


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
    <script>
        window.print();
    </script>


</body>

</html>