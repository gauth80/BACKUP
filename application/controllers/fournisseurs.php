<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fournisseurs extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 
   */
  public function fourni_list()
  {
    $this->templates->display('fourni_list');
  }
    /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 
   */
  public function fourniAjouts()
  {
    $this->templates->display('fourniAjouts');
  }

  public function fourniModif()
  {
    $this->templates->display('fourniModif');
  }
}
