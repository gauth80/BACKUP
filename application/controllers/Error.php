<?php

	/**
	 * Ctrl Error 404
	 */
	class Error extends CI_Controller {
		function error404() {



			$this->load->view('layouts/header')
					   ->view('errors/error404')
					   ->view('layouts/footer');
		}
	}