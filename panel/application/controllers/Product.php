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

		$this->load->library("form_validation");

		// Kurallar yazılır 
		$this->form_validation->set_rules("title","Başlık","required|trim");

		$this->form_validation->set_message(
			array(
				"required" => "<b>'{field}'</b> alanı doldurulmalıdır"
			)
		);
		// field placeholder ı temsil eder

		// form validation çalışır
		// 	TRUE YADA FALSE DÖNER
		// Trueysa üstteki koddaki kurallardan başarılı şekilde geçmiştir.
		$validate = $this->form_validation->run();



		if ($validate) {
			$insert = $this->product_model->add(array(
				"title" => $this->input->post("title"),
				"description" => $this->input->post("description"),
				"url" => "test..",
				"isActive" => 1,
				"createdAt" => date("Y-m-d H:i:s")
			)
		);
			if ($insert) {
				echo "kayıt işlemi başarılı";
			}else{
				echo "islem basarısızdır.";
			}
		}else{ 
			$viewData = new stdClass();
			$viewData->viewFolder = $this->viewFolder;
			$viewData->subViewFolder = "add";
			$viewData->form_error = true;

			$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
		}

		// basarılı ise -> kayıt yapılır
		// basarısız ise -> hata ekranda gösterilir

	}
}
