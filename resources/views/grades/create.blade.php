<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Kelas</title>
    <!-- Css only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
    <a href="grade/create" class="btn btn-primary">Tambah Kelas</a> 
    <table class="table table bordered table-striped">
    <h1>Tambah Data Kelas</h1>
    <div>
        <form action="{{ route('grade.store') }}" method="post">
            @csrf
            <div class="mb-2">
                <input type="text" name="grade" class="form-control" placeholder="Nama Kelas">
            </div>
            <div class="mb-2">
                <input type="number" name="amount" class="form-control" placeholder="Jumlah Siswa">
            </div>
            <div class="mb-2">
            <input type="reset" class="btn btn-secondary"> &nbsp; <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
        </form>
    </div>
</div>
    
    <!-- JavaScript Bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>