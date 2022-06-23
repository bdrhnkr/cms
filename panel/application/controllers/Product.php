<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	// codeigniter Bu classı bi controller olarak görmesi gerekiyo bu yüzden class çağırıyoruz 

	public $viewFolder = "";

// Bu class her çağırıldığında ortal olarak yüklenmesini istediğimiz tüm aksiyonlar construct fonksiyonuna tanımlanır.
	public function __construct(){

		parent::__construct();
		$this->viewFolder = "product-v";
		//ekleme düzenklme vs. herşey bunun içinde olucak

	}

	public function index()
	{

		$viewData = new stdClass();
		$viewData->viewFolder = $this->viewFolder;
		// Bu kod ile product-v 'yi viewfolder olarak product-v/list/index.php'ye gönderdik
		$viewData->subViewFolder = "list";

		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index.php", $viewData);
	}
}
