<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Personnels extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function pers_list()
  {
    $this->templates->display('pers_list');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function persAjouts()
  {
    $this->templates->display('persAjouts');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function persModif()
  {
    $this->templates->display('persModif');
  }
}
