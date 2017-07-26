<?php
  class PagesController {
    public function home() {
      $title1 = 'Caro';
      $title2  = 'assinante';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>