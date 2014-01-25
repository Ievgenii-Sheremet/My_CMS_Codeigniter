<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Control_panel extends CI_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->library('ion_auth');
        $this->load->helper('url');
        $this->lang->load('auth');
		$this->load->helper('language');
    }
    public function index(){
        if (!$this->ion_auth->logged_in())
            redirect('adminpanel/login', 'refresh');
            if(!$this->ion_auth->is_admin())
                redirect('adminpanel/login', 'refresh');
        $user_logged = $this->ion_auth->user()->row();
        $this->data['user_edit_link'] = array('adminpanel', 'edit_user', $user_logged->id);
        $this->data['title'] = 'Control Panel';
        $this->load->view('adminpanel/head', $this->data);
        $this->load->view('adminpanel/top_menu', $this->data);
        $this->load->view('adminpanel/default_view/view_main', $this->data);
        $this->load->view('adminpanel/footer', $this->data);
    }
}
