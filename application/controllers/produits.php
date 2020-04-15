<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produits extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function pro_list()
  {
    $this->templates->display('pro_list');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function proAjouts()
  {
    $this->templates->display('proAjouts');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function proModif()
  {
    $this->templates->display('proModif');
  }
}
