<!doctype html>
<html lang="en">
  <head>
    
    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <h3>Daftar Mahasiswa</h3>
    <div >
    <table border="1">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">IPK</th>
                <th scope="col">Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach($list_mhs as $mhs){
            ?>
            <tr>
                <td><?= $nomor ?></th>
                <td><?= $mhs -> nim ?></td>
                <td><?= $mhs -> nama ?></td>
                <td><?= $mhs-> gender ?></td>
                <td><?= $mhs -> ipk ?></td>
                <td><?= $mhs-> predikat() ?></td>
            </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
    </div>
  </body>
</html>


    