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
      $data['clients'] = $this->client->clientList();
      $this->templates->display('clients/cli_list');
    }
    /**
     * \brief 
     * \return  
     * \author LEGRIS Augustin
     * \date 14/04/2020
     */
    public function cliAjouts()
    {
      if ($this->input->post()) {
        $adresse = "/^[0-9a-zA-Z]+(?:(?:[\'\s\-\/])?[a-zA-Z]+)*$/";
        $mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[+!*$@%_])([+!*$@%_\w]{8,15})$/";


        $this->form_validation->set_rules('adresse', 'adresse', "required|regex_match[$adresse]", array('required' => 'Il faut une %s ', 'regex_match' => 'Il faut une %s '));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == FALSE) {
          $this->templates->display('clients1/cliAjout');
        } else {
          $ajout = $this->input->post();
          $data = array(
            'PER_NOM' => $ajout['nom'],
            'PER_PRENOM' => $ajout['prenom'],
            'PER_SERVICE' => $ajout['service'],
            'PER_IDENTIFIANT' => $ajout['identifiant'],
            'PER_MDP' => password_hash($ajout['mdp'], PASSWORD_DEFAULT),
            'PER_MATRICULE' => $ajout['matricule'],
            'PER_EMAIL' => $ajout['email'],
            'PER_COEFICIENT' => $ajout['coefficient']
          );
          $this->fournisseur->fourniAj($data);
          redirect('clients/cli_list');
        }
      } else {
        $this->templates->display('clients1/fourniAjouts');
      }
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
