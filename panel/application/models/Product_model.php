<?php 

//  Veri tabanından kayıt getir gibi şeyler burdan yapılacak
class Product_model extends CI_Model{

	/* products tablo ismi */
	public $tableName = "products";

	public function __construct(){
		parent::__construct();
	}

	// Tüm kayıtları getirir
	public function get_all(){
		return $this->db->get($this->tableName)->result();

	}

	public function add($data = array()){

		return $this->db->insert($this->tableName,$data);
	}

}

?>