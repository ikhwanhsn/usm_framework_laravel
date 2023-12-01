<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create Data Mahasiswa</title>
</head>
<body>
    <div class="container mt-4">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        @if($errors->any())
            <div style="color:red;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="text-center card-header font-weight-bold">
                Create Data Mahasiswa
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data" action="{{url('save')}}">
                    @csrf
                    <div class="form-group">
                        NIM
                        <input type="text" name="nim" id="nim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        NAMA
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        FOTO PROFIL
                        <input type="file" name="foto_profil" id="foto_profil" class="form-control"  accept="image/*">
                    </div>
                    <div class="form-group">
                        ALAMAT
                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="mt-2 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>