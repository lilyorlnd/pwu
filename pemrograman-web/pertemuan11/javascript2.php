<?php
    $data[0]['nama']        = "sudi astrini";
    $data[0]['alamat']      = "Jl. Tukad Petanu";
    $data[0]['prodi']       = "MDI";
    $data[0]['tgl_lahir']   = "14-08-2004";

    $data[0]['nama']        = "leon pairet";
    $data[0]['alamat']      = "Jl. Tukad pakerisan";
    $data[0]['prodi']       = "MDI";
    $data[0]['tgl_lahir']   = "22-09-2003";
    
    $data[0]['nama']        = "lily orlando";
    $data[0]['alamat']      = "Jl. Tukad pancoran";
    $data[0]['prodi']       = "MDI";
    $data[0]['tgl_lahir']   = "15-07-2004";
    
    
   

    echo json_encode($data);
    header("Content-Type: application/json; charset=utf-12");