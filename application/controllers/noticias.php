<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('noticiasmodel');
	}

	public function ver()
	{
				$data['tittle'] = "Bienvenido | Noticias";
				$data['noticias'] = $this->noticiasmodel->obtener_noticias();
				$this->load->view("/templates/head", $data);
				$this->load->view("/templates/header");
				$this->load->view("/templates/sidebar");
				$this->load->view("/noticias/catalogo",$data);
				$this->load->view("/templates/quick-sidebar");
				$this->load->view("/templates/footer");
	}
	public function crear($accion = 'formulario')
	{
		# code...
		switch ($accion) {
			case 'formulario':
				$data['tittle'] = "Bienvenido | Noticias";

				$this->load->view("/templates/head", $data);
				$this->load->view("/templates/header");
				$this->load->view("/templates/sidebar");
				$this->load->view("/noticias/formulario");
				$this->load->view("/templates/quick-sidebar");
				$this->load->view("/templates/footer");
				# code...
				break;
			case 'insertar':
			echo "entre a insertar";
				break;

			default:
				# code...
				show_404();
				break;
		}
	}

}

/* End of file noticias.php */
/* Location: ./application/controllers/noticias.php */