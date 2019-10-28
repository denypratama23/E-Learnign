<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>css/course_style.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body id="page-top">

    <!--halaman navbar-->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand " href="#page-top">
                <img src="<?= base_url('assets/'); ?>img/singa.png" width="50" height="50" class="d-inline-block align-top" alt="">
                LEARN</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="#">Home</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#login" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jenjang Sekolah
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('user') ?>" style="color: black">SD</a>
                            <a class="dropdown-item" href="<?= base_url('user/smp') ?>" style="color: black">SMP</a>
                            <a class="dropdown-item" href="<?= base_url('user/sma') ?>" style="color: black">SMA</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#login" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mata Pelajaran
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('user/sma') ?>" style="color: black">Matematika</a>
                            <a class="dropdown-item" href="<?= base_url('user/sma_1') ?>" style="color: black">Bahasa Indonesia</a>
                            <a class="dropdown-item" href="<?= base_url('user/sma_2') ?>" style="color: black">IPA</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#login" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $user['name']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#" style="color: black">profile</a>
                            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" style="color: black">logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>