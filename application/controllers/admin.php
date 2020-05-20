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
  /**
   * \brief Formulaire de création d'une nouvelle session
   * \return Formulaire de création d'une nouvelle session
   * \author Grillet Stéphane
   * \date 19/05/2020
   */
  public function new_session()
  {
    $data = array(
      'CLI_ID' => '',
      'CLI_NOM' => '',
      'CLI_PRENOM' => '',
      'CLi_MAIL' => '',
      'CLi_TYPE' => '',
      'CLi_ADRESSE_FACTURATION' => '',
      'CLi_COEFFICIENT' => ''
    );
    $this->session->userdata($data);
  }
  /**
   * \brief Formulaire de création d'une nouvelle session admin
   * \return Formulaire de création d'une nouvelle session admin
   * \author Grillet Stéphane
   * \date 19/05/2020
   */
  public function new_session_admin()
  {
    $dataAdmin = array(
      'CLI_ID' => '',
      'CLI_NOM' => '',
      'CLI_PRENOM' => '',
      'CLi_MAIL' => '',
      'CLi_TYPE' => '',
      'CLi_ADRESSE_FACTURATION' => '',
      'CLi_COEFFICIENT' => ''
    );
    $this->session->userdata($dataAdmin);
  }
  /**
   * \brief Suppression d'une session
   * \return Suppression d'une session
   * \author Grillet Stéphane
   * \date 20/05/2020
   */
  public function sup_session()
  {
    $array_items = array('id', 'nom', 'prenom', 'email', 'type', 'adresse', 'coefficient');

    $this->session->unset_userdata($array_items);
  }
  /**
   * \brief Suppression d'une session
   * \return Suppression d'une session
   * \author Grillet Stéphane
   * \date 20/05/2020
   */
  public function sup_session_admin()
  {
    $array_admins = array('id', 'nom', 'prenom', 'email', 'type', 'adresse', 'coefficient');

    $this->session->unset_userdata($array_admins);
  }
}
