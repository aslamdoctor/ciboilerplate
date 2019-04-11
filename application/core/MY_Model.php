<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MY_Model extends CI_Model{
    public $tablename;
    public $id_field;
    function __construct(){
        
    }
	
	// get table name
    function get_table(){
        $table = $this->tablename;
        return $table;
    }
	
	// get all records
    function get($order_by, $order, $keyword=""){
        $table = $this->get_table();
		$this->db->order_by($order_by, $order);
		
		$query=$this->db->get($table);

        return $query;
    }
	
	// get all records with limit and offset
    function get_with_limit($limit, $offset, $order_by, $order){
        $table = $this->get_table();
        $this->db->limit($limit, $offset);
        $this->db->order_by($order_by, $order);
        $query=$this->db->get($table);
        return $query;
    }
	
	// get single record from id
    function get_where($id){
        $table = $this->get_table();
        $this->db->where($this->id_field, $id);
        $query=$this->db->get($table);
        return $query;
    }
	
	// get records from specific field value
    function get_where_custom($col, $value){
        $table = $this->get_table();
        $this->db->where($col, $value);
        $query=$this->db->get($table);
        return $query;
    }
	
	// insert record
    function _insert($data){
        $table = $this->get_table();
		$this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
    }
	
	// update record
    function _update($id, $data){
        $table = $this->get_table();
        $this->db->where($this->id_field, $id);
		$this->db->update($table, $data);
		return $this->db->affected_rows();
    }
	
	// delete record
    function _delete($id){
        $table = $this->get_table();
        $this->db->where($this->id_field, $id);
		$this->db->delete($table);
		return $this->db->affected_rows();
    }
	
	// Get max id from table
	function get_max(){
        $table = $this->get_table();
        $this->db->select_max($this->id_field);
        $query = $this->db->get($table);
        $row=$query->row();
        $id=$row->{$this->id_field};
        return $id;
    }
	
	// Run custom query
    function _custom_query($mysql_query, $args = array()){
        $query = $this->db->query($mysql_query, $args);
        return $query;
	}
}