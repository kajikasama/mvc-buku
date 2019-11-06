<?php

  class About extends Controller
  {
    public function index()
    {
      $data['judul'] = 'About';

      $data['header-tulisan'] = 'Membaca Buku Dari Perpustakaan </br>Yang Tak Bergerak';
      $data['header-tulisan2'] = 'Perpustakaan Milik Patchouli Knowledge';

      $this->view('template/header',$data);
      $this->view('template/bg');
      $this->view('template/navbar');
      $this->view('about/index',$data);
      $this->view('template/footer');
    }
    public function page($nama = 'Agus')
    {
      $data['judul'] = 'Page';
      $data['nama'] = $nama;

      $this->view('template/header',$data);
      $this->view('about/page',$data);
      $this->view('template/footer');
    }
  }

?>