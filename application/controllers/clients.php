<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Clients extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function cli_list()
  {
    $this->templates->display('cli_list');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function cliAjouts()
  {
    $this->templates->display('cliAjouts');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function cliModif()
  {
    $this->templates->display('cliModif');
  }
}
