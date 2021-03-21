<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
    <a class="navbar-brand">Sistem Penilaian</a>
    
  </nav>
<h3 class="mt-3 ml-3 text-info">Form Siswa</h3>
<hr class="m-3">
<div class="row justify-content-center">
  <form method="POST" action="nilai_siswa.php" class="m-5  shadow p-3 col-8 ">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label text-right">Nama Lengkap</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="nama" required id="inputPassword" placeholder="Nama Lengkap">
    </div>
  </div>
  <div class="form-group row ">
    <label for="staticEmail" class="col-sm-2 col-form-label text-right">Mata Kuliah</label>
    <div class="col-sm-10">

    <select name="matkul" id="input" class="form-control" required="required">
      <option value="">Mata Kuliah</option>
      <option value="Basis Data">Basis Data</option>
      <option value="Bahasa Inggris">Bahasa Inggris</option>
      <option value="PPKN">PPKN</option>
      <option value="Keterampilan Komunikasi">Keterampilan Komunikasi</option>  
      <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
      <option value="Jaringan Komputer">Jaringan Komputer</option>
      <option value="UI/UX">UI/UX</option>
      <option value="Pemrogramman WEB">Pemrogramman WEB</option>
    </select>
    
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label text-right">Nilai UTS</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="uts" id="inputPassword" required placeholder="Nilai UTS">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label text-right">Nilai UAS</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="uas" id="inputPassword" required placeholder="Nilai UAS">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label text-right">Nilai Tugas/Praktikum</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="tugas" id="inputPassword" required placeholder="Nilai Tugas">
    
  <button type="submit" name="proses" class="btn btn-success mt-3">Simpan</button>
    </div>
  </div>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>