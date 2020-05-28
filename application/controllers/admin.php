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
   * \brief page de modification d'une catégorie
   * \return  page formulaire de modification d'une catégorie
   * \author Grillet Stéphane
   * \date 28/05/2020
   */
  public function cli_list()
  {
    $data['select_cli'] = $this->clients->select_cli();
    $this->templates->display('clients1/cli_list', $data);
  }






  /*
A faire :
- faire list , modif
- demander a fodé pour la suppression 
*/






  /**
   * \brief page de modification d'une catégorie
   * \return  page formulaire de modification d'une catégorie
   * \author Grillet Stéphane
   * \date 05/05/2020
   */
  public function cliAjouts()
  {

    $resultajout = $this->input->post();
    $this->form_validation->set_rules('lastname', 'lastname', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('firstname', 'firstname', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('city', 'city', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('street', 'street', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('zipcode', 'zipcode', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('cell', 'cell', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('mail', 'mail', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('password', 'password', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('comfirm_password', 'comfirm_password', 'requiredrequired|matches[password]', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == false) {
      $this->templates->display('clients1/cli_list');
    } else {
      $ajout = array(
        'CLI_NOM' => $resultajout['lastname'],
        'CLI_PRENOM' => $resultajout['firstname'],
        'CLI_VILLE' => $resultajout['city'],
        'CLI_ADRESSE_FACTURATION' => $resultajout['street'],
        'CLI_CP' => $resultajout['zipcode'],
        'CLI_TEL' => $resultajout['cell'],
        'CLI_MAIL' => $resultajout['mail'],
        'CLI_MDP' => password_hash($resultajout['mdp'], PASSWORD_DEFAULT),
        'CLI_DATE_INSCRIPTION' => date('Y-m-d')
        );
      $this->administration->cliAjouts($ajout);
      redirect('admin/cli_list');
    }
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
