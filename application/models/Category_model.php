<?php 
    class Category_model extends CI_Model {

        public function __construct(){
            $this->load->database();
        }

        public function get_cats(){
            $this->db->order_by('nombre');
           $query =  $this->db->get('categorias');
            return $query->result_array();
        }

        public function get_cat($id){
            $query = $this->db->get_where('categorias', array("id" => $id));
            $result = $query->row();
            return $result;
        }

        public function get_category($id){
            $query = $this->db->get_where('categorias', array('id' => $id));
            return $query->row();
        }

        public function create_category(){
            $data['nombre'] = $this->input->post('nombre');
            return $this->db->insert('categorias', $data);
        }

        public function delete_cat($id){
            $this->db->where('id', $id);
            $this->db->delete('categorias');
            return true;
        }
    
    }

?>