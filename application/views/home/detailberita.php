<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url() ?>/assets/images/logotasik.png" />

    <!-- CSS FILES -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/templatemo-kind-heart-charity.css" rel="stylesheet">


</head>

<body id="section_1">

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="<?= base_url() ?>assets/images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    E-SKM
                    <small>Elektronik Survei Kepuasan Masyarakat</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="<?= base_url() ?>home">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="<?= base_url() ?>home">Hasil Survei</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="<?= base_url() ?>auth/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="news-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <img src="<?= base_url() ?>assets/upload/<?= $detail['GAMBAR'] ?>" class="news-image img-fluid" alt="">


                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            <?= $detail['TANGGAL'] ?>
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            <?= $detail['NAMA'] ?>
                                        </p>
                                    </div>


                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><?= $detail['JUDUL'] ?></h4>
                                </div>

                                <div class="news-block-body">
                                    <p><?= $detail['ISI'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">Recent news</h5>
                        <?php foreach ($berita as $br) : ?>
                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="<?= base_url() ?>assets/upload/<?= $br['GAMBAR'] ?>" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="<?= base_url() ?>home/detail/<?= $br['ID'] ?>" class="news-block-title-link"><?= $br['JUDUL'] ?></a></h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            <?= $br['TANGGAL'] ?>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
    </main>