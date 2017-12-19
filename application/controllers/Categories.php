<?php
    class Categories extends CI_Controller {
        public function index(){
            $data['titulo'] = 'Categorias';
            
            $data['categorias'] = $this->category_model->get_cats();
            $data['msg'] = $this->session->flashdata('msg');


            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('categories/index', $data);
            $this->load->view('templates/footer');   
        }

        public function create(){
            $data['titulo'] = 'Crear Categoria';   
            $data['categorias'] = $this->category_model->get_cats();
            
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');


            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/admin/header', $data);
                $this->load->view('categories/create', $data);
                $this->load->view('templates/admin/footer');
            }else{
                $this->category_model->create_category();
                $this->session->set_flashdata('cat_add', 'Haz agregado una categoria');                
                redirect('admin/dashboard');
            }
        }

        public function proyectos($category_id) {
            $data['titulo'] = $this->category_model->get_category($category_id)->nombre;
            $data['msg'] = $this->session->flashdata('msg');            
            //get the post by category id
            $data['posts'] = $this->post_model->get_proyectos_by_cat($category_id);
    
            $data['categorias'] = $this->category_model->get_cats();
            

            $this->load->view('templates/admin/header', $data);
            $this->load->view('posts/index', $data);
            $this->load->view('templates/admin/footer');  

        }


        public function borrar($id){
            $this->category_model->delete_cat($id);
            $this->session->set_flashdata('del_cat', 'Categoria Borrada');            
            redirect('admin/dashboard');
        }
    }

?>
