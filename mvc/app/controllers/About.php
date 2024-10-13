<?php 

class About {
    public function index($nama = 'Alfath', $pekerjaan = 'Mahasiswa')
     {
        echo "Halo, Nama saya $nama, saya adalah $pekerjaan";
    }
    public function page() 
    {
        echo 'About/page';
    }
}
?>