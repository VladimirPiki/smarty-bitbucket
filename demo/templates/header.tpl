<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fudbalski klub Smarty-bitbucket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  <!--Icons link-->
	<link rel="stylesheet" href="assets/icons/fontawesome-free-6.1.2-web/css/all.css">

  <!--my style my events-->
	<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

{config_load file="test.conf" section="setup"}

<div class="container-fluid p-5 myBg text-white text-center">
  <h1>{$fullName|upper}</h1>
  <p>Football club Jeni Maale Bitola</p> 
</div>

<nav class="navbar navbar-expand-sm  navbar-dark sticky-top">
        <div class="container-fluid">
                    <a href="#!main"><img src="assets/img/profilna nova.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar ">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#!main"><i class="fa-solid fa-house fa-2x" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Тим</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#!igrachi">Играчи</a></li></li>
                            <hr>
                            <li><a class="dropdown-item" href="#!uprava">Стручен штаб</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Натпреварување</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#!natprevaruvanje">Натпреварување</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#!sostav">Состав</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">"Тумбе кафе"</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item"  href="#!stadion">Стадион</a></li>
                            <hr>
                            <li><a class="dropdown-item"  href="#!publika">Публика</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Трансфери</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#!income">Играчи кој доаѓаат</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="#!outcome">Играчи кој заминуваат од клубот</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#!main"><img src="assets/img/Kojot.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
                        </li>
                        </ul>
            </div>
        </div>
</nav>
