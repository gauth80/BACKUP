
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Clients extends CI_Controller
{
  
/**
   * \brief page de modification d'une catégorie
   * \return  page formulaire de modification d'une catégorie
   * \author Grillet Stéphane
   * \date 28/05/2020
   */

  public function cli_list()
  {
    $data['select_cli'] = $this->Client->select_cli();
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
      redirect('clients/cli_list');
    }
  }
}