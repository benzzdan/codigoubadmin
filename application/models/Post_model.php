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
        $title = $this->input->post('titulo');

        $data = array(
            'titulo' => iconv('UTF-8','ASCII//TRANSLIT',$title),
            'slug' => $slug,
            'descripcion' => $this->input->post('descripcion'),
            'categoria_id' => $this->input->post('categoria_id')
        );

        print_r($data['titulo']);
        die();

         $this->db->insert('proyectos', $data);

         $query = $this->db->get_where('proyectos', array('slug' => $slug));
         return $query->row_array();
    }

    public function delete_post($id){
        $this->db->where('id', $id);
        $this->db->delete('proyectos');
        return true;
    }

    public function normalizeString($string){

        $normalizeChars = array(
            'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
            'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I',
            'Ï'=>'I', 'Ñ'=>'N', 'Ń'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U',
            'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
            'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
            'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ń'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
            'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f',
            'ă'=>'a', 'î'=>'i', 'â'=>'a', 'ș'=>'s', 'ț'=>'t', 'Ă'=>'A', 'Î'=>'I', 'Â'=>'A', 'Ș'=>'S', 'Ț'=>'T',
        );

        return  strtr($string, $normalizeChars);

    }



    public function update_post(){
        //gets the data from the submitted form
        $slug = url_title($this->input->post('titulo')); 
        $title = $this->input->post('titulo');

        $data = array(
            'titulo' => $title,
            'slug' => $this->normalizeString($slug),
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