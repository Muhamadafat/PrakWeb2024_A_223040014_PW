<?php 

class About extends controller {
    public function index($nama = 'Muhamad Alfath Septian', $pekerjaan = 'Mahasiswa' , $umur = 20)
     {
       $data['nama'] = $nama;
       $data['pekerjaan'] = $pekerjaan;
       $data['umur'] = $umur;
       $data['judul'] = 'About Me';
       $this->view('templates/header', $data);
       $this->view('about/index', $data);
       $this->view('templates/footer');
    }

    public function page() 
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
?>