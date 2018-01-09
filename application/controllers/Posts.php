<?php
    class Posts extends CI_Controller {


        public function index(){



                    $data['titulo'] = 'Proyectos';
                    
                    $data['posts'] = $this->post_model->get_posts();
                    $data['msg'] = $this->session->flashdata('msg');

                  
                    $this->load->view('templates/header');
                    $this->load->view('posts/index', $data);
                    $this->load->view('templates/footer');

                }

        public function proyectos(){

                    
                        $data['posts'] = $this->post_model->get_posts();
                        $data['categorias'] = $this->post_model->get_cats();

                        $this->load->view('templates/header');
                        $this->load->view('posts/proyectos', $data);
                        $this->load->view('templates/footer');

                }

                public function proyectos_by_cat($cat_id){
                  
                    
                    $data['posts'] = $this->post_model->get_proyectos_by_cat($cat_id);
                    $data['categorias'] = $this->post_model->get_cats();
                    $this->load->view('templates/proyectos_even', $data);
                }
                public function proyectos_all(){
                
                    $data['posts'] = $this->post_model->get_posts();
                    $data['categorias'] = $this->post_model->get_cats();
                    $this->load->view('templates/proyectos_even', $data);
                }




        public function view($slug = NULL) {
            //gets the post with the slug
            $data['post'] = $this->post_model->get_posts($slug);

            //if the post is not found show 404
            if(empty($data['post'])) {
                show_404();
            }

            $data['title'] = $data['post']['titulo'];

            //get the images and load them 

            $data['images'] = $this->image_model->getImages($data['post']['id']);

            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');

        }


        public function create_record(){
            //create post record on db 
            $id = $this->post_model->create_record();
            //obtienes el record y lo mandas a editar
            redirect('admin/proyectos/editar/' . $id);
            //edit_with_id($id);

        }

        public function cancel_record(){
            $id = $this->input->post('proyecto_id');
            $this->post_model->delete_post($id);
            //if there are images delete them too
            redirect('admin/proyectos');
        }

    
        public function create(){

            // $post = null;

            // if(!empty($_FILES) && !$post) {
            //     print_r('no se subio la imagen!');
            // }


        if(!$this->session->userdata('logged_in')){
            $this->session->set_flashdata('error_admin', 'No eres administrador'); 
            redirect('admin/login');
        }

        

            $data['title'] = 'Crear Proyecto';

            //fetch categories

            $data['categorias'] = $this->post_model->get_cats();

            $this->form_validation->set_rules('titulo', 'titulo', 'required');
            $this->form_validation->set_rules('descripcion', 'descripcion', 'required');


            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/admin/header');
                $this->load->view('posts/create', $data);
                $this->load->view('templates/admin/footer');
    
            }else {

                   //creates the actual post
                   $post = $this->post_model->create_post();
                   $post_id = $post['id'];


                //TODO: cuando le haga submit al post, lo regresa a donde mismo



                

                //if there are file to upload

                if($this->input->post('file_submit') && !empty($_FILES['file_upload']['name'])){
                    $number_files = sizeof($_FILES['file_upload']['tmp_name']);
                    $files = $_FILES['file_upload'];

                    //Checar si el archivo tiene un error
                    for($i = 0; $i < $number_files; $i++){
                        if($_FILES['file_upload']['error'][$i] != 0 ){
                            $this->form_validation->set_message('file_upload', 'No se pudo subir el archivo.');
                            return false;
                        }
                    }

                    
                //Upload image
                $config['upload_path'] = './assets/images/proyectos/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';                
                $config['max_size'] = '4064';                
                $config['max_width'] = '4000';                
                $config['max_height'] = '4000';   

                
                //for each file do this

                for($i=0; $i < $number_files; $i++){
                    $_FILES['file_upload']['name'] = $files['name'][$i];
                    $_FILES['file_upload']['type'] = $files['type'][$i];
                    $_FILES['file_upload']['tmp_name'] = $files['tmp_name'][$i];
                    $_FILES['file_upload']['error'] = $files['error'][$i];
                    $_FILES['file_upload']['size'] = $files['size'][$i];

                    $this->upload->initialize($config);

                 

                    if($this->upload->do_upload('file_upload')) {

                        $data = $this->upload->data();
                        chmod($data['full_path'], 0777);

                        //insert to images db

                        $insert[$i]['nombre'] = $data['file_name'];
                        $insert[$i]['size'] = $data['file_size'];
                        $insert[$i]['id_proyecto'] = $post_id;

                    }
                }

                //insertar las imagenes en la base de datos
                $this->db->insert_batch('img_proyectos', $insert);

                $this->session->set_flashdata('post_success', 'Has agregado un proyecto');                 

                redirect('admin/proyectos');
                
        

            }
            
            

                
              
                // if(! $this->upload->do_upload()){
                //     $errors  = array('error' => $this->upload->display_errors());
                //     $post_image = 'nofile.jpg';
                // }else {
                //     $data = array('upload_data' => $this->upload->data());
                //     // $post_image = $_FILES['userfile']['name'];
                //     // $pic1 = $_FILES['userfile']['name'];
                //     // $pic2 = $_FILES['pic2']['name'];
                //     // $pic3 = $_FILES['pic3']['name'];
                //     // $pic4 = $_FILES['pic4']['name'];
                //     // $pic5 = $_FILES['pic5']['name'];
                //     $images = array(
                //         'pic1' => $_FILES['userfile']['name'],
                //         'pic2' => $_FILES['pic2']['name'],
                //         'pic3' => $_FILES['pic3']['name'],
                //         'pic4' => $_FILES['pic4']['name'],
                //         'pic5' => $_FILES['pic5']['name']

                //     );
                // }

                // $this->post_model->create_post($images);
                // $this->session->set_flashdata('msg', 'Haz agregado un proyecto');                
                // redirect('admin/proyectos');
            }
            
       
        }

        public function delete($id){

            $this->post_model->delete_post($id);
            $this->session->set_flashdata('deleted_success', 'Borrado');                         
            redirect('admin/proyectos');
        }

        public function edit($slug){

            $data['title'] = "Editar Proyecto";

            $data['categorias'] = $this->post_model->get_cats();

        
            
            //gets the post with the slug
            $data['post'] = $this->post_model->get_posts($slug);

            $data['images'] = $this->image_model->getImages($data['post']['id']);
            
           

            //if the post is not found show 404
            if(empty($data['post'])) {
                show_404();
            }



            $this->load->view('templates/admin/header', $data);
            $this->load->view('posts/edit', $data);
            $this->load->view('templates/admin/footer');
        }



        public function edit_with_id($id){
            $data['title'] = "Editar Proyecto";
            
            $data['categorias'] = $this->post_model->get_cats();

        
            //get the post just created
            $data['post'] = $this->post_model->get_posts_by_id($id);

            //$data['images'] = $this->image_model->getImages($data['post']['id']);

            $data['cat_name'] = $this->category_model->get_cat($data['post']['categoria_id']);

    
            
      
            //if the post is not found show 404
            if(empty($data['post'])) {
                show_404();
            }



            $this->load->view('templates/admin/header', $data);
            $this->load->view('posts/edit', $data);
            $this->load->view('templates/admin/footer');
        }



        public function update() {

            
            $data['categorias'] = $this->post_model->get_cats();

        
            //get the post just created
            $id = $this->input->post('id');
            $data['post'] = $this->post_model->get_posts_by_id($id);

            $this->form_validation->set_rules('titulo', 'titulo', 'required');
            $this->form_validation->set_rules('descripcion', 'descripcion', 'required');


            if($this->form_validation->run() === FALSE){
                $this->session->set_flashdata('error_submit', 'Asegurate de que titulo y descripción no esten vacios.');                 
                 $id = $this->input->post('id');
                 redirect('admin/proyectos/editar/' . $id);                
            }else{
                $this->post_model->update_post();
                $this->session->set_flashdata('update_success', 'Guardado');                                 
                redirect('admin/proyectos');
            }


        }

        public function callme(){
            $data['message'] = 'call me';
        }



    
      
    }