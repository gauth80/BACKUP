<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Structure extends CI_Controller
{
    /*
    --------------------------------------ACCEUIL------------------------------------------------
    */
  public function acceuil ()
  {
      $this->template->display('acceuil');
  }
  
}