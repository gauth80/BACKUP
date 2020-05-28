<?php

/*
*	teste unitaire

*	Contact/inscription

*	<imp>	A rajoutée sur champs email rules => is_unique[table.champs]
*	<imp>	# -- semble passée dans champs email(soucie d'injection permanente)
*	<op>	Problème de translate pour la régle alpha_numeric_spaces

*	Produits/create/update
*	<imp>	# -- passe, a rectifiez
*	Info:

*	Chaque tableau multidimentionel est associer a un path, ce path c'est controller/method référent aux class
*	Une librairy externe a CI a étais installé, elle traduits chaques erreurs de champs en français, inutile d'utiliser
*	Set_message('')

*/

defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
	'inscription' => array(
		array(
			'field' => 'name',
			'label' => 'nom',
			'rules' => 'required|min_length[3]|max_length[15]|trim|regex_match[/^[a-zA-Z\s]{3,15}$/]'
		),

		array(
			'field' => 'username',
			'label' => 'prénom',
			'rules' => 'required|min_length[3]|max_length[15]|trim|regex_match[/^[a-zA-Z\s]{3,15}$/]'
		),

		array(
			'field' => 'city',
			'label' => 'ville',
			'rules' => 'required|min_length[3]|max_length[15]|trim|regex_match[/^[a-zA-Z\s]{3,15}$/]'
		),

		array(
			'field' => 'street',
			'label' => 'adresse',
			'rules' => 'required|min_length[6]|max_length[50]|trim'
		),

		array(
			'field' => 'zipcode',
			'label' => 'code postal',
			'rules' => 'required|min_length[3]|max_length[9]|trim|integer'
		),

		array(
			'field' => 'cell',
			'label' => 'numéro de téléphone',
			'rules' => 'required|min_length[10]|max_length[12]|trim|regex_match[/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/]'
		),

		array(
			'field' => 'email',
			'label' => 'email',
			'rules' => 'required|min_length[6]|max_length[50]|is_unique[clients.CLI_MAIL]|trim|valid_email|regex_match[/[^@\t\r\n\-\<\#\?][a-zA-Z0-9]{0,9}(?:@[^@\t\r\n\-\<\#\?][a-zA-Z0-9]{0,9})(?:\.[a-zA-Z]{2,5})/]'
		),

		array(
			'field' => 'password',
			'label' => 'mot de passe',
			'rules' => 'min_length[8]|max_length[15]|required|regex_match[/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!@$%^&*]).[^\t\r\n\-\<\#\?\ ]{8,15}$/]'
		),

		array(
			'field' => 'comfirm_password',
			'label' => 'comfirmation mot de passe',
			'rules' => 'min_length[3]|max_length[15]|required|matches[password]'
		)
	),

	'create' => array(
		//rx slug
		array(
			'field' => 'pro_lib',
			'label' => 'libelle',
			'rules' => 'required|min_length[1]|max_length[255]|trim|regex_match[/^[a-zA-Z0-9]+(?:\s[a-zA-Z0-9]+)*$/]'
		),

		array(
			'field' => 'pro_ref',
			'label' => 'référence',
			'rules' => 'required|min_length[3]|max_length[8]|trim|is_unique[produits.PRO_REF]|regex_match[/^[a-zA-Z]{3,4}[0-9]{3,4}$/]'
		),

		array(
			'field' => 'pro_prix',
			'label' => 'prix',
			'rules' => 'required|min_length[1]|max_length[7]|decimal|trim|regex_match[/^[0-9]{1,7}\.[0-9]{2}$/]'
		),

		array(
			'field' => 'pro_stock',
			'label' => 'stock',
			'rules' => 'required|min_length[1]|max_length[3]|alpha_numeric|integer|trim'
		),

		array(
			'field' => 'pro_desc',
			'label' => 'description',
			'rules' => 'required|min_length[8]|max_length[999]|trim|regex_match[/^[a-zA-Z0-9][^#<>-]{8,999}$/]'
		)
	),

	'update' => array(
		
		array(
			'field' => 'pro_lib',
			'label' => 'libelle',
			'rules' => 'required|min_length[1]|max_length[255]|trim|regex_match[/^[a-zA-Z0-9]+(?:\s[a-zA-Z0-9]+)*$/]'
		),

		array(
			'field' => 'pro_ref',
			'label' => 'référence',
			'rules' => 'required|min_length[3]|max_length[8]|trim|is_unique[produits.PRO_REF]|regex_match[/^[a-zA-Z]{3,4}[0-9]{3,4}$/]'
		),

		array(
			'field' => 'pro_prix',
			'label' => 'prix',
			'rules' => 'required|min_length[1]|max_length[7]|decimal|trim|regex_match[/^[0-9]{1,7}\.[0-9]{2}$/]'
		),

		array(
			'field' => 'pro_stock',
			'label' => 'stock',
			'rules' => 'required|min_length[1]|max_length[3]|alpha_numeric|integer|trim'
		),

		array(
			'field' => 'pro_desc',
			'label' => 'description',
			'rules' => 'required|min_length[8]|max_length[999]|trim|regex_match[/^[a-zA-Z0-9][^#<>-]{8,999}$/]'
		)
	)

	

);