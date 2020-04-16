<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
 *  sert a instancier la vue de base
 *	
 *	@param{nomDeLaPage} 
*/

class Path extends CI_Controller {

	public function view($page = 'accueil') {
    	if(!file_exists(APPPATH.'views/'.$page.'.php')) {
    		show_404();
    	}


    	$this->load->view('layouts/header')
    			   ->view($page)
    			   ->view('layouts/footer');
  	}


  
}