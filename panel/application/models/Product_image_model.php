<?php 

//  Veri tabanından kayıt getir gibi şeyler burdan yapılacak
class Product_image_model extends CI_Model{

	/* products tablo ismi */
	public $tableName = "product_images";

	public function __construct(){
		parent::__construct();
	}

	public function get($where = array()){
		return $this->db->where($where)->get($this->tableName)->row();
		/* sadece bir kayıt getirmesi için row() yazdık.*/
	}

	// Tüm kayıtları getirir
	public function get_all($where = array(), $order = "id ASC"){
		return $this->db->where($where)->order_by($order)->get($this->tableName)->result();

	}

	public function add($data = array()){

		return $this->db->insert($this->tableName,$data);
	}

	public function update($where=array(), $data = array()){

		return $this->db->where($where)->update($this->tableName,$data);
	}

	public function delete($where=array()){
		return $this->db->where($where)->delete($this->tableName);
	}



}

?>