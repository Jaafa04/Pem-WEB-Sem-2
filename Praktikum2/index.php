<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css1.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="judul">
    <h1>Sistem Penilaian</h1>
    <hr>
</div>

<form class="form-horizontal" method="POST" action="nilai_siswa.php">
<fieldset>

<!-- Form Name -->
<legend>Form Nilai Siswa</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Nama" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Mata Kuliah</label>
  <div class="col-md-3">
    <select id="matkul" name="matkul" class="form-control">
      <option value="DDP">Dasar Dasar Pemograman</option>
      <option value="Web">Web</option>
      <option value="MTK">Matematika</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uts">Nilai UTS</label>  
  <div class="col-md-2">
  <input id="nilaiuts" name="nilaiuts" type="text" placeholder="Nilai UTS" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uas">Nilai UAS</label>  
  <div class="col-md-2">
  <input id="nilaiuas" name="nilaiuas" type="text" placeholder="Nilai UAS" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tugas">Nilai Tugas / Praktikum</label>  
  <div class="col-md-2">
  <input id="nilaitugas" name="nilaitugas" type="text" placeholder="Nilai Tugas" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-4">
    <button id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>

</body>
</html>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


