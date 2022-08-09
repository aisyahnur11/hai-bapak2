<?php

$nama = $_GET['nama'];
$kelas = $_GET['kelas'];

$dB= new PDO('mysql:host=localhost;dbname=sekolah3','root','');
$query = $dB->query("insert into siswa values ('','$nama','$kelas')");