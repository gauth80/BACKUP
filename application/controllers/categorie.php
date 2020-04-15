<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Categorie extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function cat_list()
  {
    $this->templates->display('cat_list');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function catAjouts()
  {
    $this->templates->display('catAjouts');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function catModif()
  {
    $this->templates->display('catModif');
  }
}
