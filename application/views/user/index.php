<!--Halaman Menu-->
<div class="menu text-center">
    <div class="container">
        <h1 class="font-weight-bold text-center" style="color: rgb(1, 35, 73)">MAPEL SD</h1>
        <i>Terdapat 3 Macam Fitur Yang Dapat Dipilih</i>
        <hr class="my-5" style="border-color:rgb(255, 197, 51)">
        <div class="konten_menu"></div>
        <div class="row">
            <div class="col-md-3 " style="background-color: rgb(1, 35, 73);">
                <a href="#kelas_viii"><img src="<?= base_url('assets/'); ?>img/bean.jpg" class="vii" alt=""><br><br>
                    <h3 class="text font-weight-bold" style="color: rgb(255, 197, 51);">
                        <strong>Video</strong>
                    </h3>
                </a>
            </div>
            <div class="col-sm " style="background-color: white"><br></div>
            <div class="col-md-3" style="background-color:  rgb(255, 197, 51);">
                <a href="#kelas_ix"><img src="<?= base_url('assets/'); ?>img/bean.jpg" class="vii" alt=""><br><br>
                    <h3 class="text font-weight-bold" style="color: rgb(1, 35, 73);">
                        <strong>Soal</strong>
                    </h3>
                </a>
            </div>
            <div class="col-sm " style="background-color:white"><br></div>
            <div class="col-md-3" style="background-color:rgb(1, 35, 73);">
                <a href="#kelas_vii"><img src="<?= base_url('assets/'); ?>img/bean.jpg" class="vii" alt=""><br><br>
                    <h3 class="text font-weight-bold" style="color:  rgb(255, 197, 51);">
                        <strong>Materi</strong>
                    </h3>
                </a>
            </div>
        </div>
    </div>
</div>

</div>
<hr>
<!--halaman Materi-->


<!--halaman Vidio-->
<div class="vidio text-center" id="kelas_viii">
    <hr class="my-5">
    <h1 class="font-weight-bold text-center" style="color:rgb(255, 197, 51)">Video</h1>
    <h5 style="color: white">Terdapat Pilihan Video Pelajaran Yang Dapat Dipilih</h5><br><br><br>
    <div class="konten_vid">
        <div class="row">
            <div class="col-md-3"><br>
                <?php foreach ($videos as $profil) : ?>
                    <?php
                        $mapel = $profil['judul'];
                        $code = $profil['code'];
                        echo "<a href='?code=$code'>$mapel</a>";

                        ?>
                    <hr>
                <?php endforeach ?><br>

                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <?php $this->load->view('template/tampil'); ?>
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