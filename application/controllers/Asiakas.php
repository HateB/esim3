<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('asiakas_model');
	}

	public function listaa()
	{
		//$this->load->model('asiakas_model');
		$data['asiakkaat']=$this->asiakas_model->getAsiakas();
		$data['sivun_sisalto']='asiakas/listaa';
		$this->load->view('menu/sisalto',$data);
	}

	public function lisaa()
	{
		$btn=$this->input->post('btnTallenna');
		$lisaa_asiakas=array(
			"etunimi"=>$this->input->post('en'),
			"sukunimi"=>$this->input->post('sn'),
			"email"=>$this->input->post('em')
			);
		//$this->load->model('asiakas_model');
		if(isset($btn))
		{
			$lisays=$this->asiakas_model->addAsiakas($lisaa_asiakas);
			if($lisays>0)
			{
				echo '<script>alert("Lisäys onnistui")</script>';
			}
		}
		$data['sivun_sisalto']='asiakas/lisaa';
		$this->load->view('menu/sisalto',$data);
	}

	public function nayta_poistettavat()
	{
		//$this->load->model('asiakas_model');
		$data['asiakkaat']=$this->asiakas_model->getAsiakas();
		$data['sivun_sisalto']='asiakas/poista';
		$this->load->view('menu/sisalto',$data);
	}

	public function poista($id)
	{
		//$this->load->model('asiakas_model');
		$poista=$this->asiakas_model->delAsiakas($id);
		if($poista>0)
		{
			echo '<script>alert("Poisto onnistui")</script>';
		}
		$data['asiakkaat']=$this->asiakas_model->getAsiakas();
		$data['sivun_sisalto']='asiakas/listaa';
		$this->load->view('menu/sisalto',$data);
	}

	public function etsi_tilaus()
	{
		$id=$this->input->post('valittu_id');
		$btn=$this->input->post('btnEtsi');

		$this->load->model('tilaus_model');
		$this->load->model('asiakas_model');
		$data['asiakkaat']=$this->asiakas_model->getAsiakas();

		if(isset($btn))
		{
			$data['tilaus']=$this->tilaus_model->searchTilaus($id);
		}

		$data['sivun_sisalto']='asiakas/etsi_tilaus';
		$this->load->view('menu/sisalto',$data);
	}
	public function naytaMuokattavaAsiakas($id)
	{
		$data['asiakas']=$this->asiakas_model->getValittuAsiakas($id);
		$data['sivun_sisalto']='asiakas/naytaMuokattavaAsiakas';
		$this->load->view('menu/sisalto',$data);
	}

	public function paivita_asiakas()
	{
		$btn=$this->input->post('btnTallenna');
		if(isset($btn))
		{
			$uusiData=array(
			'etunimi'=>$this->input->post('en'),
			'sukunimi'=>$this->input->post('sn'),
			'email'=>$this->input->post('em')
			);

			$id=$this->input->post('id');
			$testi=$this->asiakas_model->updateValittuAsiakas($uusiData,$id);
			if ($testi>0)
			{
				echo '<script>alert("Päivitys onnistui")</script>';

			}
			else
			{
				echo '<script>alert("Päivitys epäonnistui")</script>';
			}
		}
	}

	public function nayta_muokattavat_asiakkaat()
	{
		$data['asiakkaat']=$this->asiakas_model->getAsiakas();
		$data['sivun_sisalto']='asiakas/nayta_muokattavat_asiakkaat';
		$this->load->view('menu/sisalto',$data);
	}

	public function muokkaa_asiakkaat()
	{
		$btn=$this->input->post('btnTallenna');
		if(isset($btn))
		{
			$id=$this->input->post('id');
			$enimi=$this->input->post('en');
			$snimi=$this->input->post('sn');
			$email=$this->input->post('em');
			$lkm=0;
			foreach($id as $rivi)
			{
				$lkm++;
			}

			for($x=0; $x<$lkm; $x++)
			{
				$paivita_asiakas=array(
					"etunimi"=>$enimi[$x],
					"sukunimi"=>$enimi[$x],
					"email"=>$email[$x]
					);
				$testi=$this->asiakas_model->updateValittuAsiakas($paivita_asiakas,$id[$x]);
			}
			$this->listaa();
		}
	

	}
}