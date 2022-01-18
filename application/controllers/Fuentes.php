<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fuentes extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
	}
	
	public function index() {
		$this -> load -> view('common/head');
		$this -> load -> view('common/nav');
		$this -> load -> view('fuentes');
		$this -> load -> view('common/footer');
	}
}
