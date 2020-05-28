<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Personnels extends CI_Controller
	{


		public function pers_list()
		{

			$resultat["personnel"] = $this->Personnel->liste();
			$this->templates->display('personnel/pers_list',$resultat);
		}

		public function persAjouts()
		{
			if($this->input->post())
			{
			$email = "/.+@.+\..+/";
			$base = "/^[a-zA-ZÀ-ú\-\s]*/";
			$chiffreEtLettre = "/^[a-zA-Z0-9_]+$/";
			$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
			$chiffre = "/[0-9]{1,9}/";

				$this->form_validation->set_rules('nom','nom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('prenom','prenom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('service','service',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('identifiant','identifiant',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('mdp','mdp',"required|regex_match[$mdp]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('matricule','matricule',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('email','email',"required|regex_match[$email]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('coefficient','coefficient',"required|regex_match[$chiffre]",array('required' => 'La %s manquante','regex_match' => 'La %s incorrect',"is_unique"=>'La %s existe déjà'));
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

				if($this->form_validation->run() == FALSE)
				{
					$this->templates->display('personnel/persAjouts');
				}
				else
				{

          $ajout =$this->input->post();
					$data = array(
						'PER_NOM' => $ajout['nom'],
						'PER_PRENOM' => $ajout['prenom'],
						'PER_SERVICE' => $ajout['service'],
						'PER_IDENTIFIANT' => $ajout['identifiant'],
						'PER_MDP' => password_hash($ajout['mdp'], PASSWORD_DEFAULT),
						'PER_MATRICULE' => $ajout['matricule'],
						'PER_EMAIL' => $ajout['email'],
						'PER_COEFICIENT' => $ajout['coefficient'],
						'PER_CREATION' => date('Y-m-d')
					  );
					$this->Personnel->ajouter($data);
					redirect('personnels/pers_list');
				}
			}
			else
			{
				$this->templates->display('personnel/persAjouts');
			}
		}
		public function persModif($id)
		{
			$personnel=$this->Personnel->personnelID($id);
			$resultat["personnel"]=$personnel;
			if($this->input->post())
			{
				$email = "/.+@.+\..+/";
				$base = "/^[a-zA-ZÀ-ú\-\s]*/";
				$chiffreEtLettre = "/^[a-zA-Z0-9_]+$/";
				$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[+!*$@%_])([+!*$@%_\w]{8,15})$/";
				$chiffre = "/[0-9]{1,9}/";

				$this->form_validation->set_rules('nom','nom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('prenom','prenom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('service','service',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('identifiant','identifiant',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('mdp','mdp',"required|regex_match[$mdp]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('matricule','matricule',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('email','email',"required|regex_match[$email]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('coefficient','coefficient',"required|regex_match[$chiffre]",array('required' => 'La %s manquante','regex_match' => 'La %s incorrect',"is_unique"=>'La %s existe déjà'));
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

				if($this->form_validation->run() == FALSE)
				{
					$this->templates->display('personnel/persModif',$resultat);
				}
				else
				{
					$ajout =$this->input->post();
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
					$this->Personnel->modification($id,$data);
					redirect('personnels/pers_list');
				}
			}
			else
			{
				$this->templates->display('personnel/persModif',$resultat);
			}
		}
		public function persDel($id)
		{
			$this->Personnel->supprimer($id);
			redirect('personnels/pers_list');
		}
	}
?>