<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Buat Soal</h1>
    <form>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenjang</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mata Pelajaran</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Matematika</option>
                <option>Ilmu Pengetahuan Alam</option>
                <option>Bahasa Indonesia</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Soal</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tulis soal sesukamu yaa....... tapi jangan susah-susah">
        </div>

        <div class="row">
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Jawaban A"><br>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Jawaban B"><br>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Jawaban C"><br>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Jawaban D">
            </div>
        </div>
        <div class="kunci text-center">
            <p>Kunci Jawaban:</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">A</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">B</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3">C</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                <label class="form-check-label" for="inlineRadio4">D</label>
            </div>

        </div>

        <br>
        <button type="submit" class="btn btn-primary btn-user ">
            Simpan
        </button>
    </form>

    <br>
</div>
<!-- /.container-fluid -->

</div>