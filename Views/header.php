<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="<?= $db->url(); ?>/assets/vendor/img/favicon/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/v4-shims.min.js">
  <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/css/rtl/front-page.css" />
  <script src="<?= $db->url(); ?>/assets/vendor/js/helpers.js"></script>
  <script src="<?= $db->url(); ?>/assets/vendor/js/template-customizer.js"></script>
  <script src="<?= $db->url(); ?>/assets/vendor/js/front-config.js"></script>
  <title><?= isset($_POST['id_nbr']) && isset($_POST['code_nbr']) && $result == true ? $result['name'] : 'STCO' ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/fonts/tabler-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/css/demo.css" />
    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/css/pages/front-page-landing.css" />

    <!-- Helpers -->
    <script src="<?= $db->url(); ?>/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= $db->url(); ?>/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= $db->url(); ?>/assets/js/front-config.js"></script>
  </head>

  <body>
    <script src="<?= $db->url(); ?>/assets/vendor/js/dropdown-hover.js"></script>
    <script src="<?= $db->url(); ?>/assets/vendor/js/mega-dropdown.js"></script>
</head>