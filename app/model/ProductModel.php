<?php

  class ProductModel
  {
    private $table = 'produk';
    private $db;

    public function __construct()
    {
      $this->db = new Databases;
    }


    public function getAllProduct()
    {
      $this->db->query('SELECT * FROM '.$this->table);
      return $this->db->resultSet();
    }

    
  }

?>