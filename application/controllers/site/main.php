<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index(){
		$this->load->view('site/head');
        $this->load->view('site/default_view/view_main');
        $this->load->view('site/footer');
	}
}

?>
