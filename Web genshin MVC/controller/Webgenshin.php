<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Webgenshin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('index');
		$this->load->view('home');

	}
	public function spek(){
 		$this->load->view('index');
 		$this->load->view('spek');

 	}
 	public function about(){
 		$this->load->view('index');
 		$this->load->view('about');

 	}
 	public function contact(){
 		$this->load->view('index');
 		$this->load->view('contact');

 	}
 	public function login(){
 		$this->load->view('index');
 		$this->load->view('login');

 	}
}