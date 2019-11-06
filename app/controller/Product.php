<?php

  class Product extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Product';

      $this->view('template/header',$data);
      $this->view('product/index');
      $this->view('template/footer');
    }
  }

?>