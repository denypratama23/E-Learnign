<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Upload Materi</h1>
    <?php echo form_open_multipart('admin/materi') ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Judul</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Judul Materi">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Deskripsi Singkat</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="keterangan" placeholder="Berisi penjelasan singkat mengenai materi yang diupload ">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Mapel</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="mapel" placeholder="Matematika - IPA - B Indonesia">
    </div>
    <div class="form-group">

        <label for="varchar">Upload file<?php echo $error ?></label><br>
        <input type="file" name="filename"><br><br>

    </div>
    <button type="submit" class="btn btn-primary btn-user ">
        Submit
    </button>
    <?php echo form_close() ?>

</div>
<!-- /.container-fluid -->

</div>