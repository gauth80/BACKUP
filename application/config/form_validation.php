<?php

/*
*	spec perso

*	Produits/create/update
*	<imp>	# -- passe, a rectifiez
*	Info:

*	Chaque tableau multidimentionel est associer a un path, ce path c'est controller/method référent aux class est charger 	
	automatiquement, il peut être charger aussi avec un nom et etre appelée dans n'importe quelles form(cas présent)
*	Une librairy externe a CI a étais installé au début(ci french), elle traduits chaques erreurs de champs en français, inutile 
	d'utiliser Set_message('')

*	Ce bordel harmonieux compprend aussi les regex et les fonctions, bah en faite c'est une page php quoi..

*	PS: Si cela rentre en conflit avec vos pages (deja tester mais bon ont ces jamais) effacer a souhait.

*	Quizz de la bonne humeur: Il y as une énorme érreurs de logique ^^ à trouver (gain: +15 en sagesse)

*/

defined('BASEPATH') or exit('No direct script access allowed');

$config = array(

	 'update' => array(
		array(
			'field' => 'pro_lib',
			'label' => 'libelle',
			'rules' => 'required|min_length[3]|max_length[50]|alpha_numeric_spaces|trim'
		),

		array(
			'field' => 'pro_ref',
			'label' => 'référence',
			'rules' => 'required|min_length[3]|max_length[7]|alpha_numeric_spaces|trim|is_unique[produits.PRO_REF]'
		),

		array(
			'field' => 'pro_prix',
			'label' => 'prix',
			'rules' => 'required|min_length[1]|max_length[7]|decimal|trim'
		),

		array(
			'field' => 'pro_stock',
			'label' => 'stock',
			'rules' => 'required|min_length[1]|max_length[3]|alpha_numeric|integer|trim'
		),

		array(
			'field' => 'pro_desc',
			'label' => 'description',
			'rules' => 'required|min_length[8]|max_length[999]|alpha_numeric_spaces|trim'
		)

	), 'create' => array(
		array(
			'field' => 'pro_lib',
			'label' => 'libelle',
			'rules' => 'required|min_length[3]|max_length[50]|alpha_numeric_spaces|trim'
		),

		array(
			'field' => 'pro_ref',
			'label' => 'référence',
			'rules' => 'required|min_length[3]|max_length[7]|alpha_numeric_spaces|trim|is_unique[produits.PRO_REF]'
		),

		array(
			'field' => 'pro_prix',
			'label' => 'prix',
			'rules' => 'required|min_length[1]|max_length[7]|decimal|trim'
		),

		array(
			'field' => 'pro_stock',
			'label' => 'stock',
			'rules' => 'required|min_length[1]|max_length[3]|alpha_numeric|integer|trim'
		),

		array(
			'field' => 'pro_desc',
			'label' => 'description',
			'rules' => 'required|min_length[8]|max_length[999]|alpha_numeric_spaces|trim'
		)
	)


);