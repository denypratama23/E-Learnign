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
                        <a class="nav-link js-scroll-trigger" href="index.html">Home</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#login" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jenjang Sekolah
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#sd" style="color: black">SD</a>
                            <a class="dropdown-item" href="#smp" style="color: black">SMP</a>
                            <a class="dropdown-item" href="#sma" style="color: black">SMA</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#login" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mata Pelajaran
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#matematika_sd" style="color: black">Matematika</a>
                            <a class="dropdown-item" href="#ipa_sd" style="color: black">IPA</a>
                            <a class="dropdown-item" href="#bahasa_indonesia_sd" style="color: black">Bahasa Indonesia</a>
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

    <!--Halaman Menu-->
    <div class="menu text-center">
        <div class="container">
            <h1 class="font-weight-bold text-center" style="color: rgb(1, 35, 73)">MAPEL</h1>
            <i>Terdapat 3 Macam Fitur Yang Dapat Dipilih</i>
            <hr class="my-5" style="border-color:rgb(255, 197, 51)">
            <div class="konten_menu"></div>
            <div class="row">
                <div class="col-md-3 " style="background-color:rgb(255, 197, 51);">
                    <a href="#kelas_vii"><img src="<?= base_url('assets/'); ?>img/bean.jpg" class="vii" alt=""><br><br>
                        <h3 class="text font-weight-bold" style="color:  rgb(1, 35, 73)">
                            <strong>Materi</strong>
                        </h3>
                    </a>
                </div>
                <div class="col-sm " style="background-color: white"><br></div>
                <div class="col-md-3" style="background-color:  rgb(1, 35, 73);">
                    <a href="#kelas_viii"><img src="<?= base_url('assets/'); ?>img/bean.jpg" class="vii" alt=""><br><br>
                        <h3 class="text font-weight-bold" style="color: rgb(255, 197, 51)">
                            <strong>Video</strong>
                        </h3>
                    </a>
                </div>
                <div class="col-sm " style="background-color:white"><br></div>
                <div class="col-md-3" style="background-color: rgb(255, 197, 51);">
                    <a href="#kelas_ix"><img src="<?= base_url('assets/'); ?>img/bean.jpg" class="vii" alt=""><br><br>
                        <h3 class="text font-weight-bold" style="color:  rgb(1, 35, 73)">
                            <strong>Soal</strong>
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <hr>
    <!--halaman Materi-->
    <div class="materi text-center" id="kelas_vii"><br>
        <hr class="my-5">
        <h1 class="font-weight-bold text-center" style="color: rgb(1, 35, 73)">Materi</h1>
        <h5 style="text-align: center">Terdapat Pilihan BAB Pelajaran Yang Dapat Dipilih</h5><br><br><br>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            BAB 1 - Collapsible Group Item #1
                        </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>

                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            BAB 2 - Collapsible Group Item #2
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTiga">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTiga" aria-expanded="false" aria-controls="collapseTwo">
                            BAB 3 - Collapsible Group Item #2
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapseTiga" class="collapse" aria-labelledby="headingTiga" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEmpat">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEmpat" aria-expanded="false" aria-controls="collapseTwo">
                            BAB 4 - Collapsible Group Item #2
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapseEmpat" class="collapse" aria-labelledby="headingEmpat" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headinglima">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapselima" aria-expanded="false" aria-controls="collapseTwo">
                            BAB 5 - Collapsible Group Item #2
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapselima" class="collapse" aria-labelledby="headinglima" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingenam">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseenam" aria-expanded="false" aria-controls="collapseTwo">
                            BAB 6 - Collapsible Group Item #2
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapseenam" class="collapse" aria-labelledby="headingenam" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingtuju">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsetuju" aria-expanded="false" aria-controls="collapseTwo">
                            BAB 7 - Collapsible Group Item #2
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapsetuju" class="collapse" aria-labelledby="headingtuju" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingdelapan">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsedelapan" aria-expanded="false" aria-controls="collapseTwo">
                            BAB 8 - Collapsible Group Item #2
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapsedelapan" class="collapse" aria-labelledby="headingdelapan" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingsembilan">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsesembilan" aria-expanded="false" aria-controls="collapseTwo">
                            BAB 9 - Collapsible Group Item #2
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapsesembilan" class="collapse" aria-labelledby="headingsembilan" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingsepuluh">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsesepuluh" aria-expanded="false" aria-controls="collapseThree">
                            BAB 10 - Collapsible Group Item #3
                        </button> </button> <button class="btn btn-link" type="button" data-target="#"> Download Full</button>
                    </h2>
                </div>
                <div id="collapsesepuluh" class="collapse" aria-labelledby="headingsepuluh" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--halaman Vidio-->
    <div class="vidio text-center" id="kelas_viii">
        <hr class="my-5">
        <h1 class="font-weight-bold text-center" style="color:rgb(255, 197, 51)">Video</h1>
        <h5 style="color: white">Terdapat Pilihan Video Pelajaran Yang Dapat Dipilih</h5><br><br><br>
        <div class="konten_vid">
            <div class="row">
                <div class="col-md-3"><br>
                    <a href="#" class="list-group-item list-group-item-action">BAB 1 - Menentukan KPK</a>
                    <a href="#" class="list-group-item list-group-item-action">BAB 2 - Menentukan KPK</a>
                    <a href="#" class="list-group-item list-group-item-action">BAB 3 - Menentukan KPK</a>
                    <a href="#" class="list-group-item list-group-item-action">BAB 4 - Menentukan KPK</a>
                    <a href="#" class="list-group-item list-group-item-action">BAB 5 - Menentukan KPK</a>
                    <a href="#" class="list-group-item list-group-item-action">BAB 6 - Menentukan KPK</a>
                    <a href="#" class="list-group-item list-group-item-action">BAB 7 - Menentukan KPK</a><br>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-sm-1 " style="background-color:rgb(1, 35, 73)"><br></div>
                <div class="col-sm-8"><br>
                    <video width="98%" height="85%" controls>
                        <source src="mov_bbb.mp4" type="video/mp4">
                        <source src="mov_bbb.ogg" type="video/ogg">
                    </video><br>

                </div>
            </div>
        </div>
    </div>

    <!--halaman soal-->
    <div class="soal" id="kelas_ix">
        <hr class="my-5">
        <h1 class="font-weight-bold text-center" style="color:rgb(1, 35, 73)">Soal</h1>
        <h5 style="color: rgb(151, 148, 148) " class="text-center">Terdapat 10 Soal Yang Harus Dikerjakan</h5><br><br><br>
        <div class="konten_soal">
            <div class="row">
                <div class="col-sm-12 ">
                    <h1>soal</h1>
                </div>
            </div>
        </div>
    </div>

    <!--Halaman Footer-->
    <div class="footer">
        <div class="container mt-5 mb-4 text-center text-md-center">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4 text-md-left " style="padding-right:2%">
                    <h3 class="text font-weight-bold">
                        <strong>Judul APK</strong>
                    </h3>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus natus exercitationem a repellat fugit aut totam illo porro dolorum possimus, sequi cum illum itaque cumque inventore! Facilis placeat neque veritatis!</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"><br>
                    <img src="<?= base_url('assets/'); ?>img/bean.jpg" class="anggota" alt=""><br><br>
                    <h5 class="text font-weight-bold">
                        <strong>Judul APK</strong>
                    </h5>
                    <p>NIM</p>
                </div>
                <!--/.Second column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"><br>
                    <img src="<?= base_url('assets/'); ?>img/bean.jpg" class="anggota" alt=""><br><br>
                    <h5 class="text font-weight-bold">
                        <strong>Judul APK</strong>
                    </h5>
                    <p>NIM</p>
                </div>

                <!--Third column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"><br>
                    <img src="<?= base_url('assets/'); ?>img/bean.jpg" class="anggota" alt=""><br><br>
                    <h5 class="text font-weight-bold">
                        <strong>Judul APK</strong>
                    </h5>
                    <p>NIM</p>
                </div>

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="color: rgb(248, 246, 246); background-color: rgb(29, 28, 28)">© 2019 Copyright:
            <a href="#" style="color: rgb(255, 197, 51)"> D'Tama Comunity </a>
        </div>
        <!-- Copyright -->

        </footer>
    </div>
    <!-- Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>