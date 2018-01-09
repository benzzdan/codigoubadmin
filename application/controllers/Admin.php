<?php
class Admin extends CI_Controller {

    private $upload_path = './uploads';

    public function dashboard(){

        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $data['categorias'] = $this->category_model->get_cats();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('templates/admin/footer');
     }

    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('user_logout', 'Haz cerrado sesión');
        redirect('admin/login');
        
    }

    public function login(){

        $this->form_validation->set_rules('username', 'Username', 'required',
        array(
            'required'      => 'El campo %s esta vacio.',
    ));
        $this->form_validation->set_rules('password', 'Password', 'required',
        array(
            'required'      => 'El campo %s esta vacio.',
    ));


        //si corren las validationes cuando se le haga submit a la forma pasa lo de abajo 

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/admin/login');
            
        } else {
            $username = $this->input->post('username');
            //get password
            $password  = md5($this->input->post('password'));

            //Login user 
            $user_id = $this->admin_model->login($username ,$password);

            if($user_id) {
                //Create session
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $ussername,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

                //mensaje de que todo salio bien 

                $this->session->set_flashdata('sucess_login', 'Bienvenido Administrador');
                redirect('admin/dashboard');

            }else {
                //set error if login is bad
                $this->session->set_flashdata('error_login', 'Verifica tu información');
                redirect('admin/login');
            }

            redirect('admin');
        }
    }


    public function proyectos(){

        //Si no eres administrador
                if(!$this->session->userdata('logged_in')){
                    redirect('admin/login');
                }

                //Si no se obtienen los proyectos
                
                $data['titulo'] = 'Mis Proyectos';  
                $data['proyectos'] = $this->post_model->get_admin_posts();
                $data['categorias'] = $this->category_model->get_cats();
                

    
    
                $this->load->view('templates/admin/header', $data);
                $this->load->view('admin/proyectos', $data);
                $this->load->view('templates/admin/footer');
        
        }


            public function view($slug = NULL) {


        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

                //gets the post with the slug
                $data['proyecto'] = $this->post_model->get_posts($slug);

                //if the post is not found show 404
                if(empty($data['proyecto'])) {
                    show_404();
                }

                $data['titulo'] = $data['proyecto']['titulo'];

                $data['images'] = $this->image_model->getImages($data['proyecto']['id']);
                

                $this->load->view('templates/admin/header');
                $this->load->view('admin/view', $data);
                $this->load->view('templates/admin/footer');

            }


            public function delete($id){
                $this->session->set_flashdata('deleted_success', 'Borrado');                                         
                $this->post_model->delete_post($id);
                redirect('admin/proyectos');
        }

        public function upload(){

          
           
        //upload process starts if there are files to upload on the post 
                    if(! empty($_FILES) ){

                        $number_files = sizeof($_FILES['file']['tmp_name']);
                        $files = $_FILES['file'];

                        for($i = 0; $i < $number_files; $i++){
                            if($_FILES['file']['error'][$i] != 0 ){
                                $this->form_validation->set_message('file_upload', 'No se pudo subir el archivo.');
                                return false;
                            }
                        }

                        //Upload image
                        $config['upload_path'] = './uploads';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';                
                        $config['max_size'] = '4064';                
                        $config['max_width'] = '4000';                
                        $config['max_height'] = '4000';   

                        // $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        
                        //subir imagenes y si hay error echo
                        if(!$this->upload->do_upload('file')) {
                            echo 'failed to upload!';
                            return false;
                        }else{
                                   //insert to images db
                                          
                            $data = $this->upload->data();   
                            
                            $insert['nombre'] = $data['file_name'];
                            $insert['size'] = $data['file_size'];
                            $insert['id_proyecto'] = $this->input->post('proyecto_id');

                            print_r($insert);


                            $this->db->insert('img_proyectos', $insert);
                            

                        }

                        //guardar en bd
                        
                    }

       // $this->image_model->update_post_with_imgs();
        


        }

        public function removeImg(){

            echo('removiendo archivo!');
            //checa el post del file
            $file = $this->input->post('file');

            if(empty($file)){
                echo 'its empty!';
            }

            //si es true y existe en el server
            if($file && file_exists($this->upload_path . '/' . $file)){
                unlink($this->upload_path . '/' . $file);
            }

            //delete img from db
           $this->image_model->del_img($file);
        }


        public function getimagelist($id){
            $images = $this->image_model->getImages($id);

            header("Content-type: text/json");
            header("Content-type: application/json");
            echo json_encode($images);
        }


        public function users(){

            $data['admin'] = $this->admin_model->getAdmin();
            $data['categorias'] = $this->category_model->get_cats();
            
            if(!$this->session->userdata('logged_in')){
                redirect('admin/login');
            }

            $this->load->view('templates/admin/header', $data);
            $this->load->view('admin/users', $data);
            $this->load->view('templates/admin/footer');

        }
              

        public function change_passwd(){


        $data['admin'] = $this->admin_model->getAdmin();
            
        $this->form_validation->set_rules('password', 'Password', 'required',
        array(
            'required'      => 'El campo %s esta vacio.',
        ));
        $this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]',
        array(
            'required'      => 'El campo %s esta vacio.',
            'matches[password]' => 'Las contraseñas no coinciden'
        ));

        $this->form_validation->set_message('matches', 'Las contraseñas no coinciden');
        
       

        // $this->form_validation->set_message('password2', 'Las contraseñas no coinciden');
        
        
            if($this->form_validation->run() === FALSE){


                $this->load->view('templates/admin/header');
                $this->load->view('admin/users', $data);
                $this->load->view('templates/admin/footer');
                
            } else {
                //change password on db
                $this->admin_model->chg_passwd();
                $this->session->set_flashdata('success_chng', 'Haz cambiado la contraseña');
                $this->load->view('templates/admin/header');
                $this->load->view('admin/users', $data);
                $this->load->view('templates/admin/footer');
            }

        }






}