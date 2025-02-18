<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $noTelp = $_POST["nomor_telepon"];
    $opsi = $_POST["Kategori"];
    
    echo $nama . '<br>';
    echo $alamat . '<br>';
    echo $email . '<br>' ;
    echo $noTelp . '<br>' ;
    echo $opsi;

}
