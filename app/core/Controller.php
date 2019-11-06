<?php

  class Controller
  {
    public function view($view, $data = [])
    {
      include '../app/view/'.$view.'.php';
    }
  }

?>