<?php

      require_once 'libfungsi.php';

      $button         = $_POST['proses'];
      $nama           = $_POST['nama'];
      $matkul         = $_POST['matkul'];
      $uts            = $_POST['uts'];
      $uas            = $_POST['uas'];
      $tugas          = $_POST['tugas'];

      $uts1           = (float)$uts*30/100;
      $uas1           = (float)$uas*35/100;
      $tugas1         = (float)$tugas*35/100;
      $nilai          = $uts1 + $uas1 + $tugas1;

      $kelulusan    = kelulusan($nilai);
      $grade        = grade($nilai);
      $predikat     = predikat($grade);
      ?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
            <a class="navbar-brand">Nilai Kamu</a>
        </nav>
        <a href="form_nilai.php" class="btn btn-info m-2">Form Nilai</a>
        <div class="row justify-content-center">
            <div class="col-4 shadow p-4 m-5  ">
                <div class="card">
                    <div class="bg-primary text-white text-center card-header">
                        Data
                    </div>
                    <div class="card-body">
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Nama Siswa
                            </div>
                            <div class="col-6  text-primary">
                                <?= $nama ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Mata Kuliah
                            </div>
                            <div class="col-6  text-primary">
                                <?= $matkul ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Nilai UTS
                            </div>
                            <div class="col-6  text-primary">
                                <?= $uts ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Nilai UAS
                            </div>
                            <div class="col-6  text-primary">
                                <?= $uas ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Nilai Tugas
                            </div>
                            <div class="col-6  text-primary">
                                <?= $tugas ?>
                            </div>
                        </div>
                        <hr>
                       
                    </div>
                </div>

            </div>

            <div class="col-4 shadow p-4 m-5  ">
                <div class="card">
                    <div class="bg-primary text-white text-center card-header">
                        Penilaian
                    </div>
                    <div class="card-body">
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                IPK
                            </div>
                            <div class="col-6  text-primary">
                                <?= $nilai ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Grade
                            </div>
                            <div class="col-6  text-primary">
                                <?= $grade ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Predikat
                            </div>
                            <div class="col-6  text-primary">
                                <?= $predikat ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Status
                            </div>
                            <div class="col-6  text-primary">
                                <?= $kelulusan ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12 text-center text-danger">
                                <h2>SEMANGAT !</h2>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>