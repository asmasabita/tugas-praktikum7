<?php
class Mahasiswa extends CI_Controller {
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model("Mahasiswa_model", "mhs1");
        // membuat object model 1 dan nilainnya
        $this->mhs1->id=1;
        $this->mhs1->nim='0101';
        $this->mhs1->nama='Faiz';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model("Mahasiswa_model", "mhs2");
        $this->mhs2->id=2;
        $this->mhs2->nim='0202';
        $this->mhs2->nama='Nurul';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        $this->load->model("Mahasiswa_model", "mhs3");
        $this->mhs3->id=2;
        $this->mhs3->nim='0331';
        $this->mhs3->nama='Siti';
        $this->mhs3->gender='P';
        $this->mhs3->ipk=3.91;
        // simpan object yang kita buat ke dalam arry
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        // saipakan data untuk dikirim ke dalam view, dimana datanya di ambil dari object yang kita simpan ke dalam arry
        $data['list_mhs'] = $list_mhs;
        // render data ke dalam view
        $this->load->view('Mahasiswa/index', $data);
    }
}
?>
