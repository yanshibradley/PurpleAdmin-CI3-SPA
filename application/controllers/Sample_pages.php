<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample_pages extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		show_404();
	}

	public function blank_page()
	{
		$this->layout('pages/sample_pages/blank_page');
	}

	public function login()
	{

		if (!$this->input->is_ajax_request()){
			$data = array('full_screen' => true);
		}

		$this->load->view('pages/sample_pages/login', @$data);

	}

	public function register()
	{

		if (!$this->input->is_ajax_request()){
			$data = array('full_screen' => true);
		}

		$this->load->view('pages/sample_pages/register', @$data);

	}

	public function error_404()
	{

		if (!$this->input->is_ajax_request()){
			$data = array('full_screen' => true);
		}

		$this->load->view('pages/sample_pages/error_404', @$data);

	}

	public function error_500()
	{

		if (!$this->input->is_ajax_request()){
			$data = array('full_screen' => true);
		}

		$this->load->view('pages/sample_pages/error_500', @$data);

	}
}
