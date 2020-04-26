<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
	*	Doc pour les collègues

	*	placé ici vos restrictions de formulaires
	*	chaque tableau contient un path class/method(Ctrl)
	*	puis ce path contient un tableau multidimensionnel
	*	chaque tableau définit un input
	*	field = l'attribut name
	*	label = le nom de l'erreur du champ visible par le visiteur
	*	cotée form, has-error est propre à php, pas touche

	*	chercher sur Devdoc pour éventuellement voir d'autres restriction de CI
	*	@link{https://devdocs.io/codeigniter~3/libraries/form_validation}

	*	voir exemple Ctrl->structure
*/

$config = array(
	'structure/inscription' => array(
		array(
			'field' => 'name',
			'label' => 'nom',
			'rules' => array(
				'required',
				'min_length[3]',
				'max_length[15]')
		),
		array(
			'field' => 'username',
			'label' => 'prénom',
			'rules' => array(
				'required',
				'min_length[3]',
				'max_length[15]')
		),
		array(
			'field' => 'city',
			'label' => 'ville',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required')
		),
		array(
			'field' => 'mail',
			'label' => 'email',
			'rules' => array(
				'valid_email',
				'required')
		),
		array(
			'field' => 'password',
			'label' => 'mot de passe',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required')
		),
		array(
			'field' => 'comfirm_password',
			'label' => 'comfirmation de mot de passe',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required',
				'matches[password]')
		
		
		)));