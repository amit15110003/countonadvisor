<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->database();
		$this->load->model('user');

	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}



	public function Mutualfunds()
	{
		$this->load->view('header');
		$this->load->view('Mutualfunds');
		$this->load->view('footer');
	}
	public function AboutSIP()
	{
		$this->load->view('header');
		$this->load->view('AboutSIP');
		$this->load->view('footer');
	}
	public function CurrentNFO()
	{
		$this->load->view('header');
		$this->load->view('CurrentNFO');
		$this->load->view('footer');
	}
	public function DividendAnnounced()
	{
		$this->load->view('header');
		$this->load->view('DividendAnnounced');
		$this->load->view('footer');
	}
	public function LifeInsurance()
	{
		$this->load->view('header');
		$this->load->view('LifeInsurance');
		$this->load->view('footer');
	}
	public function HealthInsurance()
	{
		$this->load->view('header');
		$this->load->view('HealthInsurance');
		$this->load->view('footer');
	}
	public function TaxPlanning()
	{
		$this->load->view('header');
		$this->load->view('TaxPlanning');
		$this->load->view('footer');
	}
	public function TaxDeduction()
	{
		$this->load->view('header');
		$this->load->view('TaxDeduction');
		$this->load->view('footer');
	}
	public function NRIServices()
	{
		$this->load->view('header');
		$this->load->view('NRIServices');
		$this->load->view('footer');
	}
	public function DocumentsRequired()
	{
		$this->load->view('header');
		$this->load->view('DocumentsRequired');
		$this->load->view('footer');
	}
	public function Disclaimer()
	{
		$this->load->view('header');
		$this->load->view('Disclaimer');
		$this->load->view('footer');
	}
	public function Disclosure()
	{
		$this->load->view('header');
		$this->load->view('Disclosure');
		$this->load->view('footer');
	}
	public function PrivacyPolicy()
	{
		$this->load->view('header');
		$this->load->view('PrivacyPolicy');
		$this->load->view('footer');
	}
}
