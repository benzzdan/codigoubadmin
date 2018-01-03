<?php
    class Pages extends CI_Controller {
        public function view($page='home'){
            if(!file_exists(APPPATH . 'views/pages/' . $page. '.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);
            $data['categorias'] = $this->post_model->get_cats();
            //todos los proyectos
            $data['posts'] = $this->post_model->get_posts_by_limit();


            $this->load->view('templates/header');
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer');

        }



        public function proyectos_by_cat_limit($cat_id){
                  
                    
            $data['posts'] = $this->post_model->get_proyectos_by_cat_limit($cat_id);
            $data['categorias'] = $this->post_model->get_cats();
            $this->load->view('templates/proyectos_even', $data);
        }

        public function proyectos_all(){
        
            $data['posts'] = $this->post_model->get_posts_by_limit();
            $data['categorias'] = $this->post_model->get_cats();
            $this->load->view('templates/proyectos_even', $data);
        }


        public function firma(){
            
            $this->load->view('templates/header');
            $this->load->view('pages/nuestrafirma');
            $this->load->view('templates/footer');
            
        }
        public function servicios(){
            
            $this->load->view('templates/header');
            $this->load->view('pages/servicios');
            $this->load->view('templates/footer');
            
        }

      



    }