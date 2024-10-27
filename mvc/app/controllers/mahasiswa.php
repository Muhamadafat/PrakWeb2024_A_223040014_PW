<?php 

class Mahasiswa extends Controller{
    public function index() 
    {
        $data['judul'] = 'Daftar Mhasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) 
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'Success');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'Danger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('mahasiswa_model')->tambahDataMahasiswa($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'Success');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'Danger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }


    public function getUbah(){

        echo json_encode($this->model('mahasiswa_model')->getMahasiswaById($_POST['id']));
    }


    public function ubah()
    {
        if( $this->model('mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'Success');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'Danger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }



}
?>