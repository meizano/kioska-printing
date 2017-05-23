<!DOCTYPE html>
<html lang="id">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Kioska Printing">
        <meta name="author" content="Meizano">
        <meta name="copyright" content="&copy; 2017 UPT Perpustakaan Universitas Lampung" />

        <title>Kioska Printing</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/kioska.css"/>

    </head>
    <body>
       <div class="col-md-12 Head">
                <div class="col-md-2 logo"><img class="logo" src="img/logo-unila-statuta-final-4.png" height="100%";/> </div>
                <div class="col-md-10 text-header"><b>KIOSKA PRINTING UPT PERPUSTAKAAN UNIVERSITAS LAMPUNG</b></div>
            </div>
        <div class="row">

            <div class="col-md-offset-2 col-lg-offset-2 col-xs-8 col-md-8 col-lg-8  body-kioska">
               <span id="petunjukPencarian">Silahkan masukkan kata kunci pencarian</span>
               <form id="pencarian">
               <fieldset>
                <div class="input-group cari">
                    <input type="text" class="form-control input-lg" placeholder="Kata Kunci" id="kataKunci" name="kataKunci">

                    <div class="input-group-btn">
                        <button type="button" class="btn  btn-lg" data-toggle="collapse" data-target="#uraian"> ...</button>
                        <a class="btn btn-lg btn-info" type="button" href="form_hasil.php">Cari</a>

                    </div>
                </div>
                </fieldset>
                <br/>
                <div id="uraian" class="collapse">
                    <div class="row" style="background-color: antiquewhite;">
                        <div class="col-md-1 col-lg-1"></div>
                        <div class="col-md-4 col-lg-4" style="background-color: antiquewhite;">
                            <input class="form-control input-lg" type="text" placeholder="Pengarang"/>
                            <br/>
                            <input class="form-control input-lg" type="text" placeholder="Kata Kunci"/>
                            <br/>
                            <input class="form-control input-lg" type="text" placeholder="ID Karya Ilmiah"/>
                        </div>
                        <div class="col-md-1 col-lg-1"></div>
                        <div class="col-md-1 col-lg-1"></div>
                        <div class="col-md-4 col-lg-4" style="background-color: antiquewhite;">
                            <input class="form-control input-lg" type="date" placeholder="Tanggal Terbit"/>
                            <br/>
                            <select class="form-control input-lg" type="text" placeholder="Fakultas">
                                <option>Semua Fakultas</option>
                                <option>Fakultas Ekonomi dan Bisnis</option>
                                <option>Fakultas Hukum</option>
                                <option>Fakultas Ilmu Sosial dan Ilmu Politik</option>
                                <option>Fakultas Kedokteran</option>
                                <option>Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                                <option>Fakultas Pertanian</option>
                                <option>Fakultas Teknik</option>
                                <option>Pasca Sarjana</option>
                            </select>
                            <br/>
                            <select class="form-control input-lg" type="text" placeholder="Type Karya Ilmiah">
                                <option>Semua Type</option>
                                <option>Artikel</option>
                                <option>Buku</option>
                                <option>Thesis</option>
                                <option>Skripsi</option>
                            </select>
                        </div>
                        <div class="col-md-1 col-lg-1"></div>
                    </div>
                </div>
                <br/>
                <div class="Hasil" style="font-size: 18px; background-color: antiquewhite;">
                    <div class="info col-md-12 col-lg-12" style="background-color: antiquewhite;" >Di temukan ... pencarian dari kata kunci : ..... </div>
                    <div class="panel panel-danger" style="text-align: left;">
                    <div class="panel-heading" style="text-align: left;" href="">Judul Karya Ilmiah</div>
                    <div class="panel-body">
                        <div class="author" style="text-align: left; ">Pengarang :</div>
                        <div class="ID" style="text-align: left; ">ID Karya Ilmiah :</div>
                        <div class="Jurusan" style="text-align: left; ">Jurusan :</div>
                        <a class="btn btn-info btn-lg" type="button" href="form_rincian.php">Detail Karya Ilmiah</a>
                        </div>
                    </div>
                    <br>
                    <a class="btn btn-danger" href="index.html">kembali</a>

                   </div>
                </form>
            </div>

            <div class="col-xs-2 col-md-2 col-lg-2"></div>
        </div>

        <footer class="col-md-12 Foot">
            <div id="footer" xmlns:dc="http://purl.org/dc/elements/1.1/">
                <p id="copyright" property="dc:rights">&copy;
                    <span property="dc:dateCopyrighted">2017</span>
                    <span property="dc:publisher">UPT Perpustakaan Universitas Lampung</span>
                </p>
            </div>
        </footer>

        <script type="text/javascript" src="css/jquery.min.js"></script>
        <script type="text/javascript" src="css/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
