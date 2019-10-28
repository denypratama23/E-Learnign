<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1>
    <div class="container">

        <table class="table">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Usia</th>
                <th>Role id</th>
            </tr>
            <?php foreach ($user as $profil) : ?>
                <tr>
                    <td><?php echo $profil['name']; ?></td>
                    <td><?php echo $profil['email']; ?></td>
                    <td><?php echo $profil['status']; ?></td>
                    <td><?php echo $profil['usia']; ?></td>
                    <td><?php echo $profil['role_id']; ?></td>

                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->