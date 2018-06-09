<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index(){
		$data = [
			'title' => 'PT Nentindo Mediatama Perkasa',
			'isi'		=> 'front/home'
		];
		$this->load->view('layout/wrapper',$data);
	}
	public function about(){
		$data = [
			'title' => 'About - PT Nentindo Mediatama Perkasa',
			'isi'		=> 'front/about'
		];
		$this->load->view('layout/wrapper',$data);
	}
	public function features(){
		$data = [
			'title' => 'Features - PT Nentindo Mediatama Perkasa',
			'isi'		=> 'front/features'
		];
		$this->load->view('layout/wrapper',$data);
	}
	public function hardware(){
		$data = [
			'title' => 'Hardware - PT Nentindo Mediatama Perkasa',
			'isi'		=> 'front/hardware'
		];
		$this->load->view('layout/wrapper',$data);
	}
	public function support(){
		$data = [
			'title' => 'Support - PT Nentindo Mediatama Perkasa',
			'isi'		=> 'front/support'
		];
		$this->load->view('layout/wrapper',$data);
	}
}
