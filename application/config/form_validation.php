<?php

defined('BASEPATH') or exit('No direct script access allowed');

$config = array(

	 'update' => array(
		array(
			'field' => 'pro_lib',
			'label' => 'libelle',
			'rules' => 'required|min_length[1]|max_length[50]|trim|regex_match[/^[a-zA-Z0-9]+(?:\s[a-zA-Z0-9]+)*$/]'
		),

		array(
			'field' => 'pro_ref',
			'label' => 'référence',
			'rules' => 'required|min_length[3]|max_length[7]|trim|is_unique[produits.PRO_REF]|regex_match[/^[a-zA-Z]{3,4}[0-9]{3,4}$/]'
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

	), 'create' => array(
		array(
			//rex_slugify
			'field' => 'pro_lib',
			'label' => 'libelle',
			'rules' => 'required|min_length[1]|max_length[50]|trim|regex_match[/^[a-zA-Z0-9]+(?:\s[a-zA-Z0-9]+)*$/]'
		),

		array(
			'field' => 'pro_ref',
			'label' => 'référence',
			'rules' => 'required|min_length[3]|max_length[7]|trim|is_unique[produits.PRO_REF]|regex_match[/^[a-zA-Z]{3,4}[0-9]{3,4}$/]'
		),

		array(
			'field' => 'pro_prix',
			'label' => 'prix',
			'rules' => 'required|min_length[1]|max_length[7]|decimal|trim|regex_match[/^[0-9]{1,7}\.[0-9]{2}$/]'
		),

		array(
			//pas besoin de rx, integer fais le taf
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