<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Personnels extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 
   */
  public function pers_list()
  {
    $this->templates->display('pers_list');
  }
    /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 
   */
  public function persAjouts()
  {
    $this->templates->display('persAjouts');
  }

  public function persModif()
  {
    $this->templates->display('persModif');
  }
}
