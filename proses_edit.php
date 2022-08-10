<?php
$db = new PDO("mysql:host=localhost;dbname=sekolah","root","");
$query = $db->query("UPDATE `siswa` SET `nama`='nur' WHERE `id` = 1234 ");