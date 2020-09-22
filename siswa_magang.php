<?php

$data_siswa=[];


while(true)
{
    //Data siswa

    $siswa=&$data_siswa;

    //Banner Aplikasi

    tampil("Data Siswa Magang Top");
    tampil("=====================");

    // menu aplikasi

    // switch(menuAplikasi()){

    // }

    // User Input data siswa magang

    $input_siswa=readline("Masukkan data siswa ? ");

    //Validasi Huruf

    if(!preg_match("/^[A-Za-z]*$/",$input_siswa)|| empty($input_siswa))
    {
        
        tampil("Tolong Masukan Characther Huruf!!! ");
        continue;
    }

    //simpan Data Siswa

    $siswa[]=$input_siswa;

    // Munculkan data siswa magang

    $nomor=1;

    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }

    //Tanya usser untuk masukkan data lagi

    tanyaUser();

}

function tampil($pesan)
{
    tampil( $pesan.PHP_EOL);
}

function tanyaUser()
{
    $tanya = readline("Tambah data ? ");

    if($tanya == "no") {
        tampil("Terima Kasih");
        exit;
    }
}

function tampilData()
{
    $nomor = 1;

    foreach ($data as $key){
        tampil("Data Siswa");

    }
}

//CRUD (Create Read Update Delete)

// function inputData($data)
// {
//     echo ("Input Data");
// }

// function tampilData($data)
// {
//     echo ("Tampil Data");
// }

// function updateData($data)
// {
//     echo ("Update Data");
// }

// function deleteData($data)
// {
//     echo ("Delete Data");
// }

?>