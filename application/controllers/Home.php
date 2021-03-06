<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Author: Alef Richard
* 2016
*/
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categorias_model', 'modelcategorias');
		$this->categorias = $this->modelcategorias->listar_categorias();
	}

	public function index()
	{
		$data_header['categorias'] = $this->categorias;
		$this->load->view('html-header');
		$this->load->view('header',$data_header);
		$this->load->view('home');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

}