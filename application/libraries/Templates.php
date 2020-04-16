<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates
{
	private $_CI;
	
	public function __construct()
	{
	    $this->_CI =& get_instance();
	} // __construct()
	
	/* ------------------------------------------------------------------------
	 * display()
	 * 
	 * Assemble les différents blocs (parties) de la vue standard 
	 * 
	 * Pour ne pas afficher l'un des blocs, passer le tableau 
	 * $tNotDisplay contenant le nom du/des blocs à ne pas afficher   
	 * 
	 * @param string $sViewName nom de la vue du contenu principal à afficher
	 * @param array $aView tableau des variables à passer à la vue 
	 * @param array $aNotDisplay tableau (facultatif) de morceaux de vue à ne pas afficher
	 * 
	 * // @return object $this inutile ??? 
	 * ------------------------------------------------------------------------ */
	public function display($sViewName, $aView = array(), $aNotDisplay = array())
	{
		// /!\ Les blocs de vue doivent etre dans l'ordre de leur affichage 
		$aDefaultDisplay = array('layouts/header', $sViewName, 'layouts/footer');
		
		/* Si le tableau aNotDisplay n'est pas vide, on supprime du tableau 
		* $aDefaultDisplay les parties de vue à ne pas afficher   
		*/
		if (!empty($aNotDisplay)) 
		{
			foreach ($aNotDisplay as $iKey => $sItem)  
			{
				unset($aDefaultDisplay[$sItem]);
			}	
		}
				
		foreach ($aDefaultDisplay as $sKey => $sItem) 
		{
			if ($sKey != 'sViewName') 
			{			
			    $sItem = $sItem;
			}
							
			$this->_CI->load->view($sItem, $aView);
		}
				
		// return $this;
		
	} // -- display()	
} // -- classe