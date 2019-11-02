<div class="materi text-center" id="kelas_vii" style="background-color:  rgb(1, 35, 73);"><br>
    <hr class="my-5">
    <h1 class="font-weight-bold text-center" style="color: rgb(255, 197, 51);">Materi</h1>
    <h5 style="color: rgb(255, 255, 255);">Terdapat Pilihan BAB Pelajaran Yang Dapat Dipilih</h5><br><br><br>

    <div class="accordion" id="accordionExample">
        <?php foreach ($materi as $profil) : ?>
            <div class="card">
                <div class="card-header">
                    <div>
                        <h5><?php echo $profil['nama']; ?></h5>

                    </div>
                    <div>
                        <?php echo $profil['keterangan']; ?>
                    </div><br>

                    <td><a href="<?php echo base_url() . 'user/download_smp/' . $profil['filename'] ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt">Download Full</a></td>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>