<?php
if(!session_id()){
    session_start();
}

require_once '../app/init.php'; //memanggil seluruh mvc

$app = new App; //menjalankan class App