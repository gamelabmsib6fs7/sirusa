<head>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIRUSA - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
@extends('layouts.sidebar')
@section('container')
<h3>Selamat Datang {{ auth()->user()->username }} di Rumah Sakit SIRUSA</h3>
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts py-5">
  <div class="container">
    <div class="row justify-content-center">



      <div class="col-lg-3 col-md-6 mb-4">
        <div class="count-box text-center p-4">
          <i class="fas fa-user-md fa-3x mb-3"></i>
          <span>{{ $doctorsCount }}</span>
          <p class="mt-2">@lang('Doctors')</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="count-box text-center p-4">
          <i class="fas fa-user-injured fa-3x mb-3"></i>
          <span>{{ $patientCount }}</span>
          <p class="mt-2">@lang('Patients')</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="count-box text-center p-4">
          <i class="fas fa-user-tie fa-3x mb-3"></i>
          <span>{{ $adminCount }}</span>
          <p class="mt-2">@lang('Employes')</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="count-box text-center p-4">
        <i class="fas fa-calendar-check"></i>
          <span>{{ $appointmentCount }}</span>
          <p class="mt-2">@lang('Appointments')</p>
        </div>
      </div>

    </div>
  </div>
</section><!-- End Counts Section -->

</div>
@endsection