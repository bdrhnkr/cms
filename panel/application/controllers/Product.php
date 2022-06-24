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

		$this->load->model("product_model");


	}

	public function index()
	{
		// tablodan verilerin getirilmesi
		$items = $this->product_model->get_all();

		$viewData = new stdClass();

		$viewData->viewFolder = $this->viewFolder;
		// Bu kod ile product-v 'yi viewfolder olarak product-v/list/index.php'ye gönderdik
		$viewData->subViewFolder = "list";
		$viewData->items= $items;



		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index.php", $viewData);
	}


	// Yeni ürün ekleme formu
	public function new_form(){


		$viewData = new stdClass();
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "add";

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
	}

	public function save(){

		echo "saved";
	}
}
