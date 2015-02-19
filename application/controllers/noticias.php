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
				$noticia = array(
					'titulo'=> $this->input->post('titulo'),
					'contenido'=> $this->input->post('contenido'),
					'fecha'=> $this->input->post('fecha')
				);

				if ($this->noticiasmodel->insertar_noticias($noticia)) {
					$respuesta = array('exito' => TRUE, 'mensaje'=> 'Se inserto la noticia con exito.');
				}else{
					$respuesta = array('exito' => FALSE, 'mensaje'=> 'Error, no se inserto.');
				}

				$this->output->set_content_type('json')->set_output(json_encode($respuesta));
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