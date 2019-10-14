<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
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
                        <a class="nav-link js-scroll-trigger" href="index.php">HOME</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#fitur">FITUR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#artikel">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">CONTACT US</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#login" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MASUK
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" style="color: black" data-toggle="modal" data-target="#exampleModal">Login</a>
                            <a class="dropdown-item" href="<?= base_url('auth/registration') ?>" style="color: black">REGISTER</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--halaman login-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5><br>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="username" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password1" name="password" placeholder="Password" value="<?= set_value('password1'); ?>">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Masuk
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--halaman utama-->
    <div class="jumbotron" style="background-image: url(<?= base_url('assets/'); ?>img/home1.jpg)">
        <div class="container" style="color: white">
            <i style="font-size: 200% " class="font-weight-bold ">Welcome To Our School!</i>
            <h1 class="display-4 font-weight-bold">LETS START TO LEARN</h1>
            <hr class="my-4">
            <a class="btn btn-lg font-weight-bold" href="#" role="button">Tell Me More</a>
        </div>

    </div>

    <!--halaman about-->

    <div class="container" id="about">
        <div class="tentang text-center">
            <h1 class="font-weight-bold text-center" style="color: rgb(1, 35, 73)">Learnign</h1>
            <i>Penjelasan mengenai tujuan dan kegunaan sistem</i>
            <hr class="my-4"><br>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla eveniet quod reprehenderit, similique, doloremque molestias in sint ad quo ipsa suscipit soluta? Quibusdam praesentium labore possimus a, odio commodi? Explicabo.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit aut facere ad neque, omnis illum modi mollitia voluptates debitis praesentium, vel obcaecati totam, ducimus nam id. Ipsa deserunt animi odit.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa placeat aut impedit, dolore possimus necessitatibus perspiciatis ut cupiditate, dolor, voluptatibus facilis cum ratione maxime repellat reprehenderit atque velit eligendi excepturi.lllllllllllllllllllllllllllllllllllllllllll
        </div>
    </div>

    <!--halaman fitur -->
    <div class="fitur text-center" id="fitur">
        <hr class="my-5">
        <h1 class="font-weight-bold text-center" style="color: white">Fitur</h1>
        <i style="color: rgb(151, 148, 148) " class="text-center">Terdapat 3 pilihan jenjang sekolah yang dapat dipilih</i><br><br><br>
        <div class="row">
            <div class="col-md-4 "><br>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/sd.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ">SD</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn dropdown-item" style="color: black" data-toggle="modal" data-target="#exampleModal">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 "><br>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/smp.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SMP</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn dropdown-item" style="color: black" data-toggle="modal" data-target="#exampleModal">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 "><br>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/sma.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SMA</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn dropdown-item" style="color: black" data-toggle="modal" data-target="#exampleModal">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--halaman artikel-->
    <div class="container">
        <section id="artikel" class="artikel">
            <hr class="my-5">
            <!-- Heading -->
            <div class="text-center">
                <h2 class="judul_ar font-weight-bold">Artikel</h2>
                <i>Berisi tentang pengalaman atau prestasi yang diperoleh dari proses pembelajaran</i>
                <hr class="my-4"><br><br><br>
            </div>

            <!--Grid row-->
            <div class="row">

                <!--Grid column 1-->
                <div class="col-md-6 mb-4" id="artikel1">

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner z-depth-1-half" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                    <!--Excerpt-->
                    <h4 class="judul_ar"><strong>juara paling joss</strong></h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti ipsum, temporibus error deserunt doloremque eaque inventore consequatur aliquid doloribus veritatis amet expedita vero maiores reprehenderit quisquam velit cum asperiores est?</p>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum consequatur architecto praesentium placeat tempore ad deserunt! Sed deleniti voluptatibus ut culpa. Atque illum amet nemo dolor delectus, hic sequi quis?</p>
                    <p>by <a><strong>tebaik dari semua yang hebat</strong></a> 07/09/2019</p>
                    <a class="btn btn-md" href="#">Lanjut</a>
                </div>
                <!--Grid column-->

                <!--Grid column 2-->

                <div class="col-md-6">

                    <!--Excerpt-->
                    <h4 class="judul_ar"><strong>juara paling joss</strong></h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti ipsum, temporibus error deserunt doloremque eaque inventore consequatur aliquid doloribus veritatis amet expedita vero maiores reprehenderit quisquam velit cum asperiores est?</p>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum consequatur architecto praesentium placeat tempore ad deserunt! Sed deleniti voluptatibus ut culpa. Atque illum amet nemo dolor delectus, hic sequi quis?</p>
                    <p>by <a><strong>tebaik dari semua yang hebat</strong></a> 07/09/2019</p>
                    <a class="btn btn-md" href="#">Lanjut</a>
                </div>

                <div class="col-md-6 mb-4" id="artikel2">
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner z-depth-1-half" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-2z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
    </div>


    <!--Halaman contac us-->
    <div id="contacts" style="background-image: url(<?= base_url('assets/'); ?>img/home1.jpg)">
        <hr class="my-5" id="contact"><br><br>
        <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <form>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username_cont" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" class="form-control" id="email_cont" placeholder="nama@contoh.com">
                        </div>
                        <div class="form-group">
                            <label for="Subject">Subject</label>
                            <input type="email" class="form-control" id="subject_cont" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" id="pesan_cont" rows="3"></textarea>
                        </div>
                        <div class="btn btn-primary btn-md"> Kirim </div>
                    </form>

                </div>
                <div class="col-md-5">
                    <div class="no_cont"><br><br>
                        <h5>UNIVERSITAS NEGERI SEMARANG</h5><br>
                        <h5>ILMU KOMPUTER</h5><br>
                        <h5>Aku_anak@student.unnes.ac.id</h5><br>
                        <h5>(+62)88888888000000</h5>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->


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