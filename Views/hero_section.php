<section id="hero-animation">
    <div id="landingHero" class="section-py landing-hero position-relative">
        <div class="container">
            <div class="hero-text-box text-center">
                <h1 class="text-primary hero-title display-6 fw-bold">PRODUCTS DETAILS</h1>
                <h2 class="hero-sub-title h6 mb-4 pb-1">
                    Please Enter ID NBR and Code NBR<br class="d-none d-lg-block" />
                    To Find Products Details
                </h2>
                <div class="card">
                    <div class="card-body">
                        <?php
                        if (isset($result) && $result != TRUE) {
                        ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                Product Not Found.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        }
                        ?>
                        <form action="index.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="id_nbr" value="<?= isset($_POST['id_nbr']) ? $_POST['id_nbr'] : '' ?>" id="contact-form-fullname" placeholder="#ID NBR." required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="contact-form-email" name="code_nbr" value="<?= isset($_POST['code_nbr']) ? $_POST['code_nbr'] : '' ?>" class="form-control" placeholder="#CODE NBR." required />
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>