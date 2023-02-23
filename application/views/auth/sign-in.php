<?php $this->load->view('pages/head');
$this->load->view('pages/nav'); ?>
<main>
    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-12">
                        <!-- <h2 class="text-white mb-4">Volunteer</h2> -->

                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="<?= base_url() ?>auth/login" method="post" role="form">
                            <h3 class="mb-4">Login e-SKM</h3>

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="form-control">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- <div class="col-lg-6 col-12">
                <img src="<?= base_url() ?>assets/images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg" class="volunteer-image img-fluid" alt="">

                <div class="custom-block-body text-center">
                    <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                    <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based</p>
                </div>
            </div> -->

            </div>
        </div>
    </section>

</main>
<?php $this->load->view('pages/footer'); ?>