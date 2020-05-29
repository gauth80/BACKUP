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
  //------------------------------------------------------------------------------------------------------



  /**
   * \brief Formulaire de création d'une nouvelle session client
   * \return Formulaire de création d'une nouvelle session client
   * \author Grillet Stéphane
   * \date 19/05/2020
   */
  public function new_session_client()
  {

    $requete = $this->admin->session_client;

    $this->session->set_userdata('client', TRUE);
    $dataClient = array(
      'CLI_ID' => $requete->CLI_ID,
      'CLI_PRENOM' => $requete->CLI_PRENOM,
      'CLI_MAIL' => $requete->CLI_MAIL,
      'CLI_TYPE' => $requete->CLI_TYPE,
      'CLI_ADRESSE_FACTURATION' => $requete->CLI_ADRESSE_FACTURATION,
      'CLI_COEFFICIENT' => $requete->CLI_COEFFICIENT
    );
    $this->session->set_userdata('sess_client', $dataClient);
  }
  /**
   * \brief Suppression d'une session client
   * \return Suppression d'une session client
   * \author Grillet Stéphane
   * \date 20/05/2020
   */
  public function sup_session()
  {
    $this->session->unset_userdata('client', 'sess_client');
    $this->session->sess_destroy('client', 'sess_client');
  }
  /**
   * \brief Formulaire de création d'une nouvelle session admin
   * \return Formulaire de création d'une nouvelle session admin
   * \author Grillet Stéphane
   * \date 26/05/2020
   */
  public function new_session_admin()
  {

    $requete = $this->admin->session_admin;

    $this->session->set_userdata('admin', TRUE);
    $dataAdmin = array(
      'PER_ID' => $requete->PER_ID,
      'PER_MATRICULE' => $requete->PER_MATRICULE,
      'PER_SERVICE' => $requete->PER_SERVICE,
      'COEFFICIENT_COMMERCIAL' => $requete->COEFFICIENT_COMMERCIAL
    );
    $this->session->set_userdata('sess_admin', $dataAdmin);
  }
  /**
   * \brief Suppression d'une session client
   * \return Suppression d'une session client
   * \author Grillet Stéphane
   * \date 26/05/2020
   */
  public function sup_session_admin()
  {
    $this->session->unset_userdata('admin', 'sess_admin');
    $this->session->sess_destroy('admin', 'sess_admin');
  }
}