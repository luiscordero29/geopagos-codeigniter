<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->form_validation->set_rules('surface', 'Superficie', 'numeric',
            array('numeric' => 'Ingresa un Número en el campo %s.')
        );
        $this->form_validation->set_rules('base', 'Base', 'numeric',
            array('numeric' => 'Ingresa un Número en el campo %s.')
        );
        $this->form_validation->set_rules('height', 'Altura', 'numeric',
            array('numeric' => 'Ingresa un Número en el campo %s.')
        );
        $this->form_validation->set_rules('diameter', 'Diametro', 'numeric',
            array('numeric' => 'Ingresa un Número en el campo %s.')
        );
        $this->form_validation->set_rules('shape', 'Figura', 'required',
            array('required' => 'El campo %s, es requerido')
        );
        if ($this->form_validation->run() == FALSE){
            $this->load->view('home/form');
        }else{
        	$data['shape'] = $this->Factory_model->shape();
            $this->load->view('home/view',$data);
        }
	}
	
}
