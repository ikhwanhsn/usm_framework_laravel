<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <center>
        @if(session('pesan'))
            <div class="alert alert-success">
                {{session('pesan')}}
            </div>
        @endif
        <h1>TABEL MAHASISWA</h1>
        <section>
            <table class="table w-auto table-stript">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;
                    foreach($dataAll as $datax){
                        if(($num%2) == 1){
                            echo "<tr class='table-info'>";
                        } else {
                            echo "<tr>";
                        }
                        echo "<th scope='row'>$num</th>";
                        echo "<td>";
                        echo $datax->nim;
                        echo "</td>";
                        echo "<td>";
                        echo $datax->nama;
                        echo "</td>";
                        echo "<td>";
                        echo $datax->alamat;
                        echo "</td>";
                        echo "<td>";
                        echo $datax->created_at;
                        echo "</td>";
                        echo "<td>";
                        echo $datax->updated_at;
                        echo "</td>";
                        echo "<td>";
                        echo "<a href=/delete/".$datax->nim." onclick=\"return confirm('Yakin mau dihapus ?');\" class='btn btn-danger'> HAPUS</a>";
                        echo "<a href=/update/".$datax->nim. " onclick=\"return confirm('Yakin data mau diedit/diupdate ?');\" class='btn ms-2 btn-success'> UPDATE</a>";
                        echo "</td>";
                        echo "</tr>";
                        $num++;
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <a href="/create" class="btn btn-success">Tambah Data</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>