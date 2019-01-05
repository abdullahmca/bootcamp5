<?php

/**
*
*/

class database
{
  function __construct(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "botcamp5";

    $koneksi = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($koneksi->connect_error) {
        die("koneksi ke database anda gagal: " . $koneksi->connect_error);
      }

    $tabel_products = "CREATE TABLE products (
    id VARCHAR(3) PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    categoty_id VARCHAR(3) NOT NULL
    )";

    $tabel_categories = "CREATE TABLE categories (
    id VARCHAR(3) PRIMARY KEY,
    name VARCHAR(20) NOT NULL
    )";

    if ($koneksi->query($tabel_products) === TRUE && $koneksi->query($tabel_categories)===true) {
            echo "berhasil membuat tabel products dan categories";
          }
        else {
        echo "gagal membuat tabel baru: " . $koneksi->error;
          }
        # code...

  }

}
$db=new database();

?>
