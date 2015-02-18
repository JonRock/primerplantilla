<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NoticiasModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function obtener_noticias($id=NULL)
	{
		//Validación para saber si obtendremos las noticias o solo una
		if (empty($id)) {
			$todas_noticias = $this->db->get('noticias');
			return $todas_noticias->result_array();
		}else{

		}

	}
	public function insertar_noticias($value='')
	{
		# code...
	}

}

/* End of file noticiasModel.php */
/* Location: ./application/models/noticiasModel.php */