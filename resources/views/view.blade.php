<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa Berhasil disimpan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <center>
    <h1>Data Mahasiswa Berhasil disimpan</h1>
    <table class="table table-primary" style="width: 50%; text-align: center;">
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>NIM</td>
                <td>{{$data['nim']}}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>NAMA</td>
                <td>{{$data['nama']}}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>ALAMAT</td>
                <td>{{$data['alamat']}}</td>
            </tr>
        </tbody>
    </table>
    </center>
    <center>
        <a href="/read" class="btn btn-success">Tampilkan Data</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>