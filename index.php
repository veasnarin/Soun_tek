<!Doctype html>
<?php
include_once("actions/db.php");
$db = new Database();
if (isset($_POST['id_nbr']) && isset($_POST['code_nbr'])) {
  $con = "cus_products.nbr_id='" . $_POST['id_nbr'] . "' AND cus_products.code='" . $_POST['code_nbr'] . "'";
  $result = $db->getProductByCode($con);
}
include_once("views/header.php");
?>

<body>
  <?php
  include_once("views/navbar.php");
  ?>
  <!-- Sections:Start -->
  <div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <?php
    include_once("views/hero_section.php");
    ?>
    <!-- Hero: End -->
    <!-- Results: Start -->
    <?php
    include_once("views/product_detail.php");
    ?>
    <!-- Results Us: End -->
  </div>
  <!-- / Sections:End -->

  <!-- Footer: Start -->
  <?php
  include_once("views/contact_us.php");
  include_once("views/footer.php");
  ?>
  <!-- Footer: End -->
  <!-- Main JS -->
 <script src="<?= $db->url(); ?>/assets/vendor/js/front-main.js"></script>
<script src="<?= $db->url(); ?>/assets/vendor/js/bootstrap.js"></script>


    <script src="<?= $db->url(); ?>/assets/vendor/libs/popper/popper.js"></script>

    <script src="<?= $db->url(); ?>/assets/vendor/libs/node-waves/node-waves.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= $db->url(); ?>/assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="<?= $db->url(); ?>/assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->


    <!-- Page JS -->
    <script src="<?= $db->url(); ?>/assets/js/front-page-landing.js"></script>

</body>

</html>