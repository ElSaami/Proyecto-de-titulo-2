<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Cristian San Martin">
  <meta name="theme-color" content="#212529">
  <link rel="shorcut icon" href="<?= media();?>/images/maths_83924.ico">
  <title><?= $data['page_title']; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Boostrap 5-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= media(); ?>/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= media(); ?>/css/style.css">
</head>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a href="#" class="nav-link text-secondary"><i class="bi bi-gear"></i> Ajustes</a>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link text-secondary"><i class="bi bi-power"></i> Salir</a>
      </li>
    </ul>
  </nav>
  <body class="hold-transition sidebar-mini">
  <!-- /.navbar -->
<?php require_once("nav_admin.php"); ?>