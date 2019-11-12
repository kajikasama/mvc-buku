<?php

  class ProductModel
  {
    private $dbh; //data base handler
    private $stmt; //statement

    public function __construct()
    {
      //data source name
      $dsn = 'mysql:host=localhost;dbname=buku-mvc';

      try
      {
        $this->dbh =  new PDO($dsn, 'root', '');
      }
      catch(PDOException $e)
      {
        die($e->getMessage());
      }
    }

    public function getAllProduct()
    {
      $this->stmt = $this->dbh->prepare('SELECT * FROM produk');
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // private $product = 
    // [
    //   [
    //     "judul" => "The Silent Sinner In Blue Vol1",
    //     "tahun" => "2003",
    //     "penerbit" => "Alexa Compustudio",
    //     "pengarang" => "Zun",
    //     "halaman" => "203",
    //     "harga" => "12000"
    //   ],
    //   [
    //     "judul" => "The Silent Sinner In Blue Vol2",
    //     "tahun" => "2004",
    //     "penerbit" => "Alexa Compustudio",
    //     "pengarang" => "Zun",
    //     "halaman" => "212",
    //     "harga" => "12000"
    //   ],
    //   [
    //     "judul" => "The Silent Sinner In Blue Vol3",
    //     "tahun" => "2004",
    //     "penerbit" => "Alexa Compustudio",
    //     "pengarang" => "Zun",
    //     "halaman" => "193",
    //     "harga" => "12000"
    //   ]
    // ];

    
  }

?>