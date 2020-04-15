<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
    public function adminAccueil()
    {
        $this->templates->display('adminAccueil');
    }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 15/04/2020
   */
  public function Panier()
  {
      $this->templates->display('Panier');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 15/04/2020
   */
  public function PaiementCom()
  {
      $this->templates->display('paiementCom');
  }
    /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 15/04/2020
   */
  public function BonLiv()
  {
      $this->templates->display('BonLiv');
  }

}
