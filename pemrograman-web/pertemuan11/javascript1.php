<?php
    $data['nama']        = "Sudi Astrini";
    $data['alamat']      = "Jl. Tukad Petanu Gg. Rajawali, Sidakarya";
    $data['prodi']       = "MDI";
    $data['tgl_lahir']   = "14-08-2004";


    echo json_encode($data);
    header("Content-Type: application/json; charset=utf-12");