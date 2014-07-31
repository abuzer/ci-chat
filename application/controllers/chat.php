<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class chat extends CI_Controller {

	function __construct(){
        parent::__construct();

       @session_start();

    }
	public function index()
	{			

        $this->load->library('ci_chat');

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */