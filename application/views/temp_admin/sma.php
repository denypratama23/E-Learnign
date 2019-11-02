<div class="container">
    <form class="videos" method="post" action="<?= base_url('admin/videosma'); ?>">
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" placeholder="Judul Vidio">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Upload Video</label>
            <input type="text" class="form-control" name="code" id="code" placeholder="Tulis URL Video">
        </div><br>
        <button type="submit" class="btn btn-primary btn-user ">
            Simpan
        </button>
    </form>
</div>