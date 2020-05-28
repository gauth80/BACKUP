<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Structure extends CI_Controller
{
    /*
    --------------------------------------ACCEUIL------------------------------------------------
    */
  public function accueil ()
  {
      $this->templates->display('accueil');
  }
  
  public function liste ()
  {
      $this->templates->display('liste');
  }
  public function  assistance()
  {
      $this->templates->display('service');
  }
  public function  aide()
  {
      $this->templates->display('aide');
  }
  public function  propos()
  {
      $this->templates->display('propos');
  }
  public function  info()
  {
      $this->templates->display('info');
  }


  public function inscription() {

    if($this->form_validation->run()) {
      $this->accueil();
    } else {
      $this->templates->display('inscription');
    }
  }
}