<?php
$koneksi = mysqli_connect("localhost","root","","sekolah01");
// "server", "user", "password", "nama database"
// check connection 
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : ". mysqli_connect_error();
}
?> 