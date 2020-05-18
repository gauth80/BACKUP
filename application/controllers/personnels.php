<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Personnels extends CI_Controller
	{


		public function liste_personnel()
		{

			$resultat["personnel"] = $this->crud_personnel->liste();
			$this->load->view('header');
			$this->load->view('liste_personnel',$resultat);
			$this->load->view('footer');
		}

		public function ajouter_personnel()
		{
			$email = "/.+@.+\..+/";
			$base = "/^[a-zA-ZÀ-ú\-\s]*/";
			$chiffreEtLettre = "/^[a-zA-Z0-9_]+$/";
			$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
			$chiffre = "/[0-9]{1,9}/";
			$this->load->library('form_validation');

			if($this->input->post())
			{
				$ajout =$this->input->post();
				$this->form_validation->set_rules('nom','nom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('prenom','prenom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('service','service',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('identifiant','identifiant',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('mdp','mdp',"required|regex_match[$mdp]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('matricule','matricule',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('email','email',"required|regex_match[$email]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('coeficient','coeficient',"required|regex_match[$chiffre]",array('required' => 'La %s manquante','regex_match' => 'La %s incorrect',"is_unique"=>'La %s existe déjà'));
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

				if($this->form_validation->run() == FALSE)
				{
					$resultat["personnel"] = $this->crud_personnel->liste();
					$this->load->view('header');
					echo "error";
					$this->load->view('liste_personnel',$resultat);
					$this->load->view('footer');
				}
				else
				{
					$data = array(
						'PER_NOM' => $ajout['nom'],
						'PER_PRENOM' => $ajout['prenom'],
						'PER_SERVICE' => $ajout['service'],
						'PER_IDENTIFIANT' => $ajout['identifiant'],
						'PER_MDP' => $ajout['mdp'],
						'PER_MATRICULE' => $ajout['matricule'],
						'PER_EMAIL' => $ajout['email'],
						'PER_COEFICIENT' => $ajout['coeficient'],
						'PER_CREATION' => date('Y-m-d')
					  );
					$this->crud_personnel->ajouter($data);
					redirect('personnel/liste_personnel');
				}
			}
			else
			{ // 1er appel de la page: affichage du formulaire
				$resultat["personnel"] = $this->crud_personnel->liste();
				$this->load->view('header');
				$this->load->view('liste_personnel',$resultat);
				$this->load->view('footer');
			}
		}
		public function modifier_personnel($id)
		{
			$personnel=$this->crud_personnel->personnelID($id);
			$resultat["personnel"]=$personnel;
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
				$this->form_validation->set_rules('coeficient','coeficient',"required|regex_match[$chiffre]",array('required' => 'La %s manquante','regex_match' => 'La %s incorrect',"is_unique"=>'La %s existe déjà'));
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

				if($this->form_validation->run() == FALSE)
				{
					$this->load->view('header');
					$this->load->view('modification',$resultat);
					$this->load->view('footer');
				}
				else
				{
					$ajout =$this->input->post();
					$data = array(
						'PER_NOM' => $ajout['nom'],
						'PER_PRENOM' => $ajout['prenom'],
						'PER_SERVICE' => $ajout['service'],
						'PER_IDENTIFIANT' => $ajout['identifiant'],
						'PER_MDP' => $ajout['mdp'],
						'PER_MATRICULE' => $ajout['matricule'],
						'PER_EMAIL' => $ajout['email'],
						'PER_COEFICIENT' => $ajout['coeficient']
					  );
					$this->crud_personnel->modification($id,$data);
					redirect('personnel/liste_personnel');
				}
			}
			else
			{
				$this->load->view('header');
				$this->load->view('modification',$resultat);
				$this->load->view('footer');
			}
		}
		public function supprimer_personnel($id)
		{
			$this->crud_personnel->supprimer($id);
			redirect('personnel/liste_personnel');
		}
	}
?>