<?php
// Loading konfigurasi website
$site = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ICON DARI KONFIGURASI WEBSITE-->
    <link rel="icon" href="<?php echo base_url('assets/upload/image/'.$site->icon) ?>"/>
    <!-- SEO GOOGLE -->
    <meta name="keywords" content="<?php echo $site->keywords ?>">
    <meta name="description" content="<?php echo $title ?>, <?php echo $site->deskripsi ?>">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/style.css">

<style type="text/css" media="screen">

    ul.pagination {
        padding: 0 10px;
        background-color: blue;
        border-radius: 10px;
    }
    .pagination a, .pagination b {
        padding: 10px 20px;
        text-decoration: none;
        float: left;
    }
    .pagination a {
        background-color: blue;
        color: white;
    }
    .pagination b {
        background-color: red;
        color: white;
    }
    .pagination a:hover {
        background-color: red;
    }
</style>

</head>
<body>

    <div class="site-wrap">
    