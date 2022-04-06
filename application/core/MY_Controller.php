<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

  public function __construct()
	{
		parent::__construct();

	}

    function layout($content, $data = NULL){

        $data['content'] = $this->load->view($content, $data, TRUE);

        $this->load->view('templates/layout', $data);
    }

}
