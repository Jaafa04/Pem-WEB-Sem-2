<?php
require_once 'libfungsi.php';

 $simpan= $_POST['simpan'];
 $nama_siswa = $_POST['nama'];
 $mata_kuliah = $_POST['matkul'];
 $nilai_uts = $_POST['nilaiuts'];
 $nilai_uas = $_POST['nilaiuas'];
 $nilai_tugas = $_POST['nilaitugas'];
 $penentu = $nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100;

 $hasil_ujian = kelulusan($penentu);
 echo 'Dinyatakan '.$hasil_ujian;
 

 echo '<br/>';

 $apatuman = grade($penentu);
 echo 'Dinyatakan '.$apatuman;

 echo '<br/>';

 $predikat = predikat($penentu);
 echo 'Dinyatakan '.$predikat;

 echo '<br/>';

 echo '<br/>Nama : '.$nama_siswa;
 echo '<br/>Mata Kuliah : '.$mata_kuliah;
 echo '<br/>Nilai UTS : '.$nilai_uts;
 echo '<br/>Nilai UAS : '.$nilai_uas;
 echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;

  


 ?>