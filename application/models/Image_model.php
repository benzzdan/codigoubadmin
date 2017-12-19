<?php 
    class Image_model extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        public function getid($name) {
            $this->db->get_where('nombre', $name);
            $img = $this->db->get('img_proyectos');
            return $img;
        }

        public function getImages($id) {
            // $this->db->join('img_proyectos', 'img_proyectos.id_proyecto = proyectos.id');
            // $query = $this->db->get('img_proyectos');
            // return $query->result_array();

            $query = $this->db->get_where('img_proyectos', array('id_proyecto' => $id));
            return $query->result_array();
            
        }

        public function del_img($file_name){
            $this->db->where('nombre', $file_name);
            $this->db->delete('img_proyectos');
            return true;
        }
    
    }