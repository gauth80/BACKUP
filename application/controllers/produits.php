<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produits extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 
   */
  public function pro_list()
  {
    $this->templates->display('pro_list');
  }
    /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 
   */
  public function proAjouts()
  {
    $this->templates->display('proAjouts');
  }
    /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 
   */
  public function proModif()
  {
    $this->templates->display('proModif');
  }
}
