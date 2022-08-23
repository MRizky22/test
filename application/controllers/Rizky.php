<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rizky extends CI_Controller {

	 
	function  __construct(){
		parent::__construct();
	}
	function index()
	{
		$data['judul'] = "Index";
		$this->load->view('view_header',$data);
		$this->load->view('view_start',$data);
		$this->load->view('view_footer',$data);

		$this->load->view('welcome');
	}
}
