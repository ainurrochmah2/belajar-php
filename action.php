<?php

$username = $_POST["username"];
$password = $_POST["password"];

if (empty($username)) {
    echo "Anda belum memasukkan ussername";
    return;
}
if (empty($password)) {
    echo "Anda belum memasukkan password";
    return;
}
if (empty($username.$password)){
    echo "Halaman ini kosong";
}
if ($_GET['p'] == 'tampil') {
    echo "Anda berhasil log in";
}


?>