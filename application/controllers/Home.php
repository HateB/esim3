<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
	{

	public function index() 
	{
		echo "Tämä on Home-controllerin index-funktio";
	}

	public function toka()
	{
		echo "Tämä on Home-controllerin toka-funktio";
	}

	public function kolmas() 
	{
		$data['nimet']=array(
		array("en"=>'Jussi',"sn"=>'Virta'),
		array("en"=>'Matti',"sn"=>'Meikäläinen'),
		array("en"=>'Maija',"sn"=>'Meikäläinen')
		);
		$data['user']="Janne";
		$data['vuosi']=2016;

		$this->load->view('Home/kolmas',$data);
	}
	public function neljas()
	{
		$this->load->model('home_model');
		$data['sisalto']=$this->home_model->getNames();
		$this->load->view('Home/neljas',$data);
	}
}
