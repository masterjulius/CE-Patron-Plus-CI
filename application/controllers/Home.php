<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions', 'encryption') );
		$this->load->helper( array( 'url', 'html', 'form' ) );
	}

	public function index() {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			redirect('/administrator/');
		} else {

			$data['page_title'] = 'CE Patron Plus &mdash; User Sign In';
			$this->load->view('header', $data);
			$this->load->view('Login_view');
			$this->load->view('footer');

		}

	}

}