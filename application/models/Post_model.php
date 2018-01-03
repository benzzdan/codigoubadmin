<?php
class Post_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

 

    public function get_posts($slug = FALSE ){
        if($slug === FALSE){
            $this->db->order_by('proyectos.id', 'DESC');
            //here we are joining the tables with the id so we can access the methods of categorias 'name'
            //$this->db->join('categorias', 'categorias.id = proyectos.categoria_id');
            $query = $this->db->get('proyectos');
            return $query->result_array();
        }

        $query = $this->db->get_where('proyectos', array('slug' => $slug));

        return $query->row_array();
    }


    public function get_posts_by_limit(){

        $this->db->limit(5);
        $this->db->order_by('proyectos.id', 'DESC');
        //here we are joining the tables with the id so we can access the methods of categorias 'name'
        //$this->db->join('categorias', 'categorias.id = proyectos.categoria_id');
        $query = $this->db->get('proyectos');
        return $query->result_array();
    }



    public function get_proyectos_by_cat_limit($categoria_id){
        $this->db->limit(5);
        $this->db->order_by('proyectos.id', 'DESC');
        // $this->db->join('categorias', 'categorias.id = 
        // proyectos.categoria_id');
        $query = $this->db->get_where('proyectos', array(
            'categoria_id' => $categoria_id
        ));
        return $query->result_array();
    }

    public function get_admin_posts(){
            $this->db->order_by('proyectos.id', 'DESC');
            $query = $this->db->get('proyectos');
            return $query->result_array();
   
    }

    
    



    public function create_post(){
        $slug = url_title($this->input->post('titulo')); 

        $data = array(
            'titulo' => $this->input->post('titulo'),
            'slug' => $slug,
            'descripcion' => $this->input->post('descripcion'),
            'categoria_id' => $this->input->post('categoria_id')
        );

         $this->db->insert('proyectos', $data);

         $query = $this->db->get_where('proyectos', array('slug' => $slug));
         return $query->row_array();
    }

    public function delete_post($id){
        $this->db->where('id', $id);
        $this->db->delete('proyectos');
        return true;
    }


    public function update_post(){
        //gets the data from the submitted form
        $slug = url_title($this->input->post('titulo')); 

        $data = array(
            'titulo' => $this->input->post('titulo'),
            'slug' => $slug,
            'descripcion' => $this->input->post('descripcion'),
            'categoria_id' => $this->input->post('categoria_id')
        );


        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('proyectos', $data);
    }

//returns the categories as an array
    public function get_cats(){
        $this->db->order_by('nombre');
       $query =  $this->db->get('categorias');
        return $query->result_array();
    }


    public function get_proyectos_by_cat($categoria_id){
        $this->db->order_by('proyectos.id', 'DESC');
        // $this->db->join('categorias', 'categorias.id = 
        // proyectos.categoria_id');
        $query = $this->db->get_where('proyectos', array(
            'categoria_id' => $categoria_id
        ));
        return $query->result_array();
    }



    public function create_record(){

        $data = array(
            'titulo' => null,
            'slug' => null,
            'descripcion' => null,
            'categoria_id' => null
        );

        $query = $this->db->insert('proyectos', $data);
        $this->db->order_by('proyectos.id', 'DESC');        
        $query = $this->db->get_where('proyectos', array('titulo' => null));
        $data =  $query->row_array();

        return $data['id'];
        

    }


    public function get_posts_by_id($id){

        $query = $this->db->get_where('proyectos', array('id' => $id));

        return $query->row_array();
    }









}